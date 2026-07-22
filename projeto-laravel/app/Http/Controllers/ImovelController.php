<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Imovel;
use Illuminate\Support\Str;
use App\Models\ImovelFoto;
use Illuminate\Support\Facades\Storage;

class ImovelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $imoveis = Imovel::with('fotos')->latest()->get();
        return view('admin.imoveis.index', compact('imoveis'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         return view('admin.imoveis.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required|max:255',
            'tipo' => 'required',
            'finalidade' => 'required',
            'valor' => 'required',
            'cidade' => 'required|max:100',
            'bairro' => 'required|max:100',
            'fotos.*' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:5120',
        ]);

            // Imovel::create([
            $imovel = Imovel::create([

            'titulo' => $request->titulo,

            'slug' => Str::slug($request->titulo),

            'tipo' => $request->tipo,

            'finalidade' => $request->finalidade,

            'condominio' => false,

            'nome_condominio' => null,

            'valor' => str_replace(',', '.', str_replace('.', '', $request->valor)),

            'cidade' => $request->cidade,

            'bairro' => $request->bairro,

            'endereco' => $request->endereco,

            'quartos' => $request->quartos ?? 0,

            'suites' => $request->suites ?? 0,

            'banheiros' => $request->banheiros ?? 0,

            'garagens' => $request->garagens ?? 0,

            'area_total' => $request->area_total,

            'area_construida' => $request->area_construida,

            'descricao' => $request->descricao,

            'ativo' => true

        ]);


            if ($request->hasFile('fotos')) {

           foreach ($request->file('fotos') as $indice => $foto) {

            $caminho = $foto->store('imoveis', 'public');

            ImovelFoto::create([
                'imovel_id' => $imovel->id,
                'foto'      => $caminho,
                'capa'      => $indice == 0,
                'ordem'     => $indice + 1,
            ]);

        }

}



        return redirect()
            ->route('imoveis.index')
            ->with('success', 'Imóvel cadastrado com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('admin.imoveis.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('admin.imoveis.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
