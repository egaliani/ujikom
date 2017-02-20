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

Route::get('/home', 'HomeController@index');
Route::resource('/Jabatan', 'Jabatan_Controller');
Route::group(['middleware' => ['api'],'prefix' => 'api'], function () {
    Route::post('register', 'API_Controller@register');
    Route::post('login', 'API_Controller@login');

    Route::group(['middleware' => 'jwt-auth'], function () {
    	Route::post('get_user_details', 'API_Controller@get_user_details');
    });
});
                                                                                                                                                                                                                                 
Route::resource('/Golongan', 'Golongan_Controller');
Route::resource('/kategori_lembur', 'kategori_lembur_Controller');
Route::resource('/Pegawai', 'Pegawai_Controller');
Route::resource('/lembur_pegawai', 'lembur_pegawai_Controller');
Route::resource('/Tunjangan', 'Tunjangan_Controller');
Route::resource('/Tunjangan_pegawai', 'Tunjangan_pegawai_Controller');