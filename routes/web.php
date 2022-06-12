<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\AdminController;

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

//ADMIN ROUTES

//Route::prefix('/admin')->name('admin.')->namespace('Admin')->group(function(){
  //All the admin routes will be defined here...
//});

Route::get('admin', 'AdminController@admin');
Route::get('admin/login', 'AdminController@login')->name('login');
Route::get('admin/profile', 'AdminController@profile')->name('profile');
Route::get('admin/dashboard', 'AdminController@dashboard')->name('dashboard');
Route::get('admin/editprofile', 'AdminController@editprofile')->name('editprofile');
//site optins
Route::get('admin/orders', 'AdminController@orders')->name('orders');
Route::get('admin/add-brand', 'AdminController@addbrand')->name('addbrand');
Route::get('admin/add-product', 'AdminController@addproduct')->name('addproduct');
Route::get('admin/add-category', 'AdminController@addcategory')->name('addcategory');
Route::get('admin/manage-brand', 'AdminController@manbrand')->name('manbrand');
Route::get('admin/manage-product', 'AdminController@manpro')->name('manpro');
Route::get('admin/manage-category', 'AdminController@mancat')->name('mancat');
Route::get('admin/edit-product/{id}', 'AdminController@editpro');//->name('editpro');
Route::get('admin/edit-category/{id}', 'AdminController@editcat');//->name('editcat');

//POST Methods/Form submit (Add, Edit, Update,Delete(GET))
Route::post('admin/login', 'AdminController@adminLogin')->name('admin/login');
Route::post('admin/logout', 'AdminController@adminLogout')->name('admin/logout');


Route::post('admin/save-brand', 'AdminController@savebrand')->name('savebrand');
Route::post('admin/save-category', 'AdminController@savecat')->name('savecat');
Route::post('admin/save-product', 'AdminController@saveproduct')->name('saveproduct');
Route::post('admin/upcat/{id}', 'AdminController@upcat')->name('upcat');
Route::post('admin/uppro/{id}', 'AdminController@uppro')->name('uppro');
Route::get('admin/delbrand/{id}', 'AdminController@delbrand')->name('delbrand');
Route::get('admin/delcat/{id}', 'AdminController@delcat');//->name('delcat');
Route::get('admin/delpro/{id}', 'AdminController@delpro');//->name('delpro');
Route::get('admin/productStatus/{id}/{status}', 'AdminController@productStatus');////->name('changeStatus');
Route::get('admin/ship-order/{id}', 'AdminController@ship_order');
Route::get('admin/cancel-order/{id}', 'AdminController@cancel_order');













//-------------------------------------------------------------------------------------------------------


//MAIN ROUTES

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', 'PagesController@home');

Route::get('home', 'PagesController@home')->name('home');
Route::get('products', 'PagesController@products')->name('products');
Route::get('brands', 'PagesController@brands')->name('brands');
Route::get('cart', 'PagesController@cart')->name('cart');
Route::get('savelist', 'PagesController@savelist')->name('savelist');
Route::get('contact', 'PagesController@contact')->name('contact');
Route::get('details/{id}', 'PagesController@details');
Route::get('test', 'PagesController@test')->name('test');

Route::post('add-cart/{id}', 'PagesController@add_to_cart')->name('add-cart');
Route::post('add-list/{id}', 'PagesController@add_to_list')->name('add-list');
Route::get('payments/{amount}/{products}/{quantity}/{iq}', 'PagesController@payments');
Route::get('onpayments/{amount}/{products}/{quantity}/{iq}', 'PagesController@onpayments');
Route::get('offpayments/{amount}/{products}/{quantity}/{iq}', 'PagesController@offpayments');
Route::post('orders/{amount}/{quantity}', 'PagesController@orders');

Route::get('profile/{id}', 'PagesController@profile');



//Delete Update
Route::get('delete_list/{id}', 'PagesController@delete_list');
Route::get('delete_cart/{id}', 'PagesController@delete_cart');
Route::post('up_quantity/{id}', 'PagesController@up_quantity');

Route::post('profile/edit/{id}', 'PagesController@updateProfile');



Route::get('loggedOut', function () {return view('welcome'); });
Route::get('/dashboards', function () { return view('dashboard'); })->middleware(['auth'])->name('dashboard');

//Test

Route::get('bio/{name}/{age}/{country}', 'testController@bio')->name('bio');
Route:: group(['prefix'=>'admin'], function(){

  Route::get('/silent', function () { return "Admin is Silent";    });
   Route::get('/handsome', function () { return "Admin is Handsome";    });
    Route::get('/cool', function () { return "Admin is Cool enough";    });
});







require __DIR__.'/auth.php';
