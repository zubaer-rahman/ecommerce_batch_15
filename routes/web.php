<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EcommerceController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\ProductController;

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

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/', [EcommerceController::class, 'index'])->name('home');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', [adminController::class, 'index'])->name('dashboard');
    Route::get('/add-product', [ProductController::class, 'addProduct'])->name('add.product');
    Route::post('/new-product', [ProductController::class, 'saveProduct'])->name('new.product');
    Route::get('/manage-product', [ProductController::class, 'manageProduct'])->name('manage.product');
    Route::get('/status/{id}', [ProductController::class, 'changeStatus'])->name('status');
});
