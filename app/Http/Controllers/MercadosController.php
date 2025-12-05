<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ComprasFormRequest;
use App\Models\Mercados;

class MercadosController extends Controller{


     public function index(Request $request){
        $mercados = Mercados::all();
        $mensagemSucesso = session('mensagem.sucesso');

        return view('mercado.index')->with('mercados', $mercados);

    }


     public function create(){

        return view('mercado.create_mercado');

    }


     public function store(Request $request){

        $mercados = Mercados::create($request->all());
        // dd($mercados);
        return to_route('mercado.index')->with('mensagem.sucesso', "O mercado {$mercados->nome_mercado} foi adicionado");

    }


     public function edit(Mercados $mercados, Request $request){

        return view('mercado.edit')->with('mercados', $mercados);

    }






}
