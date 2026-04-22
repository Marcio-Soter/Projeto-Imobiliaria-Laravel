
@extends('layout')

@section('content')

<body>


<div class="p-4 flex flex-col items-center">
    
    <h1 class="text-2xl font-bold p-4">Lista de Usuários</h1>
   @foreach ($usuarios as $u)
    <div class="flex items-center gap-3 mb-3 p-3 border-4 border-gray-400 bg-gray-50 rounded-xl  max-w-2xl">

        <div>
            <strong>Nome:</strong> {{ $u->nome }} 
            - <strong>Email:</strong> {{ $u->email }}
        </div>

        <div class="flex gap-2">

            <a href="{{ route('usuarios.edit', $u->id) }}">
                <button class="bg-blue-500 text-white px-2 py-1 rounded">
                    Editar
                </button>
            </a>

            <form action="{{ route('usuarios.destroy', $u->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button class="bg-red-500 text-white px-2 py-1 rounded">
                    Excluir
                </button>
            </form>

        </div>

    </div>
@endforeach

<a href="{{ route('home') }}">
    <button class="m-4 bg-gray-600 text-white px-4 py-2 rounded">
        Voltar
    </button>
</a>

</div>


<!-- 🔹 MODAL -->
<div id="loginModal" class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center">

    <div class="bg-white rounded-xl shadow-lg w-full max-w-md p-6 relative">

        <button onclick="fecharModal()" class="absolute top-2 right-2">
            ✕
        </button>

        <h2 class="text-2xl font-bold mb-4 text-center">Login</h2>

        @if(session('erro'))
            <div class="bg-red-100 text-red-700 p-2 mb-3 rounded">
                {{ session('erro') }}
            </div>
        @endif

        <form method="POST" action="/login">
            @csrf

            <input type="email" name="email" placeholder="Email"
                class="w-full border rounded px-3 py-2 mb-3">

            <input type="password" name="password" placeholder="Senha"
                class="w-full border rounded px-3 py-2 mb-3">

            <button class="w-full bg-green-600 text-white py-2 rounded">
                Entrar
            </button>
        </form>
    </div>
</div>

<script>
function abrirModal() {
    document.getElementById('loginModal').classList.remove('hidden');
    document.getElementById('loginModal').classList.add('flex');
}

function fecharModal() {
    document.getElementById('loginModal').classList.add('hidden');
    document.getElementById('loginModal').classList.remove('flex');
}


</script>

@if(session('erro'))
    abrirModal();
@endif
</body>
</html>


@endsection