<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Preco extends Model
{
    public $timestamps = true;

     public function mercado(){

        return $this->belongsTo(Mercado::class);

    }


}
