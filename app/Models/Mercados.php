<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mercados extends Model
{

    protected $fillable = ['nome_mercado'];

     public function compras(){

        // return $this->belongsTo(Compras::class);

    }


    //  public function preco(){

    //     return $this->hasMany(Preco::class);

    // }


}
