<?php
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

 
// this all about books
Route::get('books', 'BookController@index'); // list of books
Route::get('createbook', 'BookController@form'); // create a form for book
Route::get('editbook/{id}', 'BookController@edit'); //edit books
Route::get('book/edit/{id}', 'BookController@edit'); //edit books 
Route::get('book/{id}', 'BookController@show'); //view a book
Route::post('save', 'BookController@save'); // save a book
Route::post('updatebook', 'BookController@update'); //update a book after changes
Route::get('deletebook/{id}', 'BookController@delete'); // delete a book


Route::group(['middleware' => 'isAdmin'], function () {
//this all about orders
Route::get('deliverorder/{id}', 'OrderController@deleteorder'); // delete an order
Route::get('orders', 'OrderController@index'); // list of order that have been made
Route::get('orderview', 'OrderController@viewordercus');
Route::get('view/{id}',['as' => 'order_view', 'uses' => 'OrderController@show']);
Route::get('editorder/{id}', 'OrderController@edit'); // edit an order by admin
Route::get('deliverorder/{id}', 'OrderController@deleteorder'); // delete an order
Route::get('users', 'UserController@index');
Route::get('createuser', 'UserController@create');
Route::get('edituser/{id}', 'UserController@edit');
Route::get('user/{id}', 'UserController@show');
Route::post('storeuser', 'UserController@save');
Route::post('updateuser', 'UserController@update');
Route::get('deleteuser/{id}', 'UserController@delete');
});

Route::get('createorders', 'OrderController@index_cus'); //list of order that customer can be made
Route::get('account', 'OrderController@viewordercus'); // for user view

// for admin view the order

//view order one by one by ID order
Route::get('createorder/{book_id}', 'OrderController@create'); // create form for customer to purchase
Route::POST('store', 'OrderController@store');//store order that customer made

Route::get('editordercustomer/{id}', 'OrderController@editcus')->name('editorder'); // should be only one person can see
Route::post('updateorder', 'OrderController@update'); // should be only one person can see
Route::get('deleteorder/{id}', 'OrderController@delete'); // should be only one person can see



Route::auth();
Route::get('/home', 'HomeController@index');
Route::get('accountuser', 'OrderController@showforuser');// show user's order
Route::get('/', function () {
   return view('welcome');
});


});