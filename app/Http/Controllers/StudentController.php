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
$dblist = $student->get();
echo"<pre>";
print_r($dblist);
echo"</pre>";      


        return view('student');
       
       
    }
}
