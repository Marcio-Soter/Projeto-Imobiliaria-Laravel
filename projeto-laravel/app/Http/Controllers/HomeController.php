<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Imovel;

class HomeController extends Controller
{
    public function index()
    {
        $casas = Imovel::with('fotos')
            ->where('tipo', 'Casa')
            ->where('condominio', 0)
            ->where('ativo', true)
            ->latest()
            ->get();

        $casasCondominio = Imovel::with('fotos')
            ->where('tipo', 'Casa')
            ->where('condominio', 1)
            ->where('ativo', true)
            ->latest()
            ->get();

        $apartamentos = Imovel::with('fotos')
            ->where('tipo', 'Apartamento')
            ->where('ativo', true)
            ->latest()
            ->get();

        $terrenos = Imovel::with('fotos')
            ->where('tipo', 'Terreno')
            ->where('ativo', true)
            ->latest()
            ->get();

        return view('home', compact(
            'casas',
            'casasCondominio',
            'apartamentos',
            'terrenos'
        ));
    }
}
