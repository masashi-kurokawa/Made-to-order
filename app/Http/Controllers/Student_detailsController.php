<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Test_result;
use App\Models\Test;

class Student_detailsController extends Controller
{
    //
    public function index(Request $request)
    {
    $test_result=new Test_result;
    $test=new Test;
       
    $db2=$test
    ->get();
    print_r($db2);


    
/*       
     $db=$test_result
        ->where('user_name',$request->input('name'))
        ->get();
        print_r($db);

*/






       return view('student_details');
    }
}
