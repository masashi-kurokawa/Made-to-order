<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Survey;



class SurveylistController extends Controller
{
    //
    public function index(){

<<<<<<< HEAD

        $survey_list=new survey;
=======
        
        $survey_list=new Survey;
>>>>>>> slackOauth
        $dblist = $survey_list
        ->get();

        return view('surveylist',compact('dblist'));



    }
}
