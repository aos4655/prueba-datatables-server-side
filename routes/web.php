<?php

use App\Http\Controllers\UsuariosController;
use Illuminate\Support\Facades\Route;

/* Route::get('/', function () {
    return view('welcome');
}); */
Route::get('/userDTSS', [UsuariosController::class, 'index']);
Route::get('userDTSS/list', [UsuariosController::class, 'getUsers'])->name('user.list');

Route::get('/paginate', [UsuariosController::class, 'paginate']);