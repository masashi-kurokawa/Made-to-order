<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\test;


class TestlistController extends Controller
{
    //
    public function index(){
    $session_userid=1;


             $test = new test;
             $dblist = $test
             ->where('question_id',1)
             ->orwhere('question_id',2)
             ->orwhere('question_id',3)
            ->where('user_id',$session_userid)
             ->get();
            







        //ブレードへ
       return view('testlist',compact('dblist'));
    
    
    }
}
