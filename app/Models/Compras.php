<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class Compras extends Model
{
    protected $fillable = ['nome', 'preco', 'mercado_id'];
    // protected $with = ['mercado'];

    public function mercados()
    {

        // return $this->hasMany(Mercados::class, "mercado_id");
    }



    protected static function booted()
    {
        self::addGlobalScope('ordered', function (Builder $queryBuilder) {
            $queryBuilder->orderBy('nome', 'desc');
        });
    }
}
