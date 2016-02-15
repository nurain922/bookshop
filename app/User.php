<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;


class User extends Authenticatable
{
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */


    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
class User extends Eloquent {

    
    $users = User::all();
    $users->toarray();

  protected $guarded = array('id');
  protected $fillable = array('name', 'email');

  public static $rules = array(
    'name' => 'required|min:5',
    'email' => 'required|email'
  );
}