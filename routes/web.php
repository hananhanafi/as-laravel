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
//     return view('index');
// });

// Route::get('/about', function () {
//     $nama = 'Hanan Hanafi';
//     return view('about', ['nama' => $nama]);
// });

Route::get('/', 'PagesController@home');
Route::get('/about', 'PagesController@about');
Route::get('/dashboard', 'PagesController@dashboard');

Route::get('/mahasiswa', 'MahasiswaController@index');

Route::get('info', function() { phpinfo(); });

Route::resource('/categories','CategoryController');

