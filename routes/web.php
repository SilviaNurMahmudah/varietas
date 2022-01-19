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

Route::get('/varietas', 'VarietasController@getAll');
Route::get('/varietas-{id}', 'VarietasController@getById');
Route::get('/add-varietas', 'VarietasController@add');
Route::get('/edit-varietas-{id}', 'VarietasController@edit');

Route::get('/bentuk', 'BentukController@getAll');
Route::get('/add-bentuk', 'BentukController@add');
Route::post('/create-bentuk', 'BentukController@create');
Route::get('/edit-bentuk-{id}', 'BentukController@edit');
Route::post('/update-bentuk-{id}', 'BentukController@update');
Route::get('/delete-bentuk-{id}', 'BentukController@delete');

Route::get('/ukuran', 'UkuranController@getAll');
Route::get('/add-ukuran', 'UkuranController@add');
Route::post('/create-ukuran', 'UkuranController@create');
Route::get('/edit-ukuran-{id}', 'UkuranController@edit');
Route::post('/update-ukuran-{id}', 'UkuranController@update');
Route::get('/delete-ukuran-{id}', 'UkuranController@delete');

Route::get('/warna_kulit', 'WKulitController@getAll');
Route::get('/add-warna_kulit', 'WKulitController@add');
Route::post('/create-warna_kulit', 'WKulitController@create');
Route::get('/edit-warna_kulit-{id}', 'WKulitController@edit');
Route::post('/update-warna_kulit-{id}', 'WKulitController@update');
Route::get('/delete-warna_kulit-{id}', 'WKulitController@delete');

Route::get('/warna_daging', 'WDagingController@getAll');
Route::get('/add-warna_daging', 'WDagingController@add');
Route::post('/create-warna_daging', 'WDagingController@create');
Route::get('/edit-warna_daging-{id}', 'WDagingController@edit');
Route::post('/update-warna_daging-{id}', 'WDagingController@update');
Route::get('/delete-warna_daging-{id}', 'WDagingController@delete');
