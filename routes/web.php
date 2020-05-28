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
Route::get('/index','ApiController@indexAction');

Route::get('/catalog1','ApiController@catalog1Action');

Route::get('/catalog2','ApiController@catalog2Action');

Route::get('/catalog3','ApiController@catalog3Action');

Route::get('/catalog4','ApiController@catalog4Action');

Route::get('/dostavka','ApiController@dostsvkaAction');

Route::get('/oplata','ApiController@oplataAction');

Route::get('/registration','ApiController@registrationAction');

Route::get('/basket','ApiController@basketAction');
