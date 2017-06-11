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

    // Routes for categories
    Route::group(['prefix' => 'categories', 'as' => 'categories.'], function () {
        Route::get('', ['as' => 'index', 'uses' => 'ProductCategoriesController@index']);
        Route::get('create', ['as' => 'create', 'uses' => 'ProductCategoriesController@create']);
        Route::post('', ['as' => 'store', 'uses' => 'ProductCategoriesController@store']);
        Route::get('{category}/edit', ['as' => 'edit', 'uses' => 'ProductCategoriesController@edit']);
        Route::put('{category}', ['as' => 'update', 'uses' => 'ProductCategoriesController@update']);
    });

    // Routes for roles
    Route::group(['prefix' => 'roles', 'as' => 'roles.'], function () {
        Route::get('', ['as' => 'index', 'uses' => 'RolesController@index']);
        Route::get('create', ['as' => 'create', 'uses' => 'RolesController@create']);
        Route::post('', ['as' => 'store', 'uses' => 'RolesController@store']);
        Route::get('{role}/edit', ['as' => 'edit', 'uses' => 'RolesController@edit']);
        Route::put('{role}', ['as' => 'update', 'uses' => 'RolesController@update']);
    });

    // Routes for users
    Route::group(['prefix' => 'users', 'as' => 'users.'], function () {
        Route::get('', ['as' => 'index', 'uses' => 'UsersController@index']);
        Route::get('create', ['as' => 'create', 'uses' => 'UsersController@create']);
        Route::post('', ['as' => 'store', 'uses' => 'UsersController@store']);
        Route::get('{user}/edit', ['as' => 'edit', 'uses' => 'UsersController@edit']);
        Route::put('{user}', ['as' => 'update', 'uses' => 'UsersController@update']);
    });
});