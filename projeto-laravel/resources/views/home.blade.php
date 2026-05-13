@extends('layout')

@section('content')

<div class="min-h-screen flex flex-col items-center justify-center p-10 text-center 
            bg-cover bg-center"
     style="background-image: url('/images/166.jpg');">
     
    <h1 class="text-3xl font-bold mb-4">
        Bem-vindo ao sistema
    </h1>
    
    <p class="text-gray-600">
        Essa é a página pública da aplicação.
    </p>
    
    <a href="{{ route('usuarios.index') }}" class="mt-6 bg-blue-600 text-white px-4 py-2 rounded">
        Acessar sistema
    </a>
    
</div>
@endsection