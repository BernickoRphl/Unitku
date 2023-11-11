<?php

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
    return view('home');
});

Route::get('/product', function () {
    return view('product');
});

Route::get('/team', function () {
    return view('team');
});

// Route::get('/about', function () {
//     return view('about', [TeamController::class, 'showTeam']);
// });

Route::get('/about', [TeamController::class, 'showTeam']);

Route::get('/product_cart', function () {
    return view('product_cart');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/services', function () {
    return view('services');
});

// Route::get('/about',
//     [
//         TeamController::class, 'showTeam'
//     ]);
