<?php

use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get( '/', 'RegisterController@login');
Route::match(['get', 'post'], '/login', 'RegisterController@login');

//Route::group(['middleware' => 'auth'], function () {
    Route::group(['prefix' => 'delivery'], function () {
        Route::get('/', 'DeliveryController@gantt');
        Route::match(['get', 'post'], '/list', 'DeliveryController@listDelievry');
        Route::get('/add', 'DeliveryController@addItalk');
        Route::get('/edit', 'DeliveryController@editItalk');
    });

    Route::group(['prefix' => 'syukins'], function () {
        Route::get('/', 'SyukinController@listInWeek');
    });

    Route::group(['prefix' => 'clients'], function () {
        Route::get('/', 'ClientController@listClient');
        Route::get('/edit', 'ClientController@editClient');
        Route::get('/add', 'ClientController@addClient');
        Route::get('/delete', 'ClientController@deleteClient');
    });

    Route::group(['prefix' => 'logs'], function () {
        Route::get('/', 'LogController@listLog');
    });

    Route::group(['prefix' => 'girls'], function () {
        Route::get('/', 'GirlController@listGirl');
        Route::post('/','GirlController@postGirl');

    });

    Route::group(['prefix' => 'matchings'], function () {
        Route::get('/', 'MatchingController@index');
    });
//});





//clear cache
Route::get('/clear_cache', function() {
    Artisan::call('config:clear');
    Artisan::call('route:clear');
    Artisan::call('cache:clear');
});


//login
Route::get('login', 'RegisterController@login');
Route::post('login', 'RegisterController@postLogin');
Route::get('logout', 'RegisterController@logout');

