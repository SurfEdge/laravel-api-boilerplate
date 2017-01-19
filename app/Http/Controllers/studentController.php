<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class studentController extends Controller
{
        public function index()
    {
		 $users = DB::select('select * from users');
	      return $users;

    }
}
