<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\test;


class TestlistController extends Controller
{
    //
    public function index()
    {
    $session_userid=1;

    $dblist=[["test_title"=>"test0004","test_img"=>"https://www.youtube.com/?gl=JP"],
             ["test_title"=>"test0005","test_img"=>"https://www.youtube.com/?gl=JP"]];


             $test = new test;
             $value = $test->select('test_title')->where('user_id',$session_userid)->groupBy('test_title')->get();
           echo"<pre>";
             print_r($value);
             echo"</pre>";

        //ブレードへ
       return view('testlist',compact('dblist'));
    
    
    }
}
