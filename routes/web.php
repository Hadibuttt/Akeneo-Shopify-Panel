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

Route::get('/home', function () {
    return view('index');
});

Route::get('/product', function () {
    return view('product');
});

Route::get('/add-product', [App\Http\Controllers\AddProductController::class, 'index']);

Route::get('/customer', function () {
    return view('customer');
});

Route::get('/order', function () {
    return view('order');
});

Route::prefix('admin')->name('admin.')->middleware('can:manage-users')->group(function()
{
    Route::resource('/users', 'App\Http\Controllers\Admin\UsersController', ['except' => ['create','show','store']]);
});