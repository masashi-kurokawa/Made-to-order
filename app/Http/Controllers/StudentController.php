<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;

class StudentController extends Controller
{
    //urlの結果を取得
    public function index(Request $request)
    {

        $student=new user;

        $inputlist=["keyword"=>$request->input('keyword')];


        if( empty($request->input('keyword'))){
            $dblist = $student
            ->get();
        }else{
             //urlの結果を取得
             $dblist = $student
             //user_nameと検索で表示したデータを取得
             ->where('user_name','like','%'.$request->input('keyword').'%')
             ->get();

        }




        return view('student',compact('dblist','inputlist'));

<<<<<<< HEAD
=======
        return view('student',compact('dblist'));


>>>>>>> kuroki
    }
}
