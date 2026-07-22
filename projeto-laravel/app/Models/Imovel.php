<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\ImovelFoto;

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

        public function fotos()
    {
        return $this->hasMany(ImovelFoto::class);
    }

}
