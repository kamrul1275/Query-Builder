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




Route:: get('/about', 'SiteController@selectonecolumnrows');
Route:: get('/test', 'AggregatesController@avgrow');



Route:: get('/select', 'SelectsController@onecolumnselect');
Route:: get('/', 'MargeController@margedata');


Route:: get('/join', 'JoinController@rightjoin');



