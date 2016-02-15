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
  	
    public function index(){
   		$book = DB::table('books')->get();
		return view('book.index', ['book' => $book]);
    }

    public function index_cus(){
      $book = DB::table('books')->get();
    return view('book.index_cus', ['book' => $book]);
    }

    public function form(){
		return view('book.form');
    }

     public function delete(Request $request,$id){
      $i= DB::table('books')->where('id',$id)->delete();

      if($i >0){ 
        $request->session()->flash('message', 'The data has been successfully DELETED!');
        return redirect('bookindex');}
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
      $request->session()->flash('message', 'The data has been successfully SAVED!');
      return redirect('bookindex');
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
      $request->session()->flash('message', 'The data has been successfully UPDATED!');
      return redirect('bookindex');
    }
  }

   public function show($id){
    //specific user
    $book = Book::find($id);
    echo $book->book_title;
   // $users = DB::table('user_details')->->where('iduser',$id)->first();
   // return view('user.index', ['user' => $users]);
  }
    
}