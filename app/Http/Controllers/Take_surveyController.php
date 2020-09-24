<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Survey;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class Take_surveyController extends Controller
{
    //
    public function index(Request $request)
    {
       // アンケート受講
       $surveys = new Survey;
       $postsurvey = $request->all();
       // dump($surveys);

       //表示したいアンケートID持ってくる アンケートID＝$testnumber
       $surveynumber = $surveys->where('id',1)->value('id'); //('id',1)の中の１は変数になる POSTされてきた
       $selectitems = DB::table('select_surveys')->whereSurvey_id("$surveynumber")->get()->toArray();
       $writeitems = DB::table('write_surveys')->whereSurvey_id("$surveynumber")->get()->toArray();

       // user_idをとってくるSlackIDまでのつなぎ
       $user_id = DB::table('users')->whereUser_id("1")->value('user_id');

       //配列を合わせる
       $str2 = array_merge($selectitems, $writeitems);

       // collect（数字化？）
       $sorted = collect($str2);

       // アンケートのソート
       $sorteds = $sorted->sortBy('question_number')->all();
       dump($sorteds);
       // アンケート表示処理　終わり


       //アンケートの答え格納　始まり
       //POSTされてきた情報
       $answers = $request->all(); //GETで送られてきたデータ
       // 何問あるか？
       $count = $sorted->count('question_number');
       // アンケート判定
       for ($i = 1; $i <= "{$count}"; $i++){
         $testanswer[$i] = $request->input("answer$i"); //回答
         if ( empty($testanswer[$i])) {
           $testanswer[$i] = "回答なし";
         }

         // $role = $request->input("question$i"); //問題判定選択、穴埋め、記述

       // if ($role == 1) { //選択アンケート
       //   if ($testanswer[$i] === "回答なし") {
       //     $testanswer[$i] = "22";
       //   }
       //   DB::table('select_survey_answers')->insert([
       //     'user_id' => "$user_id", //SlackIDじゃないと入らない
       //     'test_id' => "$testnumber",
       //     'question_number' => "$i",
       //     'answer' => "$testanswer[$i]", //選択問題の回答じゃないと入らないのであとで入れる
       //     'created_at' => Carbon::now(), //時間が違う、場所の設定が違うのかも
       //     'updated_at' => Carbon::now()]); //時間が違う、場所の設定が違うのかも
       //   }
       //
       //   if ($role == 2) { //記述アンケート
       //     DB::table('write_survey_answers')->insert([
       //       'user_id' => "$user_id", //SlackIDじゃないと入らない
       //       'test_id' => "$testnumber",
       //       'question_number' => "$i",
       //       'answer' => "$testanswer[$i]",
       //       'created_at' => Carbon::now(), //時間が違う、場所の設定が違うのかも
       //       'updated_at' => Carbon::now()]); //時間が違う、場所の設定が違うのかも
       //     }

     }












       return view('take_survey',compact('sorteds'));
    }
}
