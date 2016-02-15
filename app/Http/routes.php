<?php


Route::get('/', function () {
    return view('welcome');
});

Route::get('/invoice', function () {
    return view('payment.invoice');
});
//index
Route::get('bookindex', 'BookController@index');
Route::get('cusindex', 'BookController@index_cus');
Route::get('userindex', 'UserController@index');

//form for books
Route::get('bookform', 'BookController@form');
Route::post('save', 'BookController@save');
Route::post('update', 'BookController@update');
Route::get('delete/{id}', 'BookController@delete');
Route::get('edit/{id}', 'BookController@edit');

//form for payment
Route::get('create', 'PostController@create');
Route::get('store/{request}', 'PostController@store');

//form for user
Route::get('createuser', 'UserController@create');
Route::get('edituser/{id}', 'UserController@edit');
Route::post('storeuser', 'UserController@save');
Route::get('showuser', 'UserController@show');
Route::post('updateuser', 'UserController@update');
Route::get('deleteuser/{id}', 'UserController@delete');



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