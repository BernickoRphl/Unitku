<?php

use App\Http\Controllers\DetailPesananController;
use App\Http\Controllers\ListProdukController;
use App\Http\Controllers\PesananController;
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
Route::delete('/products/delete/{id}', [ProductController::class, 'delete'])->name('product.delete');
// Route::get('/product_add', [ProductController::class, 'store'])->name('product.store');


//PESANAN
Route::delete('detail_pesanans/{detailPesanan}', [DetailPesananController::class, 'delete'])->name('detail_pesanans.delete');

Route::delete('/pesanan/delete/{id}', [PesananController::class, 'delete'])->name('pesanan.delete');
Route::patch('/pesanan/edit/{product}', [PesananController::class, 'edit'])->name('pesanan.edit');
Route::put('/pesanan/update/{product}', [PesananController::class, 'update'])->name('pesanan.update');
Route::get('/pesanan_add', [PesananController::class, 'add_form'])->name('pesanan.form');
Route::post('/pesanan_add', [PesananController::class, 'create'])->name('pesanan.add');
Route::get('/pesanan_index', [PesananController::class, 'listPesananUser'])->name('pesanan.index');
Route::get('/pesanan_list', [PesananController::class, 'listPesananUser'])->name('pesanan.list');
// Route::get('/list_pesanan_user', [PesananController::class, 'listPesananUser'])->name('pesanan.user');

Auth::routes();
