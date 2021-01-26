<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'MainController@home') -> name('home');
Route::get('/control', 'MainController@control') -> name('control');
Route::get('/pagamenti', 'MainController@getPagamenti') -> name('pagamenti');