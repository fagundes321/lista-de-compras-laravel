<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Compras;

class HomeController extends Controller
{

     public function index(){

        $totalItens = Compras::count();

        return view('home.index_home')
        ->with('totalItens' , $totalItens);
    }

}
