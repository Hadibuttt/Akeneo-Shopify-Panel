<?php

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

Route::get('/forgot', function () {
    return view('auth.forgot');
});

Route::get('/reset', function () {
    return view('auth.reset');
});

Auth::routes();

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/home', [App\Http\Controllers\IndexController::class, 'index']);

Route::get('/product', [App\Http\Controllers\ProductController::class, 'index']);

Route::get('/category', [App\Http\Controllers\CategoryController::class, 'index']);

Route::get('/orderdetails', [App\Http\Controllers\OrderDetailsController::class, 'index']);

Route::get('/add-product', [App\Http\Controllers\AddProductController::class, 'index']);

Route::get('/create-category', [App\Http\Controllers\CategoryController::class, 'create']);

Route::get('/create-subcategory', [App\Http\Controllers\SubCategoryController::class, 'create']);

Route::get('/create-collection', [App\Http\Controllers\CollectionController::class, 'create']);

Route::get('/subcategory', [App\Http\Controllers\SubCategoryController::class, 'index']);

Route::get('/collection', [App\Http\Controllers\CollectionController::class, 'index']);

Route::post('submitted', [App\Http\Controllers\SubCategoryController::class, 'save'] );

Route::post('successs', [App\Http\Controllers\CollectionController::class, 'save'] );

Route::post('submit', [App\Http\Controllers\AddProductController::class, 'save'] );

Route::post('success', [App\Http\Controllers\CategoryController::class, 'save'] );

Route::get('/settings', function () {
    return view('settings');
});

Route::get('/customer', [App\Http\Controllers\CustomerController::class, 'index']);

Route::get('/about-customer', [App\Http\Controllers\CustomerController::class, 'about']);

Route::get('/order', [App\Http\Controllers\OrderController::class, 'index']);

Route::prefix('admin')->name('admin.')->middleware('can:manage-users')->group(function()
{
    Route::resource('/users', 'App\Http\Controllers\Admin\UsersController', ['except' => ['create','show','store']]);
});