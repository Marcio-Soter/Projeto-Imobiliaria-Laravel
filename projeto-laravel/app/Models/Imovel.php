<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Imovel extends Model
{
    protected $fillable = [

        'titulo',
        'slug',
        'tipo',
        'finalidade',
        'condominio',
        'nome_condominio',
        'valor',
        'cidade',
        'bairro',
        'endereco',
        'quartos',
        'suites',
        'banheiros',
        'garagens',
        'area_total',
        'area_construida',
        'descricao',
        'ativo'

    ];

}
