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

Route::get('/update-product/{id}/edit', [App\Http\Controllers\AddProductController::class, 'update']);

Route::get('/update-category/{cat_id}/edit', [App\Http\Controllers\CategoryController::class, 'update']);

Route::get('/create-category', [App\Http\Controllers\CategoryController::class, 'create']);

Route::get('/create-subcategory', [App\Http\Controllers\SubCategoryController::class, 'create']);

Route::get('/create-collection', [App\Http\Controllers\CollectionController::class, 'create']);

Route::get('/subcategory', [App\Http\Controllers\SubCategoryController::class, 'index']);

Route::get('/collection', [App\Http\Controllers\CollectionController::class, 'index']);

Route::post('submitted', [App\Http\Controllers\SubCategoryController::class, 'save'] )->name('addsubcat');

Route::post('successs', [App\Http\Controllers\CollectionController::class, 'save'] )->name('addcollection');

Route::post('/update-product/{id}/updated', [App\Http\Controllers\AddProductController::class, 'updated'] );

Route::post('/update-category/{cat_id}/updated', [App\Http\Controllers\CategoryController::class, 'updated'] );

Route::post('submit', [App\Http\Controllers\AddProductController::class, 'save'] );

Route::post('success', [App\Http\Controllers\CategoryController::class, 'save'] );

Route::get('get_cat', [App\Http\Controllers\SelectionController::class, 'getcategory'] )->name('getcategory');

Route::post('get_subcat', [App\Http\Controllers\SelectionController::class, 'getsubcategory'] )->name('getsubcategory');

Route::get('get_subcat', [App\Http\Controllers\SelectionController::class, 'getsucategory'] )->name('getsucategory');

Route::get('get_subcat', [App\Http\Controllers\SelectionController::class, 'getcoll'] )->name('getcoll');

Route::post('get_coll', [App\Http\Controllers\SelectionController::class, 'getcollection'] )->name('getcollection');

Route::get('get_pro', [App\Http\Controllers\SelectionController::class, 'getproduct'] )->name('livesearchh');


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