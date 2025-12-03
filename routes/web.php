<?php

use App\Http\Controllers\ComprasController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/compras', [ComprasController::class, 'index']);
Route::get('/compras/criar', [ComprasController::class, 'create']);
