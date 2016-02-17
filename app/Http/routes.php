<?php



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

    Route::get('book_title', function () {
	$book = App\Book::where('book_title','=','Laravel Starter')->first();
	echo $book->id;
});

Route::get('books', 'BookController@index')->middleware('isAdmin');
Route::get('createbook', 'BookController@form');
Route::get('edit/{id}', 'BookController@edit');
Route::get('book/{id}', 'BookController@show');
Route::post('save', 'BookController@save');
Route::post('update', 'BookController@update');
Route::get('delete/{id}', 'BookController@delete');

//form for payment
Route::get('orderindex', 'OrderController@index')->middleware('isAdmin');

Route::get('cusindex', 'OrderController@index_cus')->middleware('auth');

Route::get('createorder/{book_id}', 'OrderController@create');
Route::POST('store', 'OrderController@store');
Route::get('createuser', 'UserController@create');
Route::get('edituser/{id}', 'UserController@edit');
Route::get('showuser/{id}', 'UserController@show');
Route::post('storeuser', 'UserController@save');
Route::post('updateuser', 'UserController@update');
Route::get('userindex', 'UserController@index');
Route::get('deleteuser/{id}', 'UserController@delete');

Route::auth();
Route::get('/home', 'HomeController@index');
Route::get('/', function () {
   return view('welcome');
});

});


