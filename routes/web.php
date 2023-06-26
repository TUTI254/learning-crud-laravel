<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductControler;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/product',[ProductControler::class,'index'])->name('product.index');
Route::get('/product/create',[ProductControler::class,'create'])->name('product.create');
Route::post('/product',[ProductControler::class,'store'])->name('product.store');
Route::get('/product/{product}/edit',[ProductControler::class,'edit'])->name('product.edit');
Route::put('/product/{product}/update',[ProductControler::class,'update'])->name('product.update');
Route::delete('/product/{product}/destroy',[ProductControler::class,'destroy'])->name('product.destroy');
