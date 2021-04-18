<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class JoinController extends Controller
{
   function rightjoin(){

 DB::table('friends')
 -> rightjoin('students', 'friends.age', '=', 'students.age')
 ->get();

   }
}
