<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;
use DB;
use Illuminate\Support\Facades\Input;
use App\Book as Book;
class OrderController extends Controller
{
    public function index(){
    $orders = DB::table('orders')->get();
    return view('order.index', ['order' => $orders]);
  }

    public function create($book_id)
    {
      //userid
        //$book = DB::table('books')->where('id',$book_id)->first();
       // $user = DB::table('users')->where('iduser',$user_id)->first();
        $book = DB::table('books')->where('id',$book_id)->first();
        //$user = DB::table('users')->where('iduser',$iduser)->first();
        //$iduser = DB::table('users')->find($iduser);

   // echo $book->book_title;
        return view('order.formorder')->with('book',$book);
        //->with('user',$user);
    }

    public function store(Request $request)
    {
        $validator = Validator::make(Input::all(),
        array(
                   'book_title' => 'required',
                   'unitprice' => 'required',
                   'qty' => 'required'
                )
            );
         if ($validator->fails()) {
            return redirect('/createorder')
                        ->withErrors($validator)
                        ->withInput();
        }

        else{
            $post = $request->all();
            $data = array(
                   // 'id' => $post['id'],
                  //'iduser' => $post['iduser'],
                  'book_title' => $post['book_title'],
                  'unitprice' => $post['unitprice'],
                  'qty' => $post['qty'],
                  'total' => $post['unitprice'] * $post['qty'],
      );
        $i = DB::table('orders')->insert($data);
    if($i > 0){
      $request->session()->flash('message', 'Your order has been successfully SAVED!');
      return redirect('orderindex');
    

    }
    }
}
}