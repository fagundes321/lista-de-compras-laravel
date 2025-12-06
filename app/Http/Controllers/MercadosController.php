<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ComprasFormRequest;
use App\Models\Mercados;

class MercadosController extends Controller{


     public function index(Request $request){
        $mercado = Mercados::all();
        $mensagemSucesso = session('mensagem.sucesso');

        return view('mercado.index')
        ->with('mercados', $mercado)
        ->with('mensagemSucesso', $mensagemSucesso);

    }


     public function create(){

        return view('mercado.create_mercado');

    }


     public function store(Request $request){

        //  dd($mercado);
        $mercado = Mercados::create($request->all());
        return to_route('mercado.index')->with('mensagem.sucesso', "O mercado {$mercado->nome_mercado} foi adicionado");

    }


     public function edit(Mercados $mercado, Request $request){
        // dd($mercado);
        return view('mercado.edit_mercado')->with('mercado', $mercado);

    }


     public function update(Mercados $mercado,  Request $request){

        $mercado->fill($request->all());
        $mercado->save();
        return to_route('mercado.index')->with('mensagemSucesso', "O mercado {$mercado->nome_mercado} foi atualizado");

    }


     public function destroy(Mercados $mercado, Request $request){

        $mercado->delete();
        return to_route('mercado.index')->with('mensagem.sucesso', "O mercado {$mercado->nome_mercado} foi excluido");

    }




}
