<?php
namespace App\Http\Controllers;
use DB;
use App\Http\Controllers;
//for transaction or process
use Illuminate\Http\Request;
use Illuminate\Session\TokenMismatchException;
class UserController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index(){
    $users = DB::table('user_details')->get();
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
    $i = DB::table('user_details')->insert($data);
    if($i > 0){
      return redirect('userindex');
    }
  }

  public function edit($id){
    $row= DB::table('user_details')->where('iduser',$id)->first();
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
    $i = DB::table('user_details')->where('iduser',$post['iduser'])->update($data);
    if($i > 0){
      return redirect('userindex');
    }
  }

  public function delete($id){
    $i = DB::table('user_details')->where('iduser',$id)->delete();
      if($i > 0){
      return redirect('userindex');
    }
  }

    public function show($id){
    //specific user
   // $users = DB::table('user_details')->->where('iduser',$id)->first();
   // return view('user.index', ['user' => $users]);
  }

  
  
}

