<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Test_result;
use App\Models\Test;

class Student_detailsController extends Controller
{
    
    public function index(Request $request){
    
    $test_result=new Test_result;

    $users_db = $test_result
    ->join('tests', 'tests.id', '=', 'test_results.test_id')
    ->where('test_results.user_name', $request->input('name'))
    ->get();
   









    return view('student_details',compact('users_db'));
    
    }
}
