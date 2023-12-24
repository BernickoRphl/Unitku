<?php

use App\Http\Controllers\DetailPesananController;
use App\Http\Controllers\ListProdukController;
use App\Http\Controllers\PesananController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\TeamController;
use Illuminate\Support\Facades\Auth;
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

//SHOW
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/about', [TeamController::class, 'showTeam'])->name('about');

Route::get('/list_admin', [RoleController::class, 'listUsersWithRole'])->name('admin.list');
Route::get('/list_admin', [RoleController::class, 'listUsersWithRole'])->name('admin.edit');
Route::get('/list_admin', [RoleController::class, 'listUsersWithRole'])->name('admin.delete');



//PESANAN
Route::delete('/pesanan/delete/{pesanan}', [PesananController::class, 'delete'])->name('pesanan.destroy');
Route::patch('/pesanan/edit/{pesanan}', [PesananController::class, 'edit'])->name('pesanan.edit');
Route::get('/pesanan/order_history', [ProductController::class, 'showProductOrdered'])->name('pesanan.history');
Route::get('/pesanan/pesanan_add', [PesananController::class, 'add_form'])->name('pesanan.form');
Route::post('/pesanan/pesanan_create', [PesananController::class, 'create'])->name('pesanan.add');
Route::delete('/pesanan/pesanan_detail/{detailPesanan}', [DetailPesananController::class, 'delete'])->name('detail_pesanans.delete');
Route::get('/pesanan/pesanan_index', [PesananController::class, 'listPesananUser'])->name('pesanan.index');
Route::get('/pesanan/pesanan_list', [PesananController::class, 'show_all_pesanan'])->name('pesanan.list');
Route::put('/pesanan/update/{pesanan}', [PesananController::class, 'update'])->name('pesanan.update');
// Route::get('/list_pesanan_user', [PesananController::class, 'listPesananUser'])->name('pesanan.user');


//PRODUCT
Route::get('/product', [ProductController::class, 'showProduct'])->name('product.show');
Route::delete('/product/destroy/{product}', [ProductController::class, 'destroy'])->name('product.destroy');
Route::patch('/product/edit/{product}', [ProductController::class, 'edit'])->name('product.edit');
Route::post('/product/product_create', [ProductController::class, 'create'])->name('product.add');
Route::get('/product/product_list', [ListProdukController::class, 'show_list_product'])->name('product.list');
Route::put('/product/update/{product}', [ProductController::class, 'update'])->name('product.update');
Route::get('/product/{product}', [ProductController::class, 'show_product']);
Route::get('/product_add', [ProductController::class, 'add_form'])->name('product.form');
// Route::get('/product_add', [ProductController::class, 'store'])->name('product.store');

Auth::routes();
