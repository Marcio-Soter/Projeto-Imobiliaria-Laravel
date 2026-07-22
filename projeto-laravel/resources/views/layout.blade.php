<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Imobiliária')</title>

    <!-- Tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">

    {{-- Header --}}
    @include('header')

    {{-- Mensagens --}}
    <div class="max-w-6xl mx-auto mt-4 px-4">

        @if(session('erro'))
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
                {{ session('erro') }}
            </div>
        @endif

        @if(session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

    </div>

    {{-- Conteúdo da página --}}
    <main>
        @yield('content')
    </main>

    {{-- Modal de Login --}}
    @include('modal-login')

    <script>

        function abrirModal() {
            document
                .getElementById('loginModal')
                .classList.remove('hidden');
        }

        function fecharModal() {
            document
                .getElementById('loginModal')
                .classList.add('hidden');
        }

        // Fecha clicando fora
        document.getElementById('loginModal').addEventListener('click', function(e){

            if(e.target === this){
                fecharModal();
            }

        });

        // Fecha com ESC
        document.addEventListener('keydown', function(e){

            if(e.key === 'Escape'){
                fecharModal();
            }

        });

    </script>

</body>
</html>