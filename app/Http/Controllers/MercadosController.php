<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ComprasFormRequest;
use App\Models\Mercado;

class MercadosController extends Controller{


     public function index(Request $request){
        $mercados = Mercado::all();


        return view('mercado.index')->with('mercados', $mercados);

    }


     public function create(){

        return view('mercado.create_mercado');

    }




}
