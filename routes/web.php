<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/product-category/{category}', [HomeController::class, 'product_category'])->name('product-category');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Auth::routes(['login' => true, 'register' => false, 'reset' => false]);

// Route::get('/home', [HomeController::class, 'index'])->name('home');



Route::group(['middleware' => 'admin'], function () {
    Route::get('/config_page', [HomeController::class, 'config_page'])->name('config_page');
    Route::post('/store_config_page', [HomeController::class, 'store_config_page'])->name('store_config_page');

    Route::resource('product', ProductController::class);
    Route::post('/product/list', [ProductController::class, 'list'])->name('product.list');
});
