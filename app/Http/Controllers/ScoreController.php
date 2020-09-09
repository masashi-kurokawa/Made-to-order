<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Test;

class ScoreController extends Controller
{
    //
    // public function index()
    // {
    //    return view('score');
    // }

    public function index(){
    // public function index(Request $request){


             $test = new test;
             $dblist = $test
             // ->where('title',テスト1,'status',1)
             // ->get();
             // $tests = $request->input('test');
             // $request->input('test');
             // echo ($request);


             // $test = new test;
             // $dblist = $test
             ->where('title', 'テスト1')
             // ->where('title', {$tests})
             // ->dd() // 上に移動させた
             ->where('status', 1)
             ->get();
             // dump(test);

             // $dt_from = new Carbon;
             // $dt_from->startOfMonth();
             //
             // $dt_to = new Carbon;
             // $dt_to->endOfMonth();
             //
             // $reports = Report::whereBetween('report_date', [$dt_from, $dt_to])->get();


        //ブレードへ
       return view('score',compact('dblist'));

    }
}
