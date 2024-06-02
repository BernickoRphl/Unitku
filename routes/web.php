<?php

use App\Http\Controllers\ListUnitController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UnitController;
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

Route::post('/admin/create', [RoleController::class, 'createAdmin'])->name('admin.create');
Route::delete('/admin/delete', [RoleController::class, 'listAdmin'])->name('admin.delete');
Route::patch('/admin/edit', [RoleController::class, 'listAdmin'])->name('admin.edit');
Route::get('/admin/list', [RoleController::class, 'listAdmin'])->name('admin.list');

//REVIEW

//PESANAN
Route::get('/pesanan/order_history', [UnitController::class, 'showUnitOrdered'])->name('pesanan.history');

//UNIT
Route::get('/unit', [UnitController::class, 'showUnit'])->name('unit.show');
Route::delete('/unit/destroy/{unit}', [UnitController::class, 'destroy'])->name('unit.destroy');
Route::patch('/unit/edit/{unit}', [UnitController::class, 'edit'])->name('unit.edit');
Route::post('/unit/unit_create', [UnitController::class, 'create'])->name('unit.add');
Route::get('/unit/unit_list', [ListUnitController::class, 'show_list_unit'])->name('unit.list');
Route::put('/unit/update/{unit}', [UnitController::class, 'update'])->name('unit.update');
Route::get('/unit/{unit}', [UnitController::class, 'show_unit']);
Route::get('/unit_add', [UnitController::class, 'add_form'])->name('unit.form');

Auth::routes();
