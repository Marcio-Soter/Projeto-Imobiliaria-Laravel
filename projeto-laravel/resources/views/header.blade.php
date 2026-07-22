<header class="absolute top-0 left-0 w-full z-50">

    <div class="max-w-7xl mx-auto px-8 py-6 flex justify-between items-center">

        <!-- Logo -->
        <a href="{{ route('home') }}" class="text-white text-3xl font-bold tracking-wide">
            IMOBILIÁRIA
        </a>

        <!-- Menu -->
        <nav class="hidden md:flex items-center gap-10 text-white font-medium">

            <a href="#" class="hover:text-yellow-400 transition">
                Comprar
            </a>

            <a href="#" class="hover:text-yellow-400 transition">
                Alugar
            </a>

            <a href="#" class="hover:text-yellow-400 transition">
                Imóveis
            </a>

            <a href="#" class="hover:text-yellow-400 transition">
                Sobre
            </a>

            <a href="#" class="hover:text-yellow-400 transition">
                Contato
            </a>

        </nav>

        <!-- Área do usuário -->
        <div class="flex items-center gap-4">

            @if(session('usuario_id'))

                <span class="text-white">
                    {{ session('usuario_nome') }}
                </span>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <button class="bg-red-600 px-5 py-2 rounded-full hover:bg-red-700 transition">
                        Sair
                    </button>

                </form>

            @else

                <button
                    onclick="abrirModal()"
                    class="bg-white text-black px-6 py-2 rounded-full hover:bg-gray-200 transition">

                    Entrar

                </button>

            @endif

        </div>

    </div>

</header>