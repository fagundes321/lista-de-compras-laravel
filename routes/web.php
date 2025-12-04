<?php

use App\Http\Controllers\ComprasController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/compras');
});


Route::resource('/compras', ComprasController::class)->except(['show']);

// Route::get('/compras/editar/{compra}', [ComprasController::class, 'edit'])->name('compras.edit');
// Route::get('/compras/update/{compra}', [ComprasController::class,  'update'])->name('compras.update');

