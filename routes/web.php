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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/detail_pesanan/{detail_pesanan}', [ProductController::class, 'show_detail_pesanan']);

//SHOW
Route::get('/product', [ProductController::class, 'showProduct']);
Route::get('/about', [TeamController::class, 'showTeam']);
Route::get('/order_history', [ProductController::class, 'showProductOrdered']);


//PRODUCT
Route::get('/product/{product}', [ProductController::class, 'show_product']);
Route::get('/product_add', [ProductController::class, 'add_form'])->name('product.form');
Route::post('/product_add', [ProductController::class, 'create'])->name('product.add');
Route::get('/product_list', [ListProdukController::class, 'show_list_product'])->name('product.list');
Route::patch('/products/edit/{product}', [ProductController::class, 'edit'])->name('product.edit');
Route::put('/products/update/{product}', [ProductController::class, 'update'])->name('product.update');
Route::delete('/products/{id}', [ProductController::class, 'delete'])->name('product.delete');
// Route::get('/product_add', [ProductController::class, 'store'])->name('product.store');

Auth::routes();
