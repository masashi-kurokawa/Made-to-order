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


             // $test = new test;
             // $dblist = $test
             // ->where('title',テスト1,'status',1)
             // ->get();

             $test = new test;
             $dblist = $test
             ->where('title', 'テスト1')
             // ->dd() // 上に移動させた
             ->where('status', 1)
             ->get();
             // dump($dblist);

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
