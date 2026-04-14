<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        dd($request->all()); // só pra testar
    }
}

