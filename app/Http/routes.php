<?php


Route::get('/', function (Request $r) {
   return view('welcome');
	//$r->session()->put('user',123);
	//return $r->session()->get('user');
});



Route::get('book_title', function () {
	$book = App\Book::where('book_title','=','Laravel Starter')->first();
	echo $book->id;
});

Route::get('books', function () {
	$books = App\Book::all();
	foreach($books as $book) {
		echo $book->book_title . "<br />";
   }
}); 

Route::get('orders', function () {
	$orders = App\Order::all();
	foreach($orders as $order) {
		$book = App\Book::find($order->id);
		echo $order->iduser . " . ordered " . $book->book_title . "<br />";
   }
}); 

Route::get('/invoice', function () {
    return view('order.invoice');
});
//index

Route::get('cusindex', 'BookController@index_cus');


//form for books




Route::get('user', 'UserController@log');

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

Route::get('bookindex', 'BookController@index');
Route::get('createbook', 'BookController@form');



Route::get('edit/{id}', 'BookController@edit');
Route::get('book/{id}', 'BookController@show');
//form for payment
Route::get('orderindex', 'OrderController@index');
//Route::get('createorder/{id}/{id}', 'OrderController@create');
Route::get('createorder/{book_id}', 'OrderController@create');
///
Route::POST('store', 'OrderController@store');

//form for user
Route::get('createuser', 'UserController@create');
Route::get('edituser/{id}', 'UserController@edit');

Route::get('showuser/{id}', 'UserController@show');
Route::post('save', 'BookController@save');
Route::post('update', 'BookController@update');
Route::get('delete/{id}', 'BookController@delete');
Route::post('storeuser', 'UserController@save');
Route::post('updateuser', 'UserController@update');

Route::get('userindex', 'UserController@index');
Route::get('deleteuser/{id}', 'UserController@delete');


});

Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/home', 'HomeController@index');
});
