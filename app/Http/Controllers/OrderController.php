<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;
use DB;
use Illuminate\Support\Facades\Input;
use App\Order as Order;
class OrderController extends Controller
{

    public function index(){
    $orders = DB::table('orders')->get();
    return view('order.index', ['order' => $orders]);
  }

  
    public function index_cus(){
      $book = DB::table('books')->get();
    return view('order.index_cus', ['book' => $book]);
    }

    public function vieworder(){
      $orders = DB::table('orders')->get();
    return view('order.vieworder', ['order' => $orders]);
    }

    public function create($book_id)
    {
        $book = DB::table('books')->where('id',$book_id)->first();
        return view('order.formorder')->with('book',$book);
    }

    public function store(Request $request)
    {
            $post = $request->all();
            $data = array(
                  'iduser' => $post['iduser'],
                  'book_title' => $post['book_title'],
                  'unitprice' => $post['unitprice'],
                  'qty' => $post['qty'],
                  'total' => $post['unitprice'] * $post['qty'],
      );
        $i = DB::table('orders')->insert($data);
    if($i > 0){
      $request->session()->flash('message', 'Your order has been successfully SAVED!');
       return redirect('orders');
    }
    }

    public function show($id){
    $order = DB::table('orders')->where('id',$id)->first();
    return view('order.vieworder')->with('order',$order);
  }

    public function showforuser(){
       $id = \Auth::user()->id;
      $orders = DB::table('orders')->where('iduser', '=', $id)->get();
            return view('order.viewordercus', ['order' => $orders]);
     }

     public function delete(Request $request,$id){
      $i= DB::table('orders')->where('id',$id)->delete();

      if($i >0){ 
        $request->session()->flash('message', 'Warning! You just deleted a order!');
        return redirect('orders');
    }
  }
}