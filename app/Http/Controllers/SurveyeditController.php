<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\write_survey;

class SurveyeditController extends Controller
{
    //
    public function index()
    {

      //サンプル表示
      return view('surveyedit');
    }
}
