<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\user;
class StudentController extends Controller
{
    //
    public function index()
    {
       
$student=new user;
$dblist = $student
->where('user_id',1)
->get();
    




        return view('student',compact('dblist'));
       
    
    }
}
