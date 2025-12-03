<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComprasController extends Controller
{

     public function listarCompras(){

        $compras = [
            'arroz',
            'feijão',
            'carne'
        ];

        $html = '<ul>';

        foreach($compras as $compra){
            $html .= "<li>$compra</li>";
        }

        $html .= '</ul>';

        echo $html;
    }

}
