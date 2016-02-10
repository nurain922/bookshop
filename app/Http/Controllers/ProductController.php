<?php

namespace App\Http\Controllers;

use DB;
use App\Http\Controllers;

class ProductController extends Controller
{
  	
    public function index()
    {
   
        return view('book.index');
    }
}
