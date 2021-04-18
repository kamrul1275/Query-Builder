<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SiteController extends Controller
{
    public function allrows()
    {
       $user= DB::table('friends')->get();
       return  $user;

       
    }

    public function selectonecolumnrows()
    {
       $user= DB::table('friends')->pluck('name', 'id') ;
       return  json_encode( $user);

       
    }
}
