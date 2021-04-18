<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SelectsController extends Controller
{
   function uniquecolumn(){
    $result=  DB::table('friends')->distinct()->get();
       return  $result;
   }
   function onecolumnselect(){
    $result= DB::table('friends')->select('id')->get();
       return  $result;
   }

   function multicolumnselect(){
    $result=  DB::table('friends')->select('name', ('age')->get());
       return  $result;
   }
}
