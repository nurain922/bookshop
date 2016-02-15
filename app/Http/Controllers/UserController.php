<?php
namespace App\Http\Controllers;
use DB;
use App\Http\Controllers;
//for transaction or process
use Illuminate\Http\Request;
use Illuminate\Session\TokenMismatchException;
class UserController extends Controller
{
  public function log(){
    return view('user.user');
  }
 
  /**
   * Display a listing of the resource.
   */
  public function index(){
    $users = DB::table('users')->get();
    return view('user.index', ['user' => $users]);
  }

  public function create(){
    return view('user.create');
  }

   public function save(Request $request){
    $post = $request->all();
    $data = array(
                  'user_name' => $post['user_name'],
                  'user_pass' => $post['user_pass'],
                  'user_fname' => $post['user_fname'],
                  'user_email' => $post['user_email'],
                  'user_phone' => $post['user_phone'],
      );
    $i = DB::table('users')->insert($data);
    if($i > 0){
      $request->session()->flash('message', 'The data has been successfully SAVED!');
      return redirect('userindex');
    }
  }

  public function edit($id){
    $row= DB::table('users')->where('iduser',$id)->first();
      return view('user.edit')->with('row',$row);
  }

  public function update(Request $request){
    $post = $request->all();
    $data = array(
                 'user_name' => $post['user_name'],
                  'user_pass' => $post['user_pass'],
                  'user_fname' => $post['user_fname'],
                  'user_email' => $post['user_email'],
                  'user_phone' => $post['user_phone'],
      );
    $i = DB::table('users')->where('iduser',$post['iduser'])->update($data);
    if($i > 0){
      $request->session()->flash('message', 'The data has been successfully UPDATED!');
      return redirect('userindex');
    }
  }

  public function delete(Request $request,$id){
    $i = DB::table('users')->where('iduser',$id)->delete();
      if($i > 0){
      $request->session()->flash('message', 'The data has been successfully DELETED!');
      return redirect('userindex');
    }
  }

    public function show($id){
    //specific user
   // $users = DB::table('user_details')->->where('iduser',$id)->first();
   // return view('user.index', ['user' => $users]);
  }

  
  
}

