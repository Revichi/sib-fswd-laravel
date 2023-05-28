<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\RoleController;

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

Route::get('/user', [UserController::class,'indexs'])->name('user.index');

Route::get('/edit', [UserController::class,'edit']);
Route::get('/tambah', [UserController::class,'tambah']);
Route::get('/dashboard', [DashboardController::class,'indexs'])->name('dashboard.index');

Route::get('/produk', [ProdukController::class,'index'])->name('produk.index');
Route::post('/produk', [ProdukController::class,'store'])->name('produk.store');
Route::get('/produk/add', [ProdukController::class,'create'])->name('produk.create');
Route::get('/produk/edit/{id}', [ProdukController::class,'edit'])->name('produk.edit');
Route::put('/produk/update/{id}', [ProdukController::class,'update'])->name('produk.update');
Route::get('/produk/delete/{id}', [ProdukController::class,'delete'])->name('produk.delete');


Route::get('/category', [CategoryController::class,'index'])->name('category.index');
Route::get('/category/add', [CategoryController::class,'create'])->name('category.create');
Route::post('/category', [CategoryController::class,'store'])->name('category.store');
Route::get('/category/edit/{id}', [CategoryController::class,'edit'])->name('category.edit');
Route::put('/category/update/{id}', [CategoryController::class,'update'])->name('category.update');
Route::get('/category/destroy/{id}', [CategoryController::class,'destroy'])->name('category.delete');
Route::get('/role', [RoleController::class,'index'])->name('role.index');