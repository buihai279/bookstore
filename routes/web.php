<?php

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

Auth::routes();
Route::get('/', function () {
    return view('front-end.home');
});
Route::get('/home','HomeController@index')->name('homepage');

Route::get('/trang-quan-tri', function () {
    return view('back-end.dashboard');
})->name('dashboard');

Route::get('/quan-li-tai-khoan', function () {
    return view('back-end.users.show');
})->name('manager-user');
Route::get('quan-ly-nguoi-dung','UserController@index')->name('indexUser');
Route::get('list-users',  'UserController@getList')->name('getListUser');
Route::get('sua-nguoi-dung/{id}','UserController@edit')->name('editUser');
Route::post('sua-nguoi-dung/{id}','UserController@update')->name('updateUser');
Route::get('doi-mat-khau','UserController@changePassword')->name('changePassword');
Route::post('submitPassword','UserController@submitPassword')->name('submitPassword');


Route::get('quan-ly-danh-muc-sach','CategoryController@index')->name('indexCategory');
Route::get('list-categories','CategoryController@show')->name('listCategory');
Route::get('sua-danh-muc/{id}','CategoryController@edit')->name('editCategory');
Route::put('sua-danh-muc/{id}','CategoryController@update')->name('updateCategory');
Route::delete('danh-muc/{id}','CategoryController@destroy')->name('deleteCategory');

Route::post('sap-xep-danh-muc','CategoryController@order')->name('submitOrderCategory');

Route::post('them-danh-muc','CategoryController@store')->name('storeCategory');

Route::get('author/list','AuthorController@getlist')->name('listAuthor');
Route::get('company/list','CompanyController@getlist')->name('listCompany');
Route::get('news/list','NewsController@getlist')->name('listNews');
Route::get('slide/list','SlideController@getlist')->name('listSlide');
Route::get('category/list','CategoryController@getlist')->name('listCategory');
Route::post('slide/order', 'SlideController@order')->name('slide.order');
Route::get('book/list','BookController@getlist')->name('listBook');
Route::get('sale/list','SaleController@getlist')->name('listSale');
Route::resource('author', 'AuthorController');
Route::resource('company', 'CompanyController');
Route::resource('news', 'NewsController');
Route::resource('slide', 'SlideController');
Route::resource('book', 'BookController');
Route::resource('sale', 'SaleController');
