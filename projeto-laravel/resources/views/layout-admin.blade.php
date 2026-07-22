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

            @yield('content')

        </main>

    </div>

</div>

</body>
</html>