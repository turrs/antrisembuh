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

Route::get('/', function () {
    return view('index');
});


Auth::routes();
Route::get('/users', 'UsersController@index')->name('pasien.index');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin', 'AdminController@index')->name('index');
Route::get('/profile', 'AdminController@profile')->name('profile');
Route::get('/dokter', 'DokterController@index')->name('dokter');
Route::get('/dokter/{dokter}', 'DokterController@show')->name('show');
Route::get('/welcome', 'HomeController@welcome')->name('welcome');
Route::post('/dokter', 'DokterController@store')->name('create');
Route::delete('/dokter/{dokter}', 'DokterController@destroy')->name('delete');
Route::put('/dokter/{dokter}', 'DokterController@update')->name('update');
Route::get('/pasien', 'PasienController@index')->name('pasien');
Route::get('/pasien/tambahdata', 'PasienController@tambahdata')->name('tambahdata');
Route::post('/pasien', 'PasienController@store')->name('create');
Route::get('/pasien/{pasien}', 'PasienController@show')->name('show');
Route::delete('/pasien/{pasien}', 'PasienController@destroy')->name('delete');
Route::put('/pasien/{pasien}', 'PasienController@update')->name('update');
Route::get('create', 'DisplayDataController@create');
Route::get('index', 'DisplayDataController@index');