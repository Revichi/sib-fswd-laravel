<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\SliderController;

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



Route::get('/edit', [UserController::class,'edit']);
Route::get('/tambah', [UserController::class,'tambah']);
Route::get('/dashboard', [DashboardController::class,'indexs'])->name('dashboard.index');

Route::get('/produk', [ProdukController::class,'index'])->name('produk.index');
Route::post('/produk', [ProdukController::class,'store'])->name('produk.store');
Route::get('/produk/add', [ProdukController::class,'create'])->name('produk.create');
Route::get('/produk/edit/{id}', [ProdukController::class,'edit'])->name('produk.edit');
Route::put('/produk/update/{id}', [ProdukController::class,'update'])->name('produk.update');
Route::get('/produk/destroy/{id}', [ProdukController::class,'destroy'])->name('produk.delete');


Route::get('/category', [CategoryController::class,'index'])->name('category.index');
Route::get('/category/add', [CategoryController::class,'create'])->name('category.create');
Route::post('/category', [CategoryController::class,'store'])->name('category.store');
Route::get('/category/edit/{id}', [CategoryController::class,'edit'])->name('category.edit');
Route::put('/category/update/{id}', [CategoryController::class,'update'])->name('category.update');
Route::get('/category/destroy/{id}', [CategoryController::class,'destroy'])->name('category.delete');


Route::get('/role', [RoleController::class,'index'])->name('role.index');
Route::get('/role/add', [RoleController::class,'create'])->name('role.create');
Route::post('/role', [RoleController::class,'store'])->name('role.store');
Route::get('/role/edit/{id}', [RoleController::class,'edit'])->name('role.edit');
Route::put('/role/update/{id}', [RoleController::class,'update'])->name('role.update');
Route::get('/role/destroy/{id}', [RoleController::class,'destroy'])->name('role.delete');

Route::get('/user', [UserController::class,'index'])->name('user.index');
Route::get('/user/add', [UserController::class,'create'])->name('user.create');
Route::post('/user', [UserController::class,'store'])->name('user.store');
Route::get('/user/edit/{id}', [UserController::class,'edit'])->name('user.edit');
Route::put('/user/update/{id}', [UserController::class,'update'])->name('user.update');
Route::get('/user/destroy/{id}', [UserController::class,'destroy'])->name('user.delete');

Route::get('/slider', [SliderController::class,'index'])->name('slider.index');
Route::get('/slider/add', [SliderController::class,'create'])->name('slider.create');
Route::post('/slider', [SliderController::class,'store'])->name('slider.store');
Route::get('/slider/edit/{id}', [SliderController::class,'edit'])->name('slider.edit');
Route::put('/slider/update/{id}', [SliderController::class,'update'])->name('slider.update');
Route::get('/slider/destroy/{id}', [SliderController::class,'destroy'])->name('slider.delete');