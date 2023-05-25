<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProdukController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('landing');
});

Route::get('/user', [UserController::class,'indexs']);

Route::get('/edit', [UserController::class,'edit']);
Route::get('/tambah', [UserController::class,'tambah']);
Route::get('/dashboard', [DashboardController::class,'indexs']);
Route::get('/produk', [ProdukController::class,'index'])->name('produk.index');