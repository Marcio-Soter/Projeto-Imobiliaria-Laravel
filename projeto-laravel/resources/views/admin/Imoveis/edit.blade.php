@extends('layout-admin')

@section('content')

<div class="max-w-5xl mx-auto">

    <h1 class="text-3xl font-bold mb-8">
        Editar Imóvel
    </h1>

    <form action="{{ route('imoveis.update', $imovel->id) }}"
      method="POST"
      enctype="multipart/form-data"
      class="bg-white rounded-xl shadow p-8">

    @csrf
    @method('PUT')

        <div class="grid grid-cols-2 gap-6">

            <div>
                <label class="block mb-2 font-semibold">Título</label>

                <input
                    type="text"
                    name="titulo"
                    value="{{ $imovel->titulo }}"
                    class="w-full border rounded-lg p-3">
            </div>

            <div>
                <label class="block mb-2 font-semibold">Tipo</label>

                <select
                    name="tipo"
                    class="w-full border rounded-lg p-3">

                    <option>Casa</option>
                    <option>Apartamento</option>
                    <option>Terreno</option>
                    <option>Sala Comercial</option>

                </select>

            </div>

            <div>

                <label class="block mb-2 font-semibold">
                    Finalidade
                </label>

                <select
                    name="finalidade"
                    class="w-full border rounded-lg p-3">

                    <option>Venda</option>
                    <option>Aluguel</option>

                </select>

            </div>

            <div>

                <label class="block mb-2 font-semibold">
                    Faz parte de um Condomínio?
                </label>

                <select
                    name="condominio"
                    class="w-full border rounded-lg p-3">

                    <option value="0">Não</option>
                    <option value="1">Sim</option>

                </select>

                <div>

                    <label class="block mb-2 font-semibold">
                        Nome do condomínio
                    </label>

                    <input
                        type="text"
                        name="nome_condominio"
                        class="w-full border rounded-lg p-3"
                        placeholder="Ex.: Alphaville">

                </div>

            </div>

            <div>

                <label class="block mb-2 font-semibold">
                    Valor
                </label>

                <input
                type="text"
                name="valor"
                value="{{ number_format($imovel->valor, 2, ',', '.') }}"
                class="w-full border rounded-lg p-3"
                placeholder="Ex: 450000,00">

            </div>

            <div>

                <label class="block mb-2 font-semibold">
                    Cidade
                </label>

                <input
                type="text"
                name="cidade"
                value="{{ $imovel->cidade }}"
                class="w-full border rounded-lg p-3">

            </div>

            <div>

                <label class="block mb-2 font-semibold">
                    Bairro
                </label>

                <input
                type="text"
                name="bairro"
                value="{{ $imovel->bairro }}"
                class="w-full border rounded-lg p-3">

            </div>

            <div>

                <label class="block mb-2 font-semibold">
                    Quartos
                </label>

                <input
                type="number"
                name="quartos"
                value="{{ $imovel->quartos }}"
                class="w-full border rounded-lg p-3">

            </div>

            <div>

                <label class="block mb-2 font-semibold">
                    Banheiros
                </label>

                <input
                type="number"
                name="banheiros"
                value="{{ $imovel->banheiros }}"
                class="w-full border rounded-lg p-3">

            </div>

        </div>

        <div class="mt-6">

            <label class="block mb-2 font-semibold">

                Descrição

            </label>

            <textarea
            name="descricao"
            rows="6"
            class="w-full border rounded-lg p-3">{{ $imovel->descricao }}</textarea>

        </div>

        <div class="mt-6">

            <label class="block mb-2 font-semibold">

                Fotos

            </label>

            <input
                type="file"
                name="fotos[]"
                multiple
                class="w-full">

        </div>

        <div class="mt-8">

            <button
                class="bg-green-600 hover:bg-green-700 text-white px-8 py-3 rounded-lg">

                Salvar Imóvel

            </button>

        </div>

    </form>

</div>

@endsection
