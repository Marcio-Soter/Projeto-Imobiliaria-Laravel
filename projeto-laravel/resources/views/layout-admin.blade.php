<!DOCTYPE html>
<html lang="pt-BR">
<head>

    <meta charset="UTF-8">

    <title>Painel Administrativo</title>

    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body class="bg-gray-100">

<div class="flex min-h-screen">

    @include('admin.sidebar')

    <div class="flex-1">

        @include('admin.topbar')

        <main class="p-8">

        @if(session('success'))

        <div class="max-w-6xl mx-auto mt-4 px-4">
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded">
                {{ session('success') }}
            </div>
        </div>

        @endif


        @if(session('erro'))

        <div class="max-w-6xl mx-auto mt-4 px-4">
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded">
                {{ session('erro') }}
            </div>
        </div>

        @endif

            @yield('content')

        </main>

    </div>

</div>

</body>
</html>