<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\survey;


class SurveylistController extends Controller
{
    //
    public function index(){


        $survey_list=new survey;
        $dblist = $survey_list
        ->get();

        return view('surveylist',compact('dblist'));



    }
}
