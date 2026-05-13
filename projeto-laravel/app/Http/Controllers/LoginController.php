<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\Usuario;

class LoginController extends Controller
{

public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $usuario = Usuario::where('email', $request->email)->first();

        if ($usuario && Hash::check($request->password, $usuario->senha)) {

            session([
                'usuario_nome' => $usuario->nome,
                'usuario_id' => $usuario->id,
                'usuario_tipo' => $usuario->tipo
            ]);

            // Força a gravação da sessão antes de redirecionar:
            session()->save();

            // LOGICA DE REDIRECIONAMENTO:
        if ($usuario->tipo === 'admin') {
            return redirect()->route('usuarios.index');
        }
        // Se for usuário comum, manda para a Home, onde ele tem permissão
        return redirect()->route('home');
           
        }

        return back()->with('erro', 'Email ou senha inválidos');
    }




    public function logout()
    {
            session()->flush();
            return redirect()->route('home');
    }

    

    
}
