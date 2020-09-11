<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\write_survey;
use App\Models\Survey;

class SurveyeditController extends Controller
{
    //
    public function index()
    {

      //サンプル表示
      return view('surveyedit');
      $survey = new survey;
      $dblist = $survey
      ->where('status',1)
      ->get();

       return view('surveyedit',compact('dblist'));
    }
}
