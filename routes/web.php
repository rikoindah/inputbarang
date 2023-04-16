<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;
use Illuminate\Support\Facades\Redirect;

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
    return view('inputproduk');
});

Route::get('/product/create', [BarangController::class, 'create_product'])->name('create_product');
Route::post('/product/create', [BarangController::class, 'store_product'])->name('store_product');
