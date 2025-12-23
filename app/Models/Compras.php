<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Compras extends Model
{
    protected $fillable = ['nome', 'marca', 'preco', 'qtd',  'mercado_id', 'cidade_id'];
    // protected $with = ['mercado'];

    // Metodo responsavel por me retornar o valor somado de todas as compras
     public static function somaTotal(){

        return self::sum('preco');

    }



    protected static function booted()
    {
        self::addGlobalScope('ordered', function (Builder $queryBuilder) {
            $queryBuilder->orderBy('nome', 'desc');
        });
    }
}
