<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\cartcontroller;

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

//Route::get('cart/create','cartcontroller@create')->name('cart.create');
   // Route::get('cart/create','cartcontroller@create');
    //Route::post('cart/create','cartcontroller@store')->name('cart.store');
  
    Route::get('/cart/view',[App\Http\Controllers\cartcontroller::class,'index'])->name('cart.index');

    Route::get('/cart/create', [App\Http\Controllers\cartcontroller::class,'create'] )->name('cart.create');
    Route::post('/cart/create', [App\Http\Controllers\cartcontroller::class,'store'] )->name('cart.store');

    Route::get('/cart/edit/{id}', [App\Http\Controllers\cartcontroller::class,'edit'] )->name('cart.edit');
    Route::post('/cart/edit/{id}',[App\Http\Controllers\cartcontroller::class,'update'] )->name('cart.update ');


    //sorting view //

    Route::get('/sort/sorting', [App\Http\Controllers\sortcontroller::class,'sorting'] )->name('sort.sorting');

