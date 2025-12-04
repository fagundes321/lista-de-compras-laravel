<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use App\Models\Compras;

class ComprasController extends Controller
{

    public function index(Request $request)
    {

        $compras = Compras::all();
        $mensagemSucesso = session('mensagem.sucesso');

        return view('compras.index')
        ->with('compras', $compras)
        ->with('mensagemSucesso', $mensagemSucesso);

    }


    public function create()
    {

        return view("compras.create");

    }


    public function store(Request $request)
    {

        $compra = Compras::create($request->all());
        $request->session()->flash('mensagem.sucesso', "O item {$compra->nome} foi adicionado");
        return Redirect('/compras');

    }


    public function destroy(Compras $compra, Request $request)
    {

        $compra->delete();
        $request->session()->flash('mensagem.sucesso', "O item {$compra->nome} foi removido");
        return redirect('/compras');

    }
}
