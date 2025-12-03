<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComprasController extends Controller
{

    public function index(Request $request)
    {


        $compras = [
            'arroz',
            'feijão',
            'carne',
        ];

        return view('compras.index')->with('compras', $compras);
    }


     public function create(){

        return view("compras.create");

    }

}
