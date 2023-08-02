<?php

use App\Models\Category;
use App\Models\AdminDashboard;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\PagesController;

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

Route::get('phpinfo', function () {
    return phpinfo();
});

Route::get('clear_cache', function () {
    Artisan::call('optimize:clear');
    Artisan::call('cache:clear');
    Artisan::call('route:clear');
    return 'cache cleared';
})->name('clear_cache');

Route::get('migrate', function () {
    Artisan::call('migrate');
    return 'migration is done';
})->name('migrate');

Route::get('fresh_start', function () {
    Artisan::call('migrate:fresh');
    Artisan::call('db:seed');
    return 'fresh start is done';
})->name('fresh_start');

Route::get('migrate_fresh', function () {
    Artisan::call('migrate:fresh');
    return 'fresh migration is done';

    // return 'fresh migration and passport is done';
})->name('migrate_fresh');

Route::get('/', [PagesController::class, 'index'])->name('home');

Auth::routes(['register' => false]);



Route::group(['middleware' => ['auth']], function () {
    
    Route::prefix('admin')->group(function () {

        Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');
        //category route
        Route::get('/category', [CategoryController::class, 'index'])->name('admin.category.index');
        Route::get('/category/create', [CategoryController::class, 'create'])->name('admin.category.create');
        Route::post('/category/store', [CategoryController::class, 'store'])->name('admin.category.store');
        Route::get('/category/edit/{id}', [CategoryController::class, 'edit'])->name('admin.category.edit');
        Route::put('/category/update/{id}', [CategoryController::class, 'update'])->name('admin.category.update');
        Route::get('/category/delete/{id}', [CategoryController::class, 'destroy'])->name('admin.category.destroy');
        // product route
        Route::get('/product', [ProductController::class, 'index'])->name('admin.product.index');
        Route::get('/product/create', [ProductController::class, 'create'])->name('admin.product.create');
        Route::match(['get', 'post'], '/product/store', [ProductController::class, 'store'])->name('admin.product.store');
        Route::get('/product/edit/{id}', [ProductController::class, 'edit'])->name('admin.product.edit');
        Route::put('/product/update/{id}', [ProductController::class, 'update'])->name('admin.product.update');
        Route::get('/product/delete/{id}', [ProductController::class, 'destroy'])->name('admin.product.destroy');
    });
});
