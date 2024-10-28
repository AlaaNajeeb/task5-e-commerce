<?php

use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserController;

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
    return view('welcome');
});

Route::resource('users',UserController::class);
Route::resource('categories',CategoryController::class);
Route::resource('products',ProductController::class);
Route::get('/products-trashed', [ProductController::class,'trashed'])->name('products.trashed');
Route::post('products/restore/{id}', [ProductController::class, 'restore'])->name('products.restore');
Route::DELETE('products/force/delete/{id}', [ProductController::class, 'forceDelete'])->name('products.force.delete');


Route::get('orders', [OrderController::class,'index'])->name('orders.list');
Route::get('orders/{id}', [OrderController::class,'show'])->name('orders.show');
Route::DELETE('orders/{id}', [OrderController::class,'destroy'])->name('orders.destroy');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
