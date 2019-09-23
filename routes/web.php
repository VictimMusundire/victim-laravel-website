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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', 'PagesController@home');
Route::get('/meetvic', 'PagesController@meet');
Route::get('/portifoliovic', 'PagesController@portifolio');
Route::get('/contactvic', 'PagesController@contact');
Route::get('/login', 'PagesController@login');
Route::get('/healthy', 'PagesController@healthy');
Route::get('/workshops', 'PagesController@workshops');

