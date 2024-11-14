<?php


use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Client\CartController;
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
    return view('client.index');
});



Route::resource('categories', CategoryController::class);


Route::get('/cart', [CartController::class, 'showCart'])->name('cart.show');

Route::put('/cart/{id}', [CartController::class, 'update']);
