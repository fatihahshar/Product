<?php

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
    return redirect('/products');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//index schedule
Route::get('/products',[App\Http\Controllers\ProductController::class, 'index'])->name('products.index');

//create schedule
Route::get('/products/create',[App\Http\Controllers\ProductController::class, 'create'])->name('products.create');

//store schedule
Route::post('products/create',[App\Http\Controllers\ProductController::class, 'store'])->name('products.store');

//show schedule
Route::get('/products/{product}',[App\Http\Controllers\ProductController::class, 'show'])->name('products.show');

//edit schedule
Route::get('/products/{product}/edit',[App\Http\Controllers\ProductController::class, 'edit'])->name('products.edit');

//update schedule
Route::post('/products/{product}/edit',[App\Http\Controllers\ProductController::class, 'update'])->name('products.update');

//destroy/delete schedule
Route::get('/products/{product}/delete',[App\Http\Controllers\ProductController::class, 'destroy'])->name('products.delete');