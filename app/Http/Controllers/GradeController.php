<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GradeController extends Controller
{
      //
      public function index()
      {
          $slack_id = Auth::user()->id;
          $slack_name = Auth::user()->slack_name;

          dump($slack_id);

          return view('grade');
      }

}
