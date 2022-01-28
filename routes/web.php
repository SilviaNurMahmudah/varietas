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

Route::get('/', function() {
    return view('auth.login');
});

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/datavarietas', 'HomeController@varietas');
Route::get('/datavarietas-{id}', 'HomeController@varietasId');
Route::get('/rekomendasi', 'HomeController@rekomendasi');
Route::get('/varietas-rekomendasi','HomeController@recom');
Route::get('/varietas-cari','HomeController@cari');

Route::get('/dashboard', 'VarietasController@index')->name('dashboard');

Route::get('/varietas', 'VarietasController@getAll')->name('varietas');
Route::get('/varietas-{id}', 'VarietasController@getById');
Route::get('/add-varietas', 'VarietasController@add');
Route::post('/create-varietas', 'VarietasController@create');
Route::get('/edit-varietas-{id}', 'VarietasController@edit');
Route::post('/update-varietas-{id}', 'VarietasController@update');
Route::get('/delete-varietas-{id}', 'VarietasController@delete');

Route::get('/bentuk', 'BentukController@getAll')->name('bentuk');
Route::get('/add-bentuk', 'BentukController@add');
Route::post('/create-bentuk', 'BentukController@create');
Route::get('/edit-bentuk-{id}', 'BentukController@edit');
Route::post('/update-bentuk-{id}', 'BentukController@update');
Route::get('/delete-bentuk-{id}', 'BentukController@delete');

Route::get('/ukuran', 'UkuranController@getAll')->name('ukuran');
Route::get('/add-ukuran', 'UkuranController@add');
Route::post('/create-ukuran', 'UkuranController@create');
Route::get('/edit-ukuran-{id}', 'UkuranController@edit');
Route::post('/update-ukuran-{id}', 'UkuranController@update');
Route::get('/delete-ukuran-{id}', 'UkuranController@delete');

Route::get('/warna_kulit', 'WKulitController@getAll')->name('warna_kulit');
Route::get('/add-warna_kulit', 'WKulitController@add');
Route::post('/create-warna_kulit', 'WKulitController@create');
Route::get('/edit-warna_kulit-{id}', 'WKulitController@edit');
Route::post('/update-warna_kulit-{id}', 'WKulitController@update');
Route::get('/delete-warna_kulit-{id}', 'WKulitController@delete');

Route::get('/warna_daging', 'WDagingController@getAll')->name('warna_daging');
Route::get('/add-warna_daging', 'WDagingController@add');
Route::post('/create-warna_daging', 'WDagingController@create');
Route::get('/edit-warna_daging-{id}', 'WDagingController@edit');
Route::post('/update-warna_daging-{id}', 'WDagingController@update');
Route::get('/delete-warna_daging-{id}', 'WDagingController@delete');

Route::get('/users', 'UserController@getAll')->name('User');
Route::get('/add-user', 'UserController@add');
Route::post('/create-user', 'UserController@create');
Route::get('/edit-user-{id}', 'UserController@edit');
Route::post('/update-user-{id}', 'UserController@update');
Route::get('/delete-user-{id}', 'UserController@delete');