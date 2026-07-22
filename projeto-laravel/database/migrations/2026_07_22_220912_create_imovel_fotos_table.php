<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
            Schema::create('imovel_fotos', function (Blueprint $table) {

            $table->id();

            // Imóvel ao qual a foto pertence
            $table->foreignId('imovel_id')
                ->constrained('imovels')
                ->onDelete('cascade');

            // Nome ou caminho da foto
            $table->string('foto');

            // Define se é a foto principal
            $table->boolean('capa')->default(false);

            // Ordem de exibição
            $table->integer('ordem')->default(0);

            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('imovel_fotos');
    }
};
