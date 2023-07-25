<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminDashboardController;
use App\Models\AdminDashboard;

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
Route::get('/admin/category', 'App\Http\Controllers\Admin\CategoryController@index')->name('admin.category.index');
// product route
Route::get('/admin/product', 'App\Http\Controllers\Admin\ProductController@index')->name('admin.product.index');