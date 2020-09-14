<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Survey;

class SurveyeditController extends Controller
{
    // // 元表示
    // public function index()
    // {
    //
    //
    //   $survey = new survey;
    //   $dblist = $survey
    //   ->where('status',1)
    //   ->get();
    //
    //    return view('surveyedit',compact('dblist'));
    //
    // }

    // 丹羽参考
    public function index(Request $request){

    $survey=new Survey;

    $surveys_db = $survey
    ->join('surveys', 'surveys.id', '=', 'surveys.survey_id')
    ->where('surveys.survey_title', $request->input('title'))
    ->get();

    return view('surveyedit',compact('surveys_db'));

    }

}
