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




/*
Route::get('/', function () {
    return view('frontend.construccion');
});
*/

/*
Route::get('/', function () {
    return view('frontend.layout');
});
*/


require (__DIR__ . '/rutas/frontend/home.php');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
