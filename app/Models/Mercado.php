<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mercado extends Model
{

     public function compras(){

        return $this->belongsTo(Compras::class);

    }


     public function preco(){

        return $this->hasMany(Preco::class);

    }


}
