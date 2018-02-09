<?php

use Illuminate\Routing\Router;

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
define('STATIC_BASE_URL',  URL::to('/').'/');

//Constant for Diet Categories
define('FRUITS',  1);
define('VEGETABLES',  2);
define('FOODS',  3);
define('MEAT',  4);
define('PRODUCT',  5);


Route::get("/","IndexController@index");