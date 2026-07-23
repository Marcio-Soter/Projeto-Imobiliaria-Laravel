@extends('layout')

@section('content')


<!-- HERO -->
<section class="relative h-screen">

    <img
        src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?q=80&w=1600"
        class="absolute inset-0 w-full h-full object-cover"
    >

    <div class="absolute inset-0 bg-black/50"></div>


    <div class="relative z-10 flex flex-col justify-center items-center h-full text-center px-6">


        <h1 class="text-6xl font-bold text-white">
            Encontre o imóvel ideal
        </h1>


        <p class="text-white text-xl mt-5">
            Casas, apartamentos e terrenos nas melhores localizações.
        </p>



        <div class="bg-white rounded-2xl shadow-2xl mt-10 p-6 w-full max-w-5xl">


            <div class="grid md:grid-cols-4 gap-4">


                <select class="border rounded-lg p-3">
                    <option>Cidade</option>
                </select>


                <select class="border rounded-lg p-3">
                    <option>Tipo</option>
                </select>


                <select class="border rounded-lg p-3">
                    <option>Preço</option>
                </select>


                <button
                    class="bg-black text-white rounded-lg hover:bg-gray-800">

                    Pesquisar

                </button>


            </div>


        </div>


    </div>


</section>





<!-- CASAS -->
<section class="py-20 bg-gray-100">


    <div class="max-w-7xl mx-auto px-6">


        <h2 class="text-4xl font-bold text-center mb-12">
            Casas
        </h2>



        <div class="grid md:grid-cols-3 gap-8">


            @foreach($casas as $imovel)

                <x-card-imovel :imovel="$imovel"/>

            @endforeach


        </div>


    </div>


</section>







<!-- CASAS EM CONDOMÍNIO -->
<section class="py-20 bg-white">


    <div class="max-w-7xl mx-auto px-6">


        <h2 class="text-4xl font-bold text-center mb-12">
            Casas em Condomínio
        </h2>



        <div class="grid md:grid-cols-3 gap-8">


            @foreach($casasCondominio as $imovel)

                <x-card-imovel :imovel="$imovel"/>

            @endforeach


        </div>


    </div>


</section>








<!-- APARTAMENTOS -->
<section class="py-20 bg-gray-100">


    <div class="max-w-7xl mx-auto px-6">


        <h2 class="text-4xl font-bold text-center mb-12">
            Apartamentos
        </h2>



        <div class="grid md:grid-cols-3 gap-8">


            @foreach($apartamentos as $imovel)

                <x-card-imovel :imovel="$imovel"/>

            @endforeach


        </div>


    </div>


</section>








<!-- TERRENOS -->
<section class="py-20 bg-white">


    <div class="max-w-7xl mx-auto px-6>


        <h2 class="text-4xl font-bold text-center mb-12">
            Terrenos
        </h2>



        <div class="grid md:grid-cols-3 gap-8">


            @foreach($terrenos as $imovel)

                <x-card-imovel :imovel="$imovel"/>

            @endforeach


        </div>


    </div>


</section>



@endsection