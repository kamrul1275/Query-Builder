<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AggregatesController extends Controller
{
   function countrow(){
   $result= DB::table('friends')->count();
    return  json_encode($result);
   }
   function maxrow(){
    $result= DB::table('friends')->max('age');
    return  json_encode($result);
}

function minrow(){
    $result= DB::table('friends')->min('age');
    return  json_encode($result);
}
function avgrow(){
    $result= DB::table('friends')->avg('age');
    return  json_encode($result);
}
}
