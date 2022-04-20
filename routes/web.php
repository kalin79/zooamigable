<?php

use Illuminate\Support\Facades\Route;

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
//     return view('welcome');
// });

Route::get('/',"FrontEnd\HomeController@index");
Route::redirect('/demo', '/', 301);
// Route::get('/',"FrontEnd\HomeController@contruccion");
Route::get('/mucho-mejor',"FrontEnd\HomeController@mucho");

Route::get('/clear-cache', function () {
     echo Artisan::call('config:clear');
     echo Artisan::call('config:cache');
     echo Artisan::call('cache:clear');
     echo Artisan::call('route:clear');
});