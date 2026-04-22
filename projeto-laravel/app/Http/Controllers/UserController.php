<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\View;

use Ramsey\Uuid\Uuid;

// use Illuminate\Support\Facades\DB;
// use Illuminate\Support\Facades\DB;


class UserController extends Controller
{
    
    // Mostrar o formulário
    public function create()
    {
        return view('usuarios.create');
    }

    // Receber os dados do formulário
    public function store(Request $request)
    {
            // DB::table('usuarios')->insert([
            Usuario::create([
                'id' => Uuid::uuid4()->toString(),
                'nome' => $request->nome,
                'email' => $request->email,
                'senha' => Hash::make($request->password),
        ]);

       return to_route('usuarios.index')->with('success', 'Usuário cadastrado!');
    }


    public function index()
    {
        if (session('usuario_tipo') !== 'admin') {
        return redirect('/');
        }
        
        $usuarios = Usuario::all();
        return view('usuarios.index', compact('usuarios'));
    }

    public function edit($id)
    {
        $usuario = Usuario::findOrFail($id);
        return View('usuarios.edit', compact('usuario'));
    }

    public function update(Request $request, $id)
    {
        $usuario = Usuario::findOrFail($id);

        $usuario->update([
            'nome' => $request->nome,
            'email' => $request->email
        ]);
        return redirect()->route('usuarios.index');
    }

    public function destroy($id)
    {
        $usuario = Usuario::findOrFail($id);
        $usuario->delete();

        return redirect()->route('usuarios.index');

    }
}

