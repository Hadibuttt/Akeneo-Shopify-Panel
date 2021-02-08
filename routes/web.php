<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MollieController;


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

Route::get('/', [App\Http\Controllers\IndexController::class, 'index']);

Route::get('/home', [App\Http\Controllers\IndexController::class, 'index']);

Route::get('/product', [App\Http\Controllers\ProductController::class, 'index']);

Route::get('/category', [App\Http\Controllers\CategoryController::class, 'index']);

Route::get('/orderdetails/{id}', [App\Http\Controllers\OrderDetailsController::class, 'index']);

Route::get('/add-product', [App\Http\Controllers\AddProductController::class, 'index']);

Route::get('/update-product/{id}/edit', [App\Http\Controllers\AddProductController::class, 'update']);

Route::get('/update-page/{id}/edit', [App\Http\Controllers\AddPageController::class, 'update']);

Route::get('/update-category/{cat_id}/edit', [App\Http\Controllers\CategoryController::class, 'update']);

Route::get('/update-subcategory/{subcat_id}/edit', [App\Http\Controllers\SubCategoryController::class, 'update']);

Route::get('/update-collection/{cat_item_id}/edit', [App\Http\Controllers\CollectionController::class, 'update']);

Route::get('/update-staffarea/{id}/edit', [App\Http\Controllers\StaffController::class, 'update']);

Route::get('/create-category', [App\Http\Controllers\CategoryController::class, 'create']);

Route::get('/create-subcategory', [App\Http\Controllers\SubCategoryController::class, 'create']);

Route::get('/create-collection', [App\Http\Controllers\CollectionController::class, 'create']);

Route::get('/staffaccounts', [App\Http\Controllers\StaffController::class, 'index']);

Route::get('/addPage', [App\Http\Controllers\AddPageController::class, 'index']);

Route::get('/staffarea', [App\Http\Controllers\StaffController::class, 'create']);

Route::get('/subcategory', [App\Http\Controllers\SubCategoryController::class, 'index']);

Route::get('/collection', [App\Http\Controllers\CollectionController::class, 'index']);

Route::post('submitted', [App\Http\Controllers\SubCategoryController::class, 'save'] )->name('addsubcat');

Route::post('successs', [App\Http\Controllers\CollectionController::class, 'save'] )->name('addcollection');

Route::post('/update-product/{id}/updated', [App\Http\Controllers\AddProductController::class, 'updated'] );

Route::post('/update-page/{id}/updated', [App\Http\Controllers\AddPageController::class, 'updated'] );

Route::post('/orderdetails/{id}/note/updated', [App\Http\Controllers\OrderDetailsController::class, 'NoteUpdated'] );

Route::post('/orderdetails/{id}/email/updated', [App\Http\Controllers\OrderDetailsController::class, 'EmailUpdated'] );

Route::post('/orderdetails/{id}/updated', [App\Http\Controllers\OrderDetailsController::class, 'InformationUpdated'] );

Route::post('/orderdetails/{id}/comment/added', [App\Http\Controllers\OrderDetailsController::class, 'CommentAdded'] );

Route::post('/about-customer/{id}/updated', [App\Http\Controllers\CustomerController::class, 'CustomerUpdated'] );

Route::post('/about-customer/{id}/address/updated', [App\Http\Controllers\CustomerController::class, 'AddressUpdated']);

Route::post('about-customer/{id}/comment/added', [App\Http\Controllers\CustomerController::class, 'CommentAdded']);

Route::post('/update-category/{cat_id}/updated', [App\Http\Controllers\CategoryController::class, 'updated'] );

Route::post('/update-subcategory/{subcat_id}/updated', [App\Http\Controllers\SubCategoryController::class, 'updated'] );

Route::post('/update-collection/{cat_item_id}/updated', [App\Http\Controllers\CollectionController::class, 'updated'] );

Route::post('/update-staffarea/{id}/updated', [App\Http\Controllers\StaffController::class, 'updated'] );

Route::post('submit', [App\Http\Controllers\AddProductController::class, 'save'] );

Route::post('/addedPage', [App\Http\Controllers\AddPageController::class, 'save'] );

Route::post('succesed', [App\Http\Controllers\TaxController::class, 'save'] );

Route::post('successed', [App\Http\Controllers\StaffController::class, 'save'] );

Route::post('success', [App\Http\Controllers\CategoryController::class, 'save'] );

Route::post('inserted', [App\Http\Controllers\GeneralController::class, 'save'] );

Route::get('get_cat', [App\Http\Controllers\SelectionController::class, 'getcategory'] )->name('getcategory');

Route::get('getorder', [App\Http\Controllers\SelectionController::class, 'getorder'] )->name('getorder');

Route::post('get_subcat', [App\Http\Controllers\SelectionController::class, 'getsubcategory'] )->name('getsubcategory');

Route::get('getsucategory', [App\Http\Controllers\SelectionController::class, 'getsucategory'] )->name('getsucategory');

Route::get('get_subcat', [App\Http\Controllers\SelectionController::class, 'getcoll'] )->name('getcoll');

Route::post('get_coll', [App\Http\Controllers\SelectionController::class, 'getcollection'] )->name('getcollection');

Route::get('get_pro', [App\Http\Controllers\SelectionController::class, 'getproduct'] )->name('livesearchh');

Route::get('/restricted', function () {
    return view('restricted');
});

Route::get('/pages', [App\Http\Controllers\AddPageController::class, 'pages']);

Route::get('/custom-pages/{id}/show', [App\Http\Controllers\AddPageController::class, 'CustomPages']);

Route::get('/menu', function () {
    return view('menu');
});

Route::get('/settings', function () {
    if(Auth::user()->SettingsPage == 1)
    return view('settings');
    else    
            return view('restricted');
});

Route::get('/customer', [App\Http\Controllers\CustomerController::class, 'index']);

Route::get('/general', [App\Http\Controllers\GeneralController::class, 'index']);

Route::get('/tax', [App\Http\Controllers\TaxController::class, 'index']);

Route::get('/about-customer/{id}', [App\Http\Controllers\CustomerController::class, 'about']);

Route::get('/order', [App\Http\Controllers\OrderController::class, 'index']);

Route::get('/mollie-paymnet',[MollieController::Class,'preparePayment'])->name('mollie.payment');
Route::get('/payment-success',[MollieController::Class, 'paymentSuccess'])->name('payment.success');

Route::prefix('admin')->name('admin.')->middleware('can:manage-users')->group(function()
{
    Route::resource('/users', 'App\Http\Controllers\Admin\UsersController', ['except' => ['create','show','store']]);
});