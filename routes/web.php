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

// Route::get('/', function () {
//     return view('home');
// });

Route::get('/varietas', 'VarietasController@getAll');
Route::get('/varietas-{id}', 'VarietasController@getById');
Route::get('/add-varietas', 'VarietasController@add');
Route::get('/edit-varietas', 'VarietasController@edit');

Route::get('/ukuran', 'UkuranController@getAll');