<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MargeController extends Controller
{
    function margedata(){

$friends=DB::table('friends')->get();
$students=DB::table('students')->get();
$totaldata=$friends->merge($students);
 return $totaldata;


    }
}
