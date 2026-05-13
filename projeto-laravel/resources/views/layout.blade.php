<!DOCTYPE html>
<html>
<head>
    <title>Sistema</title>

    <!-- Tailwind GLOBAL -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>

@include('header')



<!-- INÍCIO DO BLOCO DE MENSAGENS -->
<div class="max-w-5xl mx-auto mt-4 px-4">
    
    {{-- Mensagem de Erro --}}
    @if(session('erro'))
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert">
            <strong class="font-bold">Aviso:</strong>
            <span class="block sm:inline">{{ session('erro') }}</span>
        </div>
    @endif

    {{-- Mensagem de Sucesso (como "Usuário cadastrado!") --}}
    @if(session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
            <span class="block sm:inline">{{ session('success') }}</span>
        </div>
    @endif

</div>
<!-- FIM DO BLOCO DE MENSAGENS -->


<div class="p-4">
    @yield('content')
</div>

<<div id="loginModal" class="fixed inset-0 bg-black bg-opacity-50 hidden">

    <!-- CENTRALIZAÇÃO -->
    <div class="flex items-center justify-center h-full">

        <!-- CAIXA -->
        <div class="bg-white rounded-xl shadow-lg w-full max-w-md p-6 relative">

            <button onclick="fecharModal()" class="absolute top-2 right-2 text-gray-500 hover:text-black">
                ✕
            </button>

            <h2 class="text-2xl font-bold mb-4 text-center">
                Login
            </h2>

            <form method="POST" action="/login">
                @csrf

                <input type="email" name="email" placeholder="Email"
                    class="w-full border rounded px-3 py-2 mb-3">

                <input type="password" name="password" placeholder="Senha"
                    class="w-full border rounded px-3 py-2 mb-3">

                <button class="w-full bg-green-600 text-white py-2 rounded hover:bg-green-700">
                    Entrar
                </button>
            </form>

        </div>

    </div>
</div>

<script>
function abrirModal() {
    document.getElementById('loginModal').classList.remove('hidden');
    // document.getElementById('loginModal').classList.add('flex');
}

function fecharModal() {
    document.getElementById('loginModal').classList.add('hidden');
    // document.getElementById('loginModal').classList.remove('flex');
}
</script>

</body>
</html>