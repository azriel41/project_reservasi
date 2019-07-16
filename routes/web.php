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

// INDEX
// Route::group(['middleware' => 'guest'], function () {
   // Route::get('/', 'Auth\LoginController@index')->name('welcome');
   Route::get('/', 'homeController@index')->name('welcome');
   Route::get('/login', 'Auth\LoginController@index')->name('login');
   Route::post('login', 'Auth\LoginController@authenticate');
 // });
   Route::get('/home', 'rumahController@index')->name('home');

// ROOM DETAIL------------------------------------
   
   Route::get('/room_detail', 'frontend\room\room_detailController@index')->name('room_detail');
   Route::get('/room_detail/invoice', 'frontend\room\room_invoiceController@index')->name('invoice');

   Auth::routes();

// Route::group(['middleware' => 'auth'], function () {
   
   $data = App\d_mem::all();


//MASTER------------------------------------------
   //MASTER role
   Route::get('/master/master_role', 'master\master_roleController@index')->name('master_role');
   Route::get('/master/master_role/create', 'master\master_roleController@create')->name('master_role_create');
   Route::get('/master/master_role/save', 'master\master_roleController@save')->name('master_role_save');
   Route::get('/master/master_role/edit/{id}', 'master\master_roleController@edit')->name('master_role_edit');
   Route::get('/master/master_role/update', 'master\master_roleController@update')->name('master_role_update');
   Route::get('/master/master_role/delete/{id}', 'master\master_roleController@delete')->name('master_role_delete');

   //MASTER admin
   Route::get('/master/master_user', 'master\master_userController@index')->name('master_user');
   Route::get('/master/master_user/create', 'master\master_userController@create')->name('master_user_create');
   Route::get('/master/master_user/save', 'master\master_userController@save')->name('master_user_save');
   Route::get('/master/master_user/edit/{id}', 'master\master_userController@edit')->name('master_user_edit');
   Route::get('/master/master_user/update/{id}', 'master\master_userController@update')->name('master_user_update');
   Route::get('/master/master_user/delete/{id}', 'master\master_userController@delete')->name('master_user_delete');

   //MASTER customer
   Route::get('/master/master_customer', 'master\master_customerController@index')->name('master_customer');
   Route::get('/master/master_customer/create', 'master\master_customerController@create')->name('master_customer_create');
   Route::get('/master/master_customer/save', 'master\master_customerController@save')->name('master_customer_save');
   Route::get('/master/master_customer/edit/{id}', 'master\master_customerController@edit')->name('master_customer_edit');
   Route::get('/master/master_customer/update/{id}', 'master\master_customerController@update')->name('master_customer_update');
   Route::get('/master/master_customer/delete/{id}', 'master\master_customerController@delete')->name('master_customer_delete');

   //MASTER features
   Route::get('/master/master_features', 'master\master_featuresController@index')->name('master_features');
   Route::get('/master/master_features/create', 'master\master_featuresController@create')->name('master_features_create');
   Route::get('/master/master_features/save', 'master\master_featuresController@save')->name('master_features_save');
   Route::get('/master/master_features/edit/{id}', 'master\master_featuresController@edit')->name('master_features_edit');
   Route::get('/master/master_features/update', 'master\master_featuresController@update')->name('master_features_update');
   Route::get('/master/master_features/delete/{id}', 'master\master_featuresController@delete')->name('master_features_delete');



// CATALOG --------------------------------------   
   //CATALOG categories
   Route::get('/catalog/catalog_categories', 'catalog\catalog_categoriesController@index')->name('catalog_categories');
   Route::get('/catalog/catalog_categories/create', 'catalog\catalog_categoriesController@create')->name('catalog_categories_create');
   Route::get('/catalog/catalog_categories/save', 'catalog\catalog_categoriesController@save')->name('catalog_categories_save');
   Route::get('/catalog/catalog_categories/edit/{id}', 'catalog\catalog_categoriesController@edit')->name('catalog_categories_edit');
   Route::get('/catalog/catalog_categories/update/{id}', 'catalog\catalog_categoriesController@update')->name('catalog_categories_update');
   Route::get('/catalog/catalog_categories/delete/{id}', 'catalog\catalog_categoriesController@delete')->name('catalog_categories_delete');
   //CATALOG room
   Route::get('/catalog/catalog_room', 'catalog\catalog_roomController@index')->name('catalog_room');
   Route::get('/catalog/catalog_room/create', 'catalog\catalog_roomController@create')->name('catalog_room_create');
   Route::post('/catalog/catalog_room/save', 'catalog\catalog_roomController@save')->name('catalog_room_save');
   Route::get('/catalog/catalog_room/edit/{id}', 'catalog\catalog_roomController@edit')->name('catalog_room_edit');
   Route::get('/catalog/catalog_room/update', 'catalog\catalog_roomController@update')->name('catalog_room_update');
   Route::get('/catalog/catalog_room/delete/{id}', 'catalog\catalog_roomController@delete')->name('catalog_room_delete');



   // BOOK
   Route::get('/book/book_room/detail/{id}', 'backend\book\book_roomController@room_detail')->name('room_detail');


   

   



// });
