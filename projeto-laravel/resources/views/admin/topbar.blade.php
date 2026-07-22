<header class="bg-white shadow h-20 flex justify-between items-center px-8">

    <h1 class="text-3xl font-bold">

        Dashboard

    </h1>

    <div class="flex items-center gap-4">

      

        <form method="POST" action="{{ route('logout') }}">

            @csrf

            <button class="bg-red-600 text-white px-5 py-2 rounded-lg">

                Sair

            </button>

        </form>

    </div>

</header>