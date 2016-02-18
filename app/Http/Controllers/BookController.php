<?php
namespace App\Http\Controllers;
use DB;
use App\Http\Controllers;
//for transaction or process
use Illuminate\Http\Request;
use Illuminate\Session\TokenMismatchException;
use App\Book as Book;
class BookController extends Controller
{
  	public function __construct()
    {
        $this->middleware('isAdmin'); //only admin 
    }

    public function index(){
   		$book = DB::table('books')->get();
		return view('book.index', ['book' => $book]);
    }


    public function form(){
		return view('book.form');
    }

     public function delete(Request $request,$id){
      $i= DB::table('books')->where('id',$id)->delete();

      if($i >0){ 
        $request->session()->flash('message3', 'Warning! You just deleted a book!');
        return redirect('books');
    }
  }

    public function edit($id){
      $row= DB::table('books')->where('id',$id)->first();
      return view('book.edit')->with('row',$row);
    }

    public function save(Request $request)
    {
		$post = $request->all();
		$data = array(
                  'book_title' => $post['book_title'],
                  'book_ISBN' => $post['book_ISBN'],
                  'book_author' => $post['book_author'],
                  'book_publisher' => $post['book_publisher'],
                  'book_price' => $post['book_price'],
      );
    $i = DB::table('books')->insert($data);
    if($i > 0){
      $request->session()->flash('message2', 'The book has been successfully SAVED!');
      return redirect('books');
    }
  }

  public function update(Request $request){
    $post = $request->all();
    $data = array(
                  'book_title' => $post['book_title'],
                  'book_ISBN' => $post['book_ISBN'],
                  'book_author' => $post['book_author'],
                  'book_publisher' => $post['book_publisher'],
                  'book_price' => $post['book_price'],
      );
    $i = DB::table('books')->where('id',$post['id'])->update($data);
    if($i > 0){
      $request->session()->flash('message1', 'The book has been successfully UPDATED!');
      return redirect('books');
    }
  }

   public function show($id){
    //$book = Book::find($id);
    $book = DB::table('books')->where('id',$id)->first();
      return view('book.view')->with('book',$book);
  }
    
}