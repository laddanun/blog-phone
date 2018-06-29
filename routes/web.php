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
Route::group(['middleware' => ['auth']], function () {
	Route::get('/','CustomerController@showCus');
	Route::view('/create','create')->name('page.create');
	Route::post('/create/store','CustomerController@storeCus')->name('create.store');
	Route::get('/edit/{id}','CustomerController@edit')->name('page.edit');
	Route::put('/update','CustomerController@updateCus')->name('page.update');
	Route::delete('delete/{id}','CustomerController@deleteCus')->name('page.delete');

	Route::get('/upload','uploadController@index')->name('upload');
	Route::post('/store','uploadController@store')->name('store');
	Route::get('/show','uploadController@show')->name('show');
	Route::get('/editimage/{id}','uploadController@edit')->name('editImg');
	Route::put('/upload/update','uploadController@update')->name('upload.update');
	Route::delete('/upload/delete/{id}','uploadController@delete')->name('upload.delete');

	Route::view('/data/upload','dataupload')->name('data.upload');
	Route::post('/data/create','uploadController@dataCreate')->name('data.create');
	//Route::get('/vdo-upload','uploadController@indexVdo')->name('uploadVdo');
});

Auth::routes();

Route::get('/home','HomeController@index')->name('home');
