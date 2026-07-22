<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Imovel;

class HomeController extends Controller
{
    public function index()
    {
        $imoveis = Imovel::with('fotos')
            ->where('ativo', true)
            ->latest()
            ->get();

        return view('home', compact('imoveis'));

    }
}
