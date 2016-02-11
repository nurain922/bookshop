<?php
namespace App\Http\Controllers;
use DB;
use App\Http\Controllers;
use Illuminate\Pagination\LengthAwarePaginator;
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
     public function delete($id)
    {
      $i= DB::table('book_details')->where('id',$id)->delete();
      if($i >0)
      {
      \Session::flash('message','Record have been successfully DELETED');
      return redirect('bookindex');
      }
    }

    public function edit($id)
    {
      $row= DB::table('book_details')->where('id',$id)->first();
      return view('book.edit')->with('row',$row);
    }
    public function save(Request $request)
    {
		$post = $request->all();
		$data = array(
                  'Book_Title' => $post['Book_Title'],
                  'Book_ISBN' => $post['Book_ISBN'],
                  'Book_Author' => $post['Book_Author'],
                  'Book_Publisher' => $post['Book_Publisher'],
      );
    $i = DB::table('book_details')->insert($data);
    if($i > 0)
    {
      \Session::flash('message','Record have been successfully saved');
      return redirect('bookindex');
    }
  }

  public function update(Request $request)
    {
    $post = $request->all();
    $data = array(
                  'Book_Title' => $post['Book_Title'],
                  'Book_ISBN' => $post['Book_ISBN'],
                  'Book_Author' => $post['Book_Author'],
                  'Book_Publisher' => $post['Book_Publisher'],
      );
    $i = DB::table('book_details')->where('id',$post['id'])->insert($data);
    if($i > 0)
    {
      
      return redirect('bookindex');
    }
  }
    
}