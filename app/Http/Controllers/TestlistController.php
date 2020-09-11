<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Test;


class TestlistController extends Controller
{
    //
    public function index(){



             $test = new Test;
             $dblist = $test
             ->where('status',1)
             ->get();


        //ブレードへ
       return view('testlist',compact('dblist'));


    }
}
