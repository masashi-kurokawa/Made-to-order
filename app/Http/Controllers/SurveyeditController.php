<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Survey;

class SurveyeditController extends Controller
{
    //
    public function index()
    {

      $survey = new survey;
      $dblist = $survey
      ->where('status',1)
      ->get();

       return view('surveyedit',compact('dblist'));
    }
}
