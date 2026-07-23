<div
    id="galeriaModal"
    class="fixed inset-0 bg-black/80 hidden z-50 flex items-center justify-center">

    <div class="relative w-11/12 max-w-5xl">

        <!-- Botão fechar -->
        <button
            onclick="fecharGaleria()"
            class="absolute -top-12 right-0 text-white text-4xl hover:text-gray-300">

            &times;

        </button>

        <!-- Foto -->
        <div class="flex items-center justify-between gap-4">

    <button
        onclick="fotoAnterior()"
        class="text-white text-5xl hover:text-gray-300">
        ‹
    </button>


    <img
        id="fotoPrincipal"
        src=""
        class="w-full max-h-[80vh] object-contain rounded-lg">


    <button
        onclick="proximaFoto()"
        class="text-white text-5xl hover:text-gray-300">
        ›
    </button>

</div>
    </div>

</div>