<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\queries;



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
    return view('welcome');
});

Route::get('/admin', function (){
    return view('adminpanel');
});

Route::get('/home',[queries::class,'home']);

Route::get('/cart',[queries::class,'cart']);

Route::get('/favourite',[queries::class,'favourite']);


Route::get('/games-page/{id}',[queries::class,'singleProducts']);

Route::get('/more',[queries::class,'more']);

Route::post('/add-product', [queries::class, 'store']);


Route::post('/add-to-cart', [queries::class, 'addTocart']);


Route::post('/add-to-favourite', [queries::class, 'addTofvrt']);

Route::delete('/delete/{id}', [queries::class, 'removeItem'])->name('cart.remove');

Route::delete('/del/{id}', [queries::class, 'removefvrt'])->name('fvrt.remove');


Route::get('/games', [queries::class, 'search']);


Route::get('/get-fvrt-count', [queries::class, 'FvrtCount']);

Route::get('/get-cart-count', [queries::class, 'CartCount']);


Route::get('/get-total-price', [queries::class, 'PriceCount']);





