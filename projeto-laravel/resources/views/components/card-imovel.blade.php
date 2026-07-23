<div class="bg-white rounded-xl shadow-lg overflow-hidden hover:shadow-2xl transition">

    @php
        $capa = $imovel->fotos->where('capa', true)->first();
    @endphp


    @if($capa)

        <div
 
     class="relative overflow-hidden cursor-pointer group rounded-t-xl foto-imovel"
     data-imovel="{{ $imovel->id }}"
     data-fotos='@json($imovel->fotos)'>

    <img
            src="{{ asset('storage/'.$capa->foto) }}"
            class="w-full h-64 object-cover transition duration-500 group-hover:scale-110">

        

    </div>

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
            📍 {{ $imovel->cidade }} - {{ $imovel->bairro }}
        </p>


        @if($imovel->condominio)

            <p class="text-blue-600 mt-2 font-semibold">
                🏘 {{ $imovel->nome_condominio }}
            </p>

        @endif


        <div class="text-3xl text-green-600 font-bold mt-4">

            R$ {{ number_format($imovel->valor, 2, ',', '.') }}

        </div>


        @if($imovel->descricao)

            <p class="text-gray-600 mt-4 text-sm line-clamp-3">
                {{ $imovel->descricao }}
            </p>

        @endif

    <div class="grid grid-cols-3 gap-4 mt-6 text-gray-600 border-t pt-4">


    <div class="flex flex-col items-center">

        <i class="fa-solid fa-bed text-xl mb-1"></i>

        <span class="text-sm">
            {{ $imovel->quartos }} quartos
        </span>

    </div>



    <div class="flex flex-col items-center">

        <i class="fa-solid fa-bath text-xl mb-1"></i>

        <span class="text-sm">
            {{ $imovel->banheiros }} banheiros
        </span>

    </div>



    <div class="flex flex-col items-center">

        <i class="fa-solid fa-car text-xl mb-1"></i>

        <span class="text-sm">
            {{ $imovel->garagens }} vagas
        </span>

    </div>


</div>




    </div>

</div>