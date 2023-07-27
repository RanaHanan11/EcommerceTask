<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Models\AdminDashboard;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Models\Category;

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


Route::get('/', [AdminController::class, 'create']);
Route::post('/login-request', [AdminController::class, 'loginrequest'])->name('login-request');


Route::get('/dashboard', [AdminController::class, 'adminlogin'])->name('dashboard');
//category route
Route::get('/admin/category', [CategoryController::class, 'index'])->name('admin.category.index');
// product route
Route::get('/admin/product', [ProductController::class, 'index'])->name('admin.product.index');
// product create view route
Route::get('/admin/product/create', [ProductController::class, 'create'])->name('admin.product.create');
//category store route
Route::get('/admin/category/create', [CategoryController::class, 'create'])->name('admin.category.create');
Route::post('/admin/category/store', [CategoryController::class,'store'])->name('admin.category.store');
Route::get('/admin/category/edit/{id}', [CategoryController::class, 'edit'])->name('admin.category.edit');
Route::put('/admin/category/update/{id}', [CategoryController::class, 'update'])->name('admin.category.update');
Route::get('/admin/category/delete/{id}', [CategoryController::class, 'destroy'])->name('admin.category.destroy');
