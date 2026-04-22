
@extends('layout')

@section('content')


<div class="flex flex-col items-center p-4">

    <h1 class="text-2xl font-bold mb-4">Editar Usuário</h1>

    <div class="w-full max-w-2xl p-6 border-2 border-gray-400 bg-gray-50 rounded-xl shadow-sm">

        <form action="{{ route('usuarios.update', $usuario->id) }}" method="POST" class="flex flex-col gap-4">
            @csrf
            @method('PUT')

            <div>
                <label class="block mb-1">Nome:</label>
                <input type="text" name="nome" value="{{ $usuario->nome }}"
                    class="w-full border border-gray-300 p-2 rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <div>
                <label class="block mb-1">Email:</label>
                <input type="email" name="email" value="{{ $usuario->email }}"
                    class="w-full border border-gray-300 p-2 rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

           
            <button type="submit"
                class="bg-blue-600 text-white py-2 rounded hover:bg-blue-700 transition">
                Atualizar
            </button>
            
        </form>

    </div>

    <a href="{{ route('usuarios.create') }}">
    <button class="m-4 bg-gray-600 text-white px-4 py-2 rounded">
        Voltar
    </button>
</a>

</div>

@endsection