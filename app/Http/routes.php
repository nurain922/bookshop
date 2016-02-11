<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/invoice', function () {
    return view('payment.invoice');
});


Route::get('bookindex', 'BookController@index');

Route::get('cusindex', 'BookController@index_cus');

Route::get('bookform', 'BookController@form');

Route::post('save', 'BookController@save');

Route::post('update', 'BookController@update');

Route::get('delete/{id}', 'BookController@delete');

Route::get('edit/{id}', 'BookController@edit');

Route::get('create', 'PostController@create');

Route::get('store/{request}', 'PostController@store');
//Route::get('store', 'BookController@store');
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //



});
Route::get('laravel-version', function()
{
$laravel = app();
return "Your Laravel version is ".$laravel::VERSION;
});