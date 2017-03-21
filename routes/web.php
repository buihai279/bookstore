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
Route::get('/','HomeController@index')->name('homepage');
Route::get('/danh-muc/{id}','HomeController@viewCategory')->name('viewCategory');
Route::get('/sach/{id}','HomeController@viewBook')->name('viewBook');
Route::get('/tac-gia/{id}','HomeController@viewAuthor')->name('viewAuthor');

Route::get('/trang-quan-tri', function () {
    return view('back-end.dashboard');
})->name('dashboard');


Route::get('doi-mat-khau','UserController@changePassword')->name('changePassword');
Route::post('submitPassword','UserController@submitPassword')->name('submitPassword');


Route::get('category/list','CategoryController@show')->name('listCategory');
Route::get('author/list','AuthorController@getlist')->name('listAuthor');
Route::get('company/list','CompanyController@getlist')->name('listCompany');
Route::get('news/list','NewsController@getlist')->name('listNews');
Route::get('slide/list','SlideController@getlist')->name('listSlide');
Route::get('category/list','CategoryController@getlist')->name('listCategory');

Route::get('book/list','BookController@getlist')->name('listBook');
Route::post('book/uploadImagesBook','BookController@uploadImagesBook')->name('uploadImagesBook');
Route::post('book/uploadAvatarBook','BookController@uploadAvatarBook')->name('uploadAvatarBook');

Route::post('author/uploadAvatarAuthor','AuthorController@uploadAvatarAuthor')->name('uploadAvatarAuthor');

Route::post('company/uploadCompanyLogo','CompanyController@uploadCompanyLogo')->name('uploadCompanyLogo');
Route::post('slide/uploadSlideImage','SlideController@uploadSlideImage')->name('uploadSlideImage');

Route::get('comment/list','CommentController@getlist')->name('listComment');
Route::get('sale/list','SaleController@getlist')->name('listSale');
Route::get('list-users',  'UserController@getList')->name('getListUser');

Route::post('slide/order', 'SlideController@order')->name('slide.order');
Route::post('category/order','CategoryController@order')->name('submitOrderCategory');

Route::resource('user', 'UserController');
Route::resource('author', 'AuthorController');
Route::resource('category', 'CategoryController');
Route::resource('company', 'CompanyController');
Route::resource('news', 'NewsController');
Route::resource('slide', 'SlideController');
Route::resource('book', 'BookController');
Route::resource('sale', 'SaleController');
Route::resource('comment', 'CommentController');

Route::resource('cart', 'CartController');

Route::post('cart/add', 'CartController@addCart')->name('cart.add');
