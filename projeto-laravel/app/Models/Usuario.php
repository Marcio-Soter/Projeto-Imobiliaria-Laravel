<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Usuario extends Model
{

    protected $table = 'usuarios';

     protected $fillable = ['nome', 'email' , 'senha'];

     protected $keyType = 'string';
     public $incrementing = false;

     protected static function boot()
     {
        parent::boot();

        static::creating(function ($model){

             if (!$model->id ){
                $model->id = str::uuid();
            }        
      });     
   }  
}
