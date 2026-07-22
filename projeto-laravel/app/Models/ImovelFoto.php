<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ImovelFoto extends Model
{
     protected $fillable = [
        'imovel_id',
        'foto',
        'capa',
        'ordem'
    ];

    public function imovel()
    {
        return $this->belongsTo(Imovel::class);
    }
}
