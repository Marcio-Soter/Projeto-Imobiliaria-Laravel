

<header class="bg-gray-800 text-white p-4">
    <div class="max-w-5xl mx-auto flex justify-between items-center">

        <h1 class="text-lg font-bold">Sistema</h1>

        <nav class="flex items-center gap-3">

            <a href="{{ route('home') }}" class="hover:underline">
                Home
            </a>

            @if(session('usuario_tipo') === 'admin')
                <a href="{{ route('usuarios.index') }}" class="hover:underline">
                    Usuários
                </a>
            @endif

            <a href="{{ route('usuarios.create') }}" class="bg-green-500 px-3 py-1 rounded hover:bg-green-600">
                Cadastrar
            </a>

            @if(session('usuario_id'))

                <span class="text-sm">
                    Olá, {{ session('usuario_nome') }}
                </span>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button class="bg-red-500 px-3 py-1 rounded hover:bg-red-600">
                        Sair
                    </button>
                </form>

            @else

                <button onclick="abrirModal()" class="bg-blue-500 px-3 py-1 rounded hover:bg-blue-600">
                    Login
                </button>

            @endif

        </nav>

    </div>
</header>

</body>