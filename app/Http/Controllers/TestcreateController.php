<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class TestcreateController extends Controller
{
    //Request 引数でブレードで送ったものを取得して引数に入れる
    public function index(Request $request)
    {

        // 参考処理
        $posttest = $request->all();
        $test_title = $request->input('test_title');
        $test_status = $request->input('test_heory');
        // DB::table('tests')->insert([
        //   'title' => "$test_title", //SlackIDじゃないと入らない
        //   'status' => "$test_status",
        //   'created_at' => Carbon::now(), //時間が違う、場所の設定が違うのかも
        //   'updated_at' => Carbon::now()  //時間が違う、場所の設定が違うのかも
        // ]);

        // dump($test_status);



        // 4、8択のどれを正解にしたかのチェックは下でとってくる
        // for文2回回して値とる
        // $text4[$i] = $request->input("4choice$h_$i"); //4択問題の何番目を正解にしたかのチェック
        // $text8[$i] = $request->input("8choice$h_$i");  // 4択問題の何番目を正解にしたかのチェック
        // for ($i=1; $i <=4 ; $i++) {
        //   for ($h=1; $h <=4 ; $h++) {
        //     // $choice4[$i] = $request->input('4choice' + h + '_' + i + '');
        //     // $choice4[$i] = $request->input('4choice' h '_' i '');
        //     $choice4[$i] = $request->input("'4choice'$h'_'$i");
        //     dump($choice4[$i]);
        //   }
        // }
        // dump($choice4[$i]);

        //問題の保存
        $testno = DB::table('tests')->whereTitle("テスト2")->value('id'); //テストの番号　撮り方の選定があまい
        $surveyno = $request->input('id'); //問題数
        dump($posttest);
        for ($i=1; $i <= $surveyno; $i++) {
          $question_number[$i] = $i; //何問目か？
          $text1[$i] = $request->input("1text$i"); //１回答のテキスト
          $answer_1[$i] = $request->input("1answer_$i"); //１回答の答え

          $text2[$i] = $request->input("2text$i"); //穴埋めのテキスト
          $answer_1[$i] = $request->input("2answer1_$i"); //穴埋めのテキスト
          $answer_2[$i] = $request->input("2answer2_$i"); //穴埋めのテキスト

          $text4[$i] = $request->input("4text$i"); //4択問題のテキスト
          $answer_1[$i] = $request->input("4answer1_$i"); //１個目の答え
          $answer_2[$i] = $request->input("4answer2_$i"); //１個目の答え
          $answer_3[$i] = $request->input("4answer3_$i"); //１個目の答え
          $answer_4[$i] = $request->input("4answer4_$i"); //１個目の答え

          $text8[$i] = $request->input("8text$i"); //8択問題のテキスト
          $answer_1[$i] = $request->input("8answer1_$i"); //１個目の答え
          $answer_2[$i] = $request->input("8answer2_$i"); //１個目の答え
          $answer_3[$i] = $request->input("8answer3_$i"); //１個目の答え
          $answer_4[$i] = $request->input("8answer4_$i"); //１個目の答え
          $answer_5[$i] = $request->input("8answer5_$i"); //１個目の答え
          $answer_6[$i] = $request->input("8answer6_$i"); //１個目の答え
          $answer_7[$i] = $request->input("8answer7_$i"); //１個目の答え
          $answer_8[$i] = $request->input("8answer8_$i"); //１個目の答え

          // dump($text8[$i]);
          if (!empty($text1[$i])) {
            // dump($text1[$i]);
            // DB::table('write_tests')->insert([
            //   'test_id' => "$testno",
            //   'question' => "$text1[$i]",
            //   'answer' => "answer", //あとでチェック判定して入れる
            //   'question_number' => "$question_number[$i]",
            //   'created_at' => Carbon::now(), //時間が違う、場所の設定が違うのかも
            //   'updated_at' => Carbon::now(),  //時間が違う、場所の設定が違うのかも
            //   'role' => '3'  //ロール権限 記述問題
            // ]);
          } elseif ($text2[$i]) {
            // DB::table('hole_tests')->insert([
            //   'test_id' => "$testno",
            //   'question' => "$text2[$i]",
            //   'answer' => "answer", //あとでチェック判定して入れる
            //   'question_number' => "$question_number[$i]",
            //   'created_at' => Carbon::now(), //時間が違う、場所の設定が違うのかも
            //   'updated_at' => Carbon::now(),  //時間が違う、場所の設定が違うのかも
            //   'role' => '2'  //ロール権限 穴埋め問題
            // ]);
          } elseif ($text4[$i]) {
            // DB::table('select_tests')->insert([
            //   'test_id' => "$testno",
            //   'question' => "$text4[$i]",
            //   'answer' => "1", //あとでチェック判定して入れる
            //   'question_number' => "$question_number[$i]",
            //   'created_at' => Carbon::now(), //時間が違う、場所の設定が違うのかも
            //   'updated_at' => Carbon::now(),  //時間が違う、場所の設定が違うのかも
            //   'role' => '1'  //ロール権限 洗濯問題
            // ]);
          } elseif ($text8[$i]) {
            // DB::table('select_tests')->insert([
            //   'test_id' => "$testno",
            //   'question' => "$text8[$i]",
            //   'answer' => "1", //あとでチェック判定して入れる
            //   'question_number' => "$question_number[$i]",
            //   'created_at' => Carbon::now(), //時間が違う、場所の設定が違うのかも
            //   'updated_at' => Carbon::now(),  //時間が違う、場所の設定が違うのかも
            //   'role' => '1'  //ロール権限 洗濯問題
            // ]);
          }

        }

        if ( isset ( $surveyno ) ) {
          return view('testlist'); //テスト作成完了ごの画面に遷移
        }



       return view('testcreate');
    }
}
