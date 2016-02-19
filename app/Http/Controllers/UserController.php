<?php
namespace App\Http\Controllers;
use DB;
use App\Http\Controllers;
//for transaction or process
use Illuminate\Http\Request;
use Illuminate\Session\TokenMismatchException;
use App\User as User;
class UserController extends Controller
{
  public function __construct()
    {
        $this->middleware('isAdmin'); //only admin 
    }
 
  /**
   * Display a listing of the resource.
   */
  public function index(){
      $users = DB::table('users')->get();
    return view('user.index', ['user' => $users]);
  }

  public function create(){
    return view('auth.register');
  }

   public function save(Request $request){
    $post = $request->all();
    $data = array(
                  'name' => $post['name'],
                 'email' => $post['email'],
                  'password' => $post['password']
      );
    $i = DB::table('users')->insert($data);
    if($i > 0){
      $request->session()->flash('message1', 'The data has been successfully SAVED!');
      return redirect('users');
    }
  }

  public function edit($id){
    $row= DB::table('users')->where('id',$id)->first();
      return view('user.edit')->with('row',$row);
  }

  public function update(Request $request){
    $post = $request->all();
    $data = array(
                 'name' => $post['name'],
                 'email' => $post['email'],
                  'password' => $post['password']
                  
      );
    $i = DB::table('users')->where('id',$post['id'])->update($data);
    if($i > 0){
      $request->session()->flash('message2', 'The data has been successfully UPDATED!');
      return redirect('users');
    }
  }

  public function delete(Request $request,$id){
    $i = DB::table('users')->where('id',$id)->delete();
      if($i > 0){
      $request->session()->flash('message3', 'The data has been successfully DELETED!');
      return redirect('users');
    }
  }

    public function show($id){
    //specific user
      //$user = User::find($id);
      //return view('user.index', ['user' => $user]);
       $row= DB::table('users')->where('id',$id)->first();
      return view('user.view')->with('row',$row);
     }
  }

