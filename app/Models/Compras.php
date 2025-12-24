<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\DB;

class Compras extends Model
{
    protected $fillable = [
        'nome',
        'marca',
        'preco',
        'quantidade',
        'unidade',
        'mercado_id',
        'cidade_id'
    ];


    public static function conversorQuantidade(float $quantidade, string $unidade): float
    {
        return match ($unidade) {
            'g', 'ml' => $quantidade / 1000,
            default => $quantidade,
        };
    }



    /**
     * Soma total de todas as compras (preço × quantidade)
     */
    public static function totalCompras(): float
    {
        return self::all()->sum(function ($compra) {
            return $compra->total; // usa o accessor já convertido
        });
    }

    /**
     * Total de UM produto (preço × quantidade)
     * Accessor → $compra->total
     */
    public function getTotalAttribute(): float
    {
        $quantidade = self::conversorQuantidade(
            $this->quantidade ?? 0,
            $this->unidade
        );
        return  ( ((float)$this->preco ?? 0) * ((float)$quantidade));
    }


    protected static function booted()
    {
        self::addGlobalScope('ordered', function (Builder $queryBuilder) {
            $queryBuilder->orderBy('nome', 'desc');
        });
    }
}
