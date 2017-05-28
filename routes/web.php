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
Auth::routes();

Route::group(['as' => 'home'], function() {
    Route::get('/', ['as' => 'index', 'uses' => 'HomeController@index']);
});

// Routes for administrator
Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => ['auth']], function() {

    // Routes for brands
    Route::group(['prefix' => 'brands', 'as' => 'brands.'], function () {
        Route::get('', ['as' => 'index', 'uses' => 'ProductBrandsController@index']);
        Route::get('create', ['as' => 'create', 'uses' => 'ProductBrandsController@create']);
        Route::post('', ['as' => 'store', 'uses' => 'ProductBrandsController@store']);
        Route::get('{brand}/edit', ['as' => 'edit', 'uses' => 'ProductBrandsController@edit']);
        Route::put('{brand}', ['as' => 'update', 'uses' => 'ProductBrandsController@update']);
    });
});