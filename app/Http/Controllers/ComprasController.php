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


        return view('compras.index')->with('compras', $compras);
    }


    public function create()
    {

        return view("compras.create");
    }


    public function store(Request $request)
    {

        // $nomeCompra = $request->input('nome');

        // if ($nomeCompra == '') {
        //     return Redirect('/compras/criar');
        // } else {
            Compras::create($request->all());
            return Redirect('/compras');
        // }
    }


    public function destroy(Request $request)
    {
        // dd($request->id);
        Compras::destroy($request->compra);

        return redirect('/compras');
    }
}
