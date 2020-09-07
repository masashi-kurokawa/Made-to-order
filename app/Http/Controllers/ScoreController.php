<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Test;

class ScoreController extends Controller
{
    //
    // public function index()
    // {
    //    return view('score');
    // }

    public function index(){



             $test = new test;
             $dblist = $test
             ->where('status',1)
             ->get();


        //ブレードへ
       return view('score',compact('dblist'));


    }
}
