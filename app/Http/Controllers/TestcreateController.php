<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestcreateController extends Controller
{
    //Request 引数でブレードで送ったものを取得して引数に入れる
    public function index(Request $request)
    {

        
        $test=$request->input('test');

        print_r($test);


        

       return view('testcreate');
    }
}
