<?php
namespace App\Http\Controllers;
use DB;
use App\Http\Controllers;
//for transaction or process
use Illuminate\Http\Request;
use Illuminate\Session\TokenMismatchException;
class BookController extends Controller
{
  	
    public function index()
    {
   		$book = DB::table('book_details')->get();
		return view('book.index', ['book' => $book]);
    }

    public function index_cus()
    {
      $book = DB::table('book_details')->get();
    return view('book.index_cus', ['book' => $book]);
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
        Session::flash('message','Empty input not accepted');
     // $request->session()->flash('message', 'Record have been successfully DELETED');
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
                  'Book_Price' => $post['Book_Price'],
      );
    $i = DB::table('book_details')->insert($data);
    if($i > 0)
    {
      //Flash::message('Welcome Aboard!');
     //$request->session()->flash('message', 'Record have been successfully SAVED');
     Session::flash('message','Empty input not accepted');
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
                  'Book_Price' => $post['Book_Price'],
      );
    $i = DB::table('book_details')->where('id',$post['id'])->update($data);
    if($i > 0)
    {
      //$request->session()->flash('message', 'Record have been successfully UPDATED');
      return redirect('bookindex');
    }
  }
    
}