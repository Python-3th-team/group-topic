<?php

use Illuminate\Support\Facades\Auth;
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
//     return view('nav');
// });
Route::get('/' , 'FrontController@index');

Route::get('/sc_shop' , 'FrontController@sc_shop');
Route::get('/sc_shop_detail/{id}', 'FrontController@sc_shop_detail');


Auth::routes();
Route::group(['middleware' => ['auth'], 'prefix' => '/home'], function () {
    //最新消息
    Route::get('/', 'HomeController@index');

    Route::get('/news', 'NewsController@index');

    Route::get('/news/create', 'NewsController@create');

    Route::post('/news/store', 'NewsController@store');

    Route::get('/news/edit/{id}', 'NewsController@edit');

    Route::post('/news/update/{id}', 'NewsController@update');

    Route::post('/news/delete/{id}', 'NewsController@delete');
});





