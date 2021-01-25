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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/blade', 'MainController@index') -> name('blade');
Route::get('/blog', 'MainController@index2') -> name('blade2'); //mi sono dimenticato il senso del name qui
Route::get('/about', 'MainController@index3') -> name('blade2');