<?php
namespace App\Http\Controllers;
use DB;
use App\Http\Controllers;
//for transaction or process
use Illuminate\Http\Request;
class BookController extends Controller
{
  	
    public function index()
    {
   		$book = DB::table('book_details')->get();
		return view('book.index', ['book' => $book]);
    }
     public function form()
    {
		return view('book.form');
    }
        public function save(Request $request)
    {
		$post = $request->all();
		var_dump($post);
    }
        public function store(Request $request)
    {
		$post = $request->all();
		var_dump($post);
    }
}