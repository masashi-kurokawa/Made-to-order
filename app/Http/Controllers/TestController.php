<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Test;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class TestController extends Controller
{
    //
    public function index(Request $request)
    {


    // テスト表示処理　始まり
       //DBから情報持ってくる
       $test = new Test;
       //表示したいテストID持ってくる テストID＝$testnumber
       $testnumber = $test->where('id',1)->value('id'); //('id',1)の中の１は変数になる POSTされてきた
       $selectitems = DB::table('select_tests')->whereTest_id("$testnumber")->get()->toArray();
       $holeitems = DB::table('hole_tests')->whereTest_id("$testnumber")->get()->toArray();
       $writeitems = DB::table('write_tests')->whereTest_id("$testnumber")->get()->toArray();


       // user_idをとってくるSlackIDまでのつなぎ
       $user_id = DB::table('users')->whereSlack_id("abc")->value('id');

       //配列を合わせる
       $str3 = array_merge($selectitems, $holeitems, $writeitems);

       // collect（数字化？）
       $sorted = collect($str3);

       // テストのソート
       $sorteds = $sorted->sortBy('question_number')->all();
       // dump($selectitems);
    // テスト表示処理　終わり



    // 　テストの答え格納　始まり
       //POSTされてきた情報
       $answers = $request->all(); //GETで送られてきたデータ
       // 何問あるか？
       $count = $sorted->count('question_number');

       // 記述問題用


       // 問題が正解か判定する
       if ( !empty($answers)) {
         $sum = 0;
       for ($i = 1; $i <= "{$count}"; $i++){
         $testanswer[$i] = $request->input("answer$i"); //生徒の回答
         if ( empty($testanswer[$i])) {
           $testanswer[$i] = "回答なし";
         }

         // 選択テスト
         // データ取得
         $b_answer[$i] = $request->input("b_answer$i"); //生徒の回答
         $question_answer[$i] = $request->input("question_answer$i"); //正解
         // 正解判定
         if ($b_answer[$i] == $question_answer[$i]) {
           $b_judgment[$i] = "1"; //正解の場合は1
         }
         else {
           $b_judgment[$i] = "2"; //不正解の場合は2
         }

         $testan = array_column($sorteds, "answer"); //答え
         // $testan = array_column($sorteds, "answer$i"); //答え
         // $testanswer1 = $testan["$i" - 1];; //答え

         $role = $request->input("question$i"); //問題判定選択、穴埋め、記述
         dump($b_judgment[$i]);
         // dump($testan);
         // dump($testnumber);

        // if文で正解判定　//セレクト問題だけ正解にならない
        // if ($testanswer[$i] === $testanswer1) {
        //   $scores = 1;
        //   $correct = 1;
        // } else{
        //   $scores = 0;
        //   $correct = 2;
        // }
        // $sum = $sum + $scores;
        // dump($sum);

            // 回答の配列　if文で登録先変える
            if ($role == 1) { //記述問題
              DB::table('write_answers')->insert([
                'user_id' => "$user_id", //SlackIDじゃないと入らない
                'test_id' => "$testnumber", // ok
                'question_number' => "$i", //ok
                'answer' => "$testanswer[$i]",  //生徒の回答　ok
                'Judgment' => "3", //正解かどうか
                'created_at' => Carbon::now(), //時間が違う、場所の設定が違うのかも
                'updated_at' => Carbon::now()]); //時間が違う、場所の設定が違うのかも
              }

            if ($role == 2) { //選択問題
              DB::table('select_answers')->insert([
                'user_id' => "$user_id", //SlackIDじゃないと入らない
                'test_id' => "$testnumber",
                'question_number' => "$i",
                'answer' => "$testanswer[$i]", //選択問題の回答じゃないと入らないのであとで入れる
                'Judgment' => "$b_judgment[$i]", //正解かどうか
                'created_at' => Carbon::now(), //時間が違う、場所の設定が違うのかも
                'updated_at' => Carbon::now()]); //時間が違う、場所の設定が違うのかも
              }

              if ($role == 3) { //穴埋め問題
                // DB::table('hole_answers')->insert([
                //   'user_id' => "$user_id", //SlackIDじゃないと入らない
                //   'test_id' => "$testnumber",
                //   'question_number' => "$i",
                //   'answer' => "$testanswer[$i]",
                //   'Judgment' => "$correct", //正解かどうか
                //   'created_at' => Carbon::now(), //時間が違う、場所の設定が違うのかも
                //   'updated_at' => Carbon::now()]); //時間が違う、場所の設定が違うのかも
                }


       };
       // 点数をだす
       // dump($sum);
       $correctcount = $sum; //2問正解
       }

       // 点数登録
       if ( isset ( $correctcount ) ) {
         // dump($sum);
         // DB::table('test_results')->insert([
         //   'user_name' => 'slackOauth', //とりあえず入れてる
         //   'test_id' => "$testnumber",
         //   'score' => "$correctcount",
         //   'created_at' => Carbon::now(), //時間が違う、場所の設定が違うのかも
         //   'updated_at' => Carbon::now()]); //時間が違う、場所の設定が違うのかも

         // return view('testend'); //テスト完了画面に遷移
       }

       // 　テストの答え格納　終わり




       // dump($sorteds->toArray());
       // var_dump($sorted);
       // dump($answers);
       // dump(is_array($sorteds)); //配列か確認

       return view('test',compact('sorteds'));
    }
}
