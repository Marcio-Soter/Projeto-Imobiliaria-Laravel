<div id="loginModal"
     class="fixed inset-0 bg-black/60 backdrop-blur-sm hidden z-50">

    <div class="flex items-center justify-center min-h-screen p-4">

        <div class="bg-white w-full max-w-md rounded-3xl shadow-2xl overflow-hidden">

            <!-- Cabeçalho -->
            <div class="bg-gray-900 text-white text-center py-8 relative">

                <button
                    onclick="fecharModal()"
                    class="absolute top-4 right-4 text-2xl hover:text-gray-300">

                    ✕

                </button>

                <h2 class="text-3xl font-bold">
                    Bem-vindo
                </h2>

                <p class="text-gray-300 mt-2">
                    Faça login para continuar
                </p>

            </div>

            <!-- Corpo -->
            <div class="p-8">

                <form method="POST" action="{{ route('login') }}">

                    @csrf

                    <div class="mb-5">

                        <label class="block text-sm font-semibold mb-2">
                            Email
                        </label>

                        <input
                            type="email"
                            name="email"
                            placeholder="Digite seu email"
                            class="w-full border rounded-xl px-4 py-3 focus:ring-2 focus:ring-blue-500 outline-none">

                    </div>

                    <div class="mb-6">

                        <label class="block text-sm font-semibold mb-2">
                            Senha
                        </label>

                        <input
                            type="password"
                            name="password"
                            placeholder="Digite sua senha"
                            class="w-full border rounded-xl px-4 py-3 focus:ring-2 focus:ring-blue-500 outline-none">

                    </div>

                    <button
                        class="w-full bg-gray-900 hover:bg-black text-white py-3 rounded-xl font-semibold transition">

                        Entrar

                    </button>

                </form>

                <div class="mt-6 text-center">

                    <a href="#" class="text-blue-600 hover:underline">
                        Esqueceu sua senha?
                    </a>

                </div>

            </div>

        </div>

    </div>

</div>