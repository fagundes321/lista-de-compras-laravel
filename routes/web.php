<?php

use App\Http\Controllers\ComprasController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/compras');
});


Route::resource('/compras', ComprasController::class)->only(['index', 'create', 'store', 'destroy']);
// Route::post('/compras/destroy/{compra}', [ComprasController::class, 'destroy'])->name('compras.destroy');


