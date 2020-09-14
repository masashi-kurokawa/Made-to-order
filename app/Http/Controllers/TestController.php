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

       //配列を合わせる
       $str3 = array_merge($selectitems, $holeitems, $writeitems);

       // collect（数字化？）
       $sorted = collect($str3);

       // テストのソート
       $sorteds = $sorted->sortBy('question_number')->all();
    // テスト表示処理　終わり



    // 　テストの答え格納　始まり
       //POSTされてきた情報
       $answers = $request->all(); //GETで送られてきたデータ
       // 何問あるか？
       $count = $sorted->count('question_number');

       // 問題が正解か判定する
       for ($i = 1; $i <= "{$count}"; $i++){
         $testanswer[$i] = $request->input("answer$i"); //回答
         $testanswer1[$i] = $request->input("$i"); //答え

        // if文で判定
        if ($testanswer[$i] === $testanswer1[$i]) {
          $correct[$i] = 1;
          $scores[$i] = 1;
        } else{
          $correct[$i] = 2;
          $noscores[$i] = 2;
        }

        // 回答の配列　if文で登録先変える
        $param = [
          'user_id' => 'slackOauth', //あとで入れる
          'test_id' => "$testnumber",
          'question_number' => "$i",
          'answer' => "$testanswer[$i]",
          'Judgment' => "$correct[$i]", //正解かどうか
          'created_at' => Carbon::now(),
          'updated_at' => Carbon::now(),
        ];
        // DB::table('profiles')->insert($param);
        // dump($param);

       };

       // 点数をだす
       $correctcount = count($scores); //2問正解

       // 点数登録
       $par = [
         'id' => '',
         'slack_name' => 'slackOauth',
         'test_id' => "$testnumber",
         'score' => "$correctcount",
         // 'created_at' => Carbon::now(),
         // 'updated_at' => Carbon::now(),
         'created_at' => '',
         'updated_at' => '',
       ];
       dump($par);

       DB::table('test_results')->insert($par);




    // 　テストの答え格納　終わり




       // dump($sorteds->toArray());
       // var_dump($sorted);
       // dump($testanswer1);
       // dump($answers);
       // dump($sorted);
       // dump(is_array($answers)); //配列か確認

       // return view('test');
       return view('test',compact('sorteds'));
       // return view('test',compact('sorted', 'sub_value'));
       // return view('test',compact('', '', '', ''));
    }
}
