@extends('layout-admin')

@section('content')

<div class="grid grid-cols-4 gap-6">

    <div class="bg-white rounded-xl shadow p-6">

        <div class="text-gray-500">
            Imóveis
        </div>

        <div class="text-4xl font-bold mt-2">
            120
        </div>

    </div>

    <div class="bg-white rounded-xl shadow p-6">

        <div class="text-gray-500">
            Corretores
        </div>

        <div class="text-4xl font-bold mt-2">
            18
        </div>

    </div>

    <div class="bg-white rounded-xl shadow p-6">

        <div class="text-gray-500">
            Mensagens
        </div>

        <div class="text-4xl font-bold mt-2">
            53
        </div>

    </div>

    <div class="bg-white rounded-xl shadow p-6">

        <div class="text-gray-500">
            Usuários
        </div>

        <div class="text-4xl font-bold mt-2">
            10
        </div>

    </div>

</div>

<div class="bg-white mt-10 rounded-xl shadow">

    <div class="p-6 border-b font-bold">

        Últimos imóveis cadastrados

    </div>

    <table class="w-full">

        <thead>

            <tr class="bg-gray-100">

                <th class="p-4 text-left">Imóvel</th>
                <th class="p-4 text-left">Cidade</th>
                <th class="p-4 text-left">Valor</th>
                <th class="p-4 text-left">Status</th>

            </tr>

        </thead>

        <tbody>

            <tr>

                <td class="p-4">Casa Moderna</td>
                <td class="p-4">Feira de Santana</td>
                <td class="p-4">R$ 450.000</td>
                <td class="p-4 text-green-600">Publicado</td>

            </tr>

        </tbody>

    </table>

</div>

@endsection