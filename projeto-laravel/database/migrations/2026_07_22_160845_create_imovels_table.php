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
         Schema::create('imovels', function (Blueprint $table) {

        $table->id();

        // Informações principais
        $table->string('titulo');
        $table->string('slug')->unique();

        $table->enum('tipo', [
            'Casa',
            'Apartamento',
            'Terreno',
            'Sala Comercial',
            'Loja',
            'Galpão'
        ]);

        $table->enum('finalidade', [
            'Venda',
            'Aluguel'
        ]);

        $table->boolean('condominio')->default(false);
        $table->string('nome_condominio')->nullable();

        $table->decimal('valor',12,2);

        // Localização
        $table->string('cidade');
        $table->string('bairro');
        $table->string('endereco')->nullable();

        // Características
        $table->integer('quartos')->default(0);
        $table->integer('suites')->default(0);
        $table->integer('banheiros')->default(0);
        $table->integer('garagens')->default(0);

        $table->decimal('area_total',8,2)->nullable();
        $table->decimal('area_construida',8,2)->nullable();

        // Descrição
        $table->longText('descricao')->nullable();

        // Status
        $table->boolean('ativo')->default(true);

        $table->timestamps();

    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('imovels');
    }
};
