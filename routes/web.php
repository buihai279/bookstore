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


// ROUTE FRONT-END
Auth::routes();
Route::get('/','HomeController@index')->name('homepage');

Route::get('/sach/{id}','HomeController@viewBook')->name('viewBook');
Route::get('/danh-muc/{id}','HomeController@viewCategory')->name('viewCategory');
Route::get('/sach-ban-chay-trong-tuan','HomeController@viewHotBookWeek')->name('viewHotBookWeek');
Route::get('/sach-ban-chay-trong-thang','HomeController@viewHotBookMonth')->name('viewHotBookMonth');
Route::get('/sach-ban-moi-xuat-ban','HomeController@viewBookNewPublish')->name('viewBookNewPublish');
Route::get('/theo-doi-don-hang','HomeController@flowOrder')->name('flowOrder');
Route::get('/tim-kiem/','HomeController@search')->name('search');

Route::get('/tac-gia/{id}','HomeController@viewAuthor')->name('viewAuthor');

Route::get('/cty-phat-hanh/{id}','HomeController@viewCompany')->name('viewCompany');

Route::get('/trang-quan-tri','DashBoardController@index')->name('dashboard');


Route::get('doi-mat-khau','UserController@changePassword')->name('changePassword');
Route::post('submitPassword','UserController@submitPassword')->name('submitPassword');




// ROUTE BACK-END

Route::get('category/list','CategoryController@show')->name('listCategory');
Route::get('author/list','AuthorController@getlist')->name('listAuthor');
Route::get('company/list','CompanyController@getlist')->name('listCompany');
Route::get('slide/list','SlideController@getlist')->name('listSlide');
Route::get('category/list','CategoryController@getlist')->name('listCategory');

Route::get('book/list','BookController@getlist')->name('listBook');
Route::get('order/list','OrderController@getlist')->name('listOrder');


Route::post('book/uploadImagesBook','BookController@uploadImagesBook')->name('uploadImagesBook');
Route::post('book/uploadAvatarBook','BookController@uploadAvatarBook')->name('uploadAvatarBook');

Route::post('author/uploadAvatarAuthor','AuthorController@uploadAvatarAuthor')->name('uploadAvatarAuthor');

Route::post('company/uploadCompanyLogo','CompanyController@uploadCompanyLogo')->name('uploadCompanyLogo');
Route::post('slide/uploadSlideImage','SlideController@uploadSlideImage')->name('uploadSlideImage');

Route::get('comment/list','CommentController@getlist')->name('listComment');
Route::get('list-users',  'UserController@getList')->name('getListUser');

Route::post('slide/order', 'SlideController@order')->name('slide.order');
Route::post('category/order','CategoryController@order')->name('submitOrderCategory');

Route::get('payment/success',  'PaymentController@success')->name('payment.success');
Route::get('payment/cancel',  'PaymentController@cancel')->name('payment.cancel');

Route::resource('user', 'UserController');
Route::resource('author', 'AuthorController');
Route::resource('category', 'CategoryController');
Route::resource('company', 'CompanyController');
Route::resource('slide', 'SlideController');
Route::resource('book', 'BookController');
Route::resource('comment', 'CommentController');
Route::resource('order', 'OrderController');
Route::resource('save', 'SaveController');
Route::resource('payment', 'PaymentController');

Route::post('save_add','SaveController@save_add')->name('save_add');
Route::post('updateOrders','OrderController@updateOrders')->name('order.updateOrders');

Route::post('cart/add', 'CartController@addCart')->name('cart.add');
Route::post('cart/updateCart', 'CartController@updateCart')->name('cart.updateCart');
Route::post('cart/deleteCart', 'CartController@deleteCart')->name('cart.deleteCart');
Route::resource('cart', 'CartController');
