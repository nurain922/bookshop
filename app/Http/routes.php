<?php



Route::get('orde', function () {
	$orders = App\Order::all();
	foreach($orders as $order) {
		$book = App\Book::find($order->id);
		echo $order->iduser . " . ordered " . $book->book_title . "<br />";
   }
}); 



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
// this all about books
Route::get('books', 'BookController@index')->middleware('isAdmin'); // list of books
Route::get('createbook', 'BookController@form'); // create a form for book
Route::get('editbook/{id}', 'BookController@edit'); //edit books
Route::get('book/edit/{id}', 'BookController@edit'); //edit books 
Route::get('book/{id}', 'BookController@show'); //view a book
Route::post('save', 'BookController@save'); // save a book
Route::post('updatebook', 'BookController@update'); //update a book after changes
Route::get('deletebook/{id}', 'BookController@delete'); // delete a book

//this all about orders
Route::get('orders', 'OrderController@index')->middleware('isAdmin'); // list of order that have been made
Route::get('createorders', 'OrderController@index_cus')->middleware('auth'); //list of order that customer can be made
Route::get('account', 'OrderController@viewordercus')->middleware('auth'); // for user view
Route::get('orderview', 'OrderController@viewordercus')->middleware('isAdmin');// for admin view the order
Route::get('view/{id}',['as' => 'order_view', 'uses' => 'OrderController@show'])->middleware('isAdmin');
//view order one by one by ID order
Route::get('createorder/{book_id}', 'OrderController@create'); // create form for customer to purchase
Route::POST('store', 'OrderController@store');//store order that customer made
Route::get('show', 'OrderController@showforuser'); // create form for customer to purchase
Route::get('editorder/{id}', 'OrderController@edit'); // edit an order by admin
Route::post('updateorder', 'OrderController@update'); // edit an order by admin
Route::get('deleteorder/{id}', 'OrderController@delete'); // delete an order
Route::get('deliverorder/{id}', 'OrderController@deleteorder'); // delete an order
Route::get('/invoice', function () {
    return view('order.invoice');
});

//this all about user
Route::get('users', 'UserController@index');
Route::get('createuser', 'UserController@create');
Route::get('edituser/{id}', 'UserController@edit');
Route::get('user/{id}', 'UserController@show');
Route::post('storeuser', 'UserController@save');
Route::post('updateuser', 'UserController@update');
Route::get('deleteuser/{id}', 'UserController@delete');

Route::auth();
Route::get('/home', 'HomeController@index');
Route::get('/', function () {
   return view('welcome');
});



Route::get('/pass', 'Auth\PasswordController@index');

});


