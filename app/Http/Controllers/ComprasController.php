<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\SeriesFormRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use App\Models\Compras;

class ComprasController extends Controller
{

    public function index(Request $request)
    {

        $compras = Compras::all();
        $mensagemSucesso = session('mensagem.sucesso');
        $mensagemErro = session('mensagem.erro');

        return view('compras.index')
            ->with('compras', $compras)
            ->with('mensagemSucesso', $mensagemSucesso);
    }


    public function create()
    {

        return view("compras.create");
    }


    public function store(SeriesFormRequest $request)
    {

            $compra = Compras::create($request->all());
            return to_route('compras.index')->with('mensagem.sucesso', "O item {$compra->nome} foi adicionado");

    }


    public function destroy(Compras $compra, Request $request)
    {

        $compra->delete();
        return to_route('compras.index')->with('mensagem.sucesso', "O item {$compra->nome} foi removido");
    }


    public function edit(Compras $compra, Request $request)
    {

        return view('compras.edit')->with('compra', $compra);
    }

    public function update(Compras $compra, SeriesFormRequest $request)
    {

        $compra->fill($request->all());
        $compra->save();

        return to_route('compras.index')->with('mensagem.sucesso', "Item {$compra->nome} Atualizado");
    }
}
