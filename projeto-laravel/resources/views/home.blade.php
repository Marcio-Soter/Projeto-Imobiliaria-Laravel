@extends('layout')

@section('content')

<!-- HERO -->
<section class="relative h-screen">

    <!-- Imagem -->
    <img
        src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?q=80&w=1600"
        class="absolute inset-0 w-full h-full object-cover"
    >

    <!-- Escurece -->
    <div class="absolute inset-0 bg-black/50"></div>

    <!-- Conteúdo -->
    <div class="relative z-10 flex flex-col justify-center items-center h-full text-center px-6">

        <h1 class="text-6xl font-bold text-white">
            Encontre o imóvel ideal
        </h1>

        <p class="text-white text-xl mt-5">
            Casas, apartamentos e terrenos nas melhores localizações.
        </p>

        <!-- Pesquisa -->
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

<!-- IMÓVEIS -->
<section class="py-20 bg-gray-100">

    <div class="max-w-7xl mx-auto px-6">

        <h2 class="text-4xl font-bold text-center mb-12">
            Imóveis em destaque
        </h2>

        <div class="grid md:grid-cols-3 gap-8">

            @foreach($imoveis as $imovel)

            <div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition">

                @php
                $capa = $imovel->fotos->where('capa', true)->first();
            @endphp

            @if($capa)

            <img
                src="{{ asset('storage/'.$capa->foto) }}"
                class="w-full h-64 object-cover">

            @else

            <img
                src="https://via.placeholder.com/600x400"
                class="w-full h-64 object-cover">

            @endif

                <div class="p-6">

                    <h3 class="text-2xl font-semibold">
                        {{ $imovel->titulo }}
                    </h3>

                    <p class="text-gray-500 mt-2">
                        {{ $imovel->cidade }} - {{ $imovel->bairro }}
                    </p>

                    <div class="text-3xl text-green-600 font-bold mt-4">
                        R$ {{ number_format($imovel->valor, 2, ',', '.') }}
                    </div>

                    <div class="flex justify-between mt-6 text-gray-600">

                        <span>🛏 3</span>
                        <span>🚿 2</span>
                        <span>🚗 2</span>

                    </div>

                    <button
                        class="mt-6 w-full bg-black text-white py-3 rounded-lg hover:bg-gray-800">

                        Ver imóvel

                    </button>

                </div>

            </div>

            @endforeach

        </div>

    </div>

</section>

@endsection