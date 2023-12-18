<?php

use App\Http\Controllers\ListProdukController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TeamController;
use Illuminate\Support\Facades\Route;

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
    return view('index');
});

Route::get('/product', [ProductController::class, 'showProduct']);

Route::get('/about', [TeamController::class, 'showTeam']);

Route::get('/order_history', [ProductController::class, 'showProductOrdered']);


//PRODUCT
// Route::post('/product_add', function () {
//     return view('product_add');
// });
Route::post('/product_add', [ProductController::class, 'store'])->name('product.store');
Route::get('/product/{product}', [ProductController::class, 'show_product']);
Route::patch('/products/{id}', [ProductController::class, 'edit'])->name('product.edit');
Route::delete('/products/{id}', [ProductController::class, 'delete'])->name('product.delete');
Route::get('/product_list', [ListProdukController::class, 'show_list_product'])->name('product.list');
// Route::get('/product_add', [ProductController::class, 'store'])->name('product.store');

Route::get('/detail_pesanan/{detail_pesanan}',[ProductController::class,'show_detail_pesanan']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

