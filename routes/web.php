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


Route::group(['middleware' => 'guest'], function () {
   Route::get('/', 'Auth\loginController@index')->name('welcome');
   Route::get('/welcome', 'Auth\loginController@index')->name('welcome_1');
   Route::get('/login', 'Auth\loginController@index')->name('login');
   Route::post('login', 'Auth\loginController@authenticate');
 });
Auth::routes();

Route::group(['middleware' => 'auth'], function () {
   
   $data = App\d_mem::all();

//HOME
   Route::get('/home', 'HomeController@index')->name('home');



//MASTER
   //MASTER role
   Route::get('/master/master_role', 'master\master_roleController@index')->name('master_role');
   Route::get('/master/master_role/create', 'master\master_roleController@create')->name('master_role_create');
   Route::get('/master/master_role/save', 'master\master_roleController@save')->name('master_role_save');
   Route::get('/master/master_role/edit/{id}', 'master\master_roleController@edit')->name('master_role_edit');
   Route::get('/master/master_role/update', 'master\master_roleController@update')->name('master_role_update');
   Route::get('/master/master_role/delete/{id}', 'master\master_roleController@delete')->name('master_role_delete');

   //MASTER admin
   Route::get('/master/master_admin', 'master\master_adminController@index')->name('master_admin');
   Route::get('/master/master_admin/create', 'master\master_adminController@create')->name('master_admin_create');
   Route::get('/master/master_admin/save', 'master\master_adminController@save')->name('master_admin_save');
   Route::get('/master/master_admin/edit/{id}', 'master\master_adminController@edit')->name('master_admin_edit');
   Route::get('/master/master_admin/update/{id}', 'master\master_adminController@update')->name('master_admin_update');
   Route::get('/master/master_admin/delete/{id}', 'master\master_adminController@delete')->name('master_admin_delete');

   //MASTER customer
   Route::get('/master/master_customer', 'master\master_customerController@index')->name('master_customer');
   Route::get('/master/master_customer/create', 'master\master_customerController@create')->name('master_customer_create');
   Route::get('/master/master_customer/save', 'master\master_customerController@save')->name('master_customer_save');
   Route::get('/master/master_customer/edit/{id}', 'master\master_customerController@edit')->name('master_customer_edit');
   Route::get('/master/master_customer/update/{id}', 'master\master_customerController@update')->name('master_customer_update');
   Route::get('/master/master_customer/delete/{id}', 'master\master_customerController@delete')->name('master_customer_delete');

   //MASTER room
   Route::get('/catalog/catalog_room', 'catalog\catalog_roomController@index')->name('catalog_room');
   Route::get('/catalog/catalog_room/create', 'catalog\catalog_roomController@create')->name('catalog_room_create');
   Route::get('/catalog/catalog_room/save', 'catalog\catalog_roomController@save')->name('catalog_room_save');
   Route::get('/catalog/catalog_room/edit/{id}', 'catalog\catalog_roomController@edit')->name('catalog_room_edit');
   Route::get('/catalog/catalog_room/update/{id}', 'catalog\catalog_roomController@update')->name('catalog_room_update');
   Route::get('/catalog/catalog_room/delete/{id}', 'catalog\catalog_roomController@delete')->name('catalog_room_delete');

   //MASTER categories
   Route::get('/catalog/catalog_categories', 'catalog\catalog_categoriesController@index')->name('catalog_categories');
   Route::get('/catalog/catalog_categories/create', 'catalog\catalog_categoriesController@create')->name('catalog_categories_create');
   Route::get('/catalog/catalog_categories/save', 'catalog\catalog_categoriesController@save')->name('catalog_categories_save');
   Route::get('/catalog/catalog_categories/edit/{id}', 'catalog\catalog_categoriesController@edit')->name('catalog_categories_edit');
   Route::get('/catalog/catalog_categories/update/{id}', 'catalog\catalog_categoriesController@update')->name('catalog_categories_update');
   Route::get('/catalog/catalog_categories/delete/{id}', 'catalog\catalog_categoriesController@delete')->name('catalog_categories_delete');

   //MASTER features
   Route::get('/catalog/catalog_features', 'catalog\catalog_featuresController@index')->name('catalog_features');
   Route::get('/catalog/catalog_features/create', 'catalog\catalog_featuresController@create')->name('catalog_features_create');
   Route::get('/catalog/catalog_features/save', 'catalog\catalog_featuresController@save')->name('catalog_features_save');
   Route::get('/catalog/catalog_features/edit/{id}', 'catalog\catalog_featuresController@edit')->name('catalog_features_edit');
   Route::get('/catalog/catalog_features/update/{id}', 'catalog\catalog_featuresController@update')->name('catalog_features_update');
   Route::get('/catalog/catalog_features/delete/{id}', 'catalog\catalog_featuresController@delete')->name('catalog_features_delete');



});
