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


Route::get('/', 'HomeController@getHome');

Route::get('login', function ($varlogin="Pagina de login") {
    return view('auth.login')
        ->with('varpagina',$varlogin);
});

Route::post('logout', function () {
    return null;
});

Route::get('catalog','CatalogController@getIndex');

Route::get('catalog/show/{id}', 'CatalogController@getShow');

Route::get('catalog/create', 'CatalogController@getCreate');

Route::get('catalog/edit/{id}', 'CatalogController@getEdit');