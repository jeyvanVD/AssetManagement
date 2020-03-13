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

Route::get('/', 'pagesController@welcome');
Route::get('/asset-list', 'pagesController@assetList');
Route::post('/auth', 'LoginController@authenticate');
Route::get('/asset-return', 'pagesController@assetReturn');
Route::get('/asset-usage', 'pagesController@assetUsage');
Route::get('/asset-new', 'pagesController@assetNew');
Route::get('/asset-delete', 'pagesController@assetDelete');
Route::get('/signup-1', 'pagesController@signup_1');
Route::get('/signup-2', 'pagesController@signup_2');
Route::get('/logout','LoginController@logout');

Route::post('/users','userController@store');

Route::get('/asset-list','assetController@index');
Route::post('/assets','assetController@store');
Route::post('/assets/edit', 'assetController@edit');
Route::post('/assets/update','assetController@update');
Route::post('/assets/edit2', 'assetController@edit2');
Route::post('/assets/update2','assetController@update2');
Route::post('/assets/edit3', 'assetController@edit3');
Route::post('/assets/delete','assetController@delete');


