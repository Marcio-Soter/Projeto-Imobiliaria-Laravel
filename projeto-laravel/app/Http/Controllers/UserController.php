<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\View;

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
            DB::table('usuarios')->insert([
            'nome' => $request->nome,
            'email' => $request->email,
            'senha' => Hash::make($request->password),
        ]);

       return redirect('/usuarios')->with('success', 'Usuário cadastrado!');
    }


    public function index()
    {
        $usuarios = DB::table('usuarios')->get();

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

