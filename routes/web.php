<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Client\HomeController;
use App\Http\Controllers\Client\AboutController;
use App\Http\Controllers\Client\BlogController;
use App\Http\Controllers\Client\CartController;
use App\Http\Controllers\Client\ContactController;
use App\Http\Controllers\Client\OrderController;
use App\Http\Controllers\Client\ProductController;
use App\Http\Controllers\Client\ShopController;
use App\Http\Controllers\Client\UserController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;
use App\Models\Category;

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

Route::get('/test', function () {
    return view('welcome');
});


Route::get('/', [HomeController::class, 'index']);
Route::get('/about', [AboutController::class, 'index']);
Route::get('/productDetail', [ProductController::class, 'detail']);
Route::get('/shop', [ShopController::class, 'index']);
Route::get('/login', [UserController::class, 'login']);
Route::get('/register', [UserController::class, 'register']);
Route::get('/contact', [ContactController::class, 'index']);
Route::get('/blog', [BlogController::class, 'index']);
Route::get('/blogDetail', [BlogController::class, 'detail']);
Route::get('/cart' , [CartController::class, 'index']);
Route::get('/order', [OrderController::class, 'track']);
Route::get('/admin', [AdminController::class, 'index']);
Route::get('/admin/product/category', [CategoryController::class, 'index'])->name('admin.category');
Route::get('/admin/product/category/create', [CategoryController::class, 'create']);
Route::post('/admin/product/category/create', [CategoryController::class, 'store']);
Route::delete('/admin/product/category/delete/{id}', [CategoryController::class, 'destroy']);
Route::get('/admin/product/category/edit/{id}', [CategoryController::class, 'edit'])->name('category.edit');



