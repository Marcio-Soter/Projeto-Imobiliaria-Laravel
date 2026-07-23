<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Imobiliária')</title>

    <!-- Tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Font Awesome -->
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

    <!-- Google Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">

        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

        <link 
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" 
        rel="stylesheet">

</head>

<body class="bg-gray-100 font-[Poppins]">

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

    @include('modal-galeria')

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

        //modal galeria  das fotos: 
        function abrirGaleria(imagem){

            document.getElementById('fotoPrincipal').src = imagem;

            document.getElementById('galeriaModal').classList.remove('hidden');

        }

        function fecharGaleria(){

            document.getElementById('galeriaModal').classList.add('hidden');

        }


        function mostrarFoto(){

            let foto = fotosGaleria[fotoAtual].foto;

            document.getElementById('fotoPrincipal').src =
                '/storage/' + foto;

        }


        function proximaFoto(){

            fotoAtual++;

            if(fotoAtual >= fotosGaleria.length){

                fotoAtual = 0;

            }

            mostrarFoto();

        }


        function fotoAnterior(){

            fotoAtual--;

            if(fotoAtual < 0){

                fotoAtual = fotosGaleria.length - 1;

            }

            mostrarFoto();

        }



            let fotosGaleria = [];

            let fotoAtual = 0;

            document.querySelectorAll('.foto-imovel').forEach(function(foto){

            foto.addEventListener('click', function(){

               fotosGaleria = JSON.parse(this.dataset.fotos);

                fotoAtual = 0;

                mostrarFoto();

                document
                    .getElementById('galeriaModal')
                    .classList.remove('hidden');
                            });

        });

    </script>

</body>
</html>