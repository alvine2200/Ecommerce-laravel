<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductsController;


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

Route::get('/login', function () {
    return view('login');
}); 

Route::get('/logout', function () {
    Session::forget('user');
    return redirect('login');
}); 


Route::post('/login',[UserController::class,'login'])->name('login');
Route::get('/',[ProductsController::class,'index'])->name('index');
Route::get('/details/{id}',[ProductsController::class,'details'])->name('details');
Route::get('/search',[ProductsController::class,'search'])->name('search');
Route::post('/add to cart',[ProductsController::class,'addToCart'])->name('addToCart');
Route::get('/cartlist',[ProductsController::class,'cartlist'])->name('cartlist');
Route::get('/removeCart/{id}',[ProductsController::class,'removeCart'])->name('removeCart');
Route::get('/ordernow',[ProductsController::class,'ordernow'])->name('ordernow');
Route::post('/orderplacement',[ProductsController::class,'orderplacement'])->name('orderplacement');
Route::get('/myorders',[ProductsController::class,'myorders'])->name('myorders');





