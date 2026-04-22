
@extends('layout')

@section('content')

<div class="p-4 flex flex-col items-center">

    <h1 class="text-2xl font-bold mb-4">Criar Usuário</h1>
    
    <div class="w-full max-w-3xl p-6 border-2 border-gray-400 bg-gray-50 rounded-xl shadow-sm">
        
        <form method="POST" action="/usuarios" class="flex flex-col gap-4">
            @csrf

            <div>
                <label class="block mb-1">Nome:</label>
                <input type="text" name="nome" placeholder="Nome"
                    class="w-full border border-gray-300 p-2 rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <div>
                <label class="block mb-1">Email:</label>
                <input type="email" name="email" placeholder="Email"
                    class="w-full border border-gray-300 p-2 rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <div>
                <label class="block mb-1">Senha:</label>
                <input type="password" name="password" placeholder="Senha"
                    class="w-full border border-gray-300 p-2 rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <button type="submit"
                class="bg-green-600 text-white py-2 rounded hover:bg-green-700 transition">
                Salvar
            </button>
        </form>

    </div>
        <a href="{{ route('usuarios.index') }}">
            <button class="m-4 bg-gray-600 text-white px-4 py-2 rounded">
                Voltar
            </button>
        </a>
</div>

@endsection