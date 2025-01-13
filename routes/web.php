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

Route::get('/p', function () {
    return 'Privet!!!!!';
});

Route::get('/my_sity', function (){
    return 'my sity is Penza';
});

Route::get('/my_u', 'MyPlaceController@index');
