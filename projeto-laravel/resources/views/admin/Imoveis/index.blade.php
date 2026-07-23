@extends('layout-admin')

@section('content')

<div class="flex justify-between items-center mb-6">

    <div>
        <h1 class="text-3xl font-bold">Imóveis</h1>
        <p class="text-gray-500">Gerencie todos os imóveis cadastrados.</p>
    </div>

    <a href="{{ route('imoveis.create') }}"
       class="bg-blue-600 hover:bg-blue-700 text-white px-5 py-3 rounded-lg">

        + Novo Imóvel

    </a>

</div>

<div class="bg-white rounded-xl shadow overflow-hidden">

    <table class="w-full">

        <thead class="bg-gray-100">

            <tr>
                <th class="p-4 text-left">Foto</th>
                <th class="p-4 text-left">Título</th>
                <th class="p-4 text-left">Tipo</th>
                <th class="p-4 text-left">Cidade</th>
                <th class="p-4 text-left">Valor</th>
                <th class="p-4 text-center">Ações</th>

            </tr>

        </thead>

        <tbody>

@forelse($imoveis as $imovel)

<tr>


        <td class="p-4">

        @php
            $capa = $imovel->fotos->where('capa', true)->first();
        @endphp

        @if($capa)

            <img 
                src="{{ asset('storage/'.$capa->foto) }}"
                class="w-24 h-16 object-cover rounded-lg">

        @else

            Sem foto

        @endif

    </td>

    <td class="p-4">
        {{ $imovel->titulo }}
    </td>

    <td class="p-4">
        {{ $imovel->tipo }}
    </td>

    <td class="p-4">
        {{ $imovel->cidade }}
    </td>

    <td class="p-4">
        R$ {{ number_format($imovel->valor, 2, ',', '.') }}
    </td>

    <td class="p-4 text-center">

    <div class="flex justify-center gap-3">

        <a href="{{ route('imoveis.edit', $imovel->id) }}"
           class="bg-yellow-500 hover:bg-yellow-600 text-white px-4 py-2 rounded-lg">

            Editar

        </a>


        <form action="{{ route('imoveis.destroy', $imovel->id) }}"
              method="POST">

            @csrf
            @method('DELETE')

            <button
                onclick="return confirm('Deseja excluir este imóvel?')"
                class="bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded-lg">

                Excluir

            </button>

        </form>

    </div>

</td>

</tr>

@empty

<tr>
    <td colspan="5" class="p-4 text-center">
        Nenhum imóvel cadastrado.
    </td>
</tr>

@endforelse

</tbody>
    </table>

</div>

@endsection