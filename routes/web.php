<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;
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
    return view('welcome');
});




Route::get('master', function () {
    return view('layouts.master');
});

// Category
Route::get('category/form', [AdminController::class, 'form'])->name('category.form');
Route::post('store', [AdminController::class, 'store'])->name('store');
Route::get('category/table', [AdminController::class, 'table'])->name('category.table');
Route::get('edit/{id}', [AdminController::class, 'edit'])->name('edit');
Route::post('update/{id}', [AdminController::class, 'update'])->name('update');
Route::get('delete/{id}', [AdminController::class, 'delete'])->name('delete');


//Product
Route::get('product/create', [ProductController::class, 'create'])->name('product.create');
Route::post('product/store', [ProductController::class, 'store'])->name('product.store');
Route::get('product/table', [ProductController::class, 'table'])->name('product.table');
Route::get('product/edit/{id}', [ProductController::class, 'edit'])->name('product.edit');
Route::post('product/update/{id}', [ProductController::class, 'update'])->name('product.update');
Route::get('product/delete/{id}', [ProductController::class, 'delete'])->name('product.delete');
