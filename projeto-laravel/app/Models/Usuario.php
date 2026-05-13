<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Attributes\Table;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

// #[Table(name:'usuarios', keyType: 'string', incrementing: 'false')]

class Usuario extends Model
{

   protected $fillable = ['nome', 'email' , 'senha', 'tipo'];
   protected $table = 'usuarios';
   protected $hidden = ['senha']; //mudança
   protected $keyType = 'string';
   public $incrementing = false;
   public $timestamps = true;


     protected function casts(): array
     {
         return [
            'senha' => 'hashed',
         ];
     }

     protected static function boot()
     {
        parent::boot();

        static::creating(function ($model){

             if (!$model->id ){
                $model->id = Str::uuid();
            }        
      });     
   }  
}
