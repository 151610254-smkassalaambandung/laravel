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
    return view('welcome');
});

Route::get('testmodel',function(){
	$q = App\post::all();
	return $q;
});

Route::get('produk',function(){
	$q = App\produk::all();
	return $q;
});

Route::get('pengguna',function(){
	$q = App\pengguna::all();
	return $q;
});

Route::get('pengaturan',function(){
	$q = App\pengaturan::all();
	$w = App\produk::all();
	$r = App\pengguna::all();
	return $q.$w.$r;
});
//latihan controller
Route::get('/test','MyController@percobaan');
Route::get('/test2','MyController@percobaan2');
Route::get('/test3','MyController@percobaan3');
Route::get('/test4','MyController@percobaan4');
Route::get('/test5','MyController@percobaan5');
Route::get('/test6','MyController@percobaan6');
Route::get('param/{buah}', 'MyController@param');

