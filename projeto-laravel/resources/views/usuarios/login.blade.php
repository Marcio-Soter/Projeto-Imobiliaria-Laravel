@extends('layout')

@section('content')


<div class="flex flex-col items-center p-4">

    <h1 class="text-2xl font-bold mb-4">Login</h1>

    <div class="w-full max-w-2xl p-6 border-2 border-gray-400 bg-gray-50 rounded-xl shadow-sm">

        @if(session('erro'))
            <div class="bg-red-100 text-red-700 p-2 mb-3 rounded">
                {{ session('erro') }}
            </div>
        @endif

        <form method="POST" action="/login" class="flex flex-col gap-4">
            @csrf

            <div>
                <label class="block mb-1">Email:</label>
                <input type="email" name="email"
                    class="w-full border border-gray-300 p-2 rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <div>
                <label class="block mb-1">Senha:</label>
                <input type="password" name="password"
                    class="w-full border border-gray-300 p-2 rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <button type="submit"
                class="bg-green-600 text-white py-2 rounded hover:bg-green-700 transition">
                Entrar
            </button>

        </form>

    </div>

</div>

@endsection