<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Test;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    //
    public function index(Request $request)
    {


    // テスト表示処理　始まり
       //DBから情報持ってくる
       $test = new Test;
       //表示したいテストID持ってくる
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

       // $testanswer1 = $request->input('answer1'); //回答
       // $testanswer11 = $request->input('1'); //答え

       // for ($i = 1; $i <= 10; $i++){
       for ($i = 1; $i <= "{$count}"; $i++){
         $testanswer[$i] = $request->input("answer$i"); //回答
         $testanswer1[$i] = $request->input("$i"); //答え
         dump($testanswer[$i]);
         dump($testanswer1[$i]);
       };
       // $testanswer11 = $request->input('qa',"{question_number}"); //答え

       // $testans = "{$testanswer1}";

       // 問題が正解か判定する








    // 　テストの答え格納　終わり




       // dump($sorteds->toArray());
       // var_dump($sorted);
       // dump($testanswer11);
       // dump($testanswer1);
       dump($answers);
       // dump($count);
       // dump(is_array($answers)); //配列か確認

       // return view('test');
       return view('test',compact('sorteds'));
       // return view('test',compact('sorted', 'sub_value'));
       // return view('test',compact('', '', '', ''));
    }
}
