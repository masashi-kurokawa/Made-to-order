<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Test;
use App\Models\Write_test;
use App\Models\Select_test;
use App\Models\Hole_test;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class TesteditController extends Controller
{
    public function edit($id, Request $request)
    {

      if ($request) {
          dump($request);
      }

      $test = Test::find($id);
      $selectitems = DB::table('select_tests')->whereTest_id("$id")->get()->toArray();
      $writeitems = DB::table('write_tests')->whereTest_id("$id")->get()->toArray();
      $holeitems = DB::table('hole_tests')->whereTest_id("$id")->get()->toArray();

      $sum = array_merge($selectitems, $writeitems, $holeitems);

      $count_questions = count($sum);

      $sort = collect($sum);

      $sort = $sort->sortBy('question_number')->all();
      dump($test);

      return view('testedit',
        [
          'count_questions' => $count_questions,
          'test' => $test,
          'test_id' => $id,
        ], compact('sort', 'count_questions'));

    }

    public function editRegister($id, Request $request)
    {
        // $test = new Test;
        // $write_test = new Write_test;
        // $select_test = new Select_test;
        // $hole_test = new Hole_test;


        $posttest = $request->all();
        dump($posttest);

        //
        // // 削除処理
        // $write_test->where('test_id', $id)->delete();
        // $select_test->where('test_id', $id)->delete();
        // $hole_test->where('test_id', $id)->delete();
        //
        // // テストテーブルの変更
        // $test_data = $test->where('id', $id)->get();
        // $test_data->title = $request->title;
        // $test_data->status = $request->status;
        // $test_data->updated_at = Carbon::now();
        // $test_data->save();
        //
        // foreach ($request->request as $key) {
        //     // $requestの'_token'以外を使う
        //     if ($key != '_token') {
        //
        //         if ('role == 1') {
        //             $write_test->test_id = $id;
        //             $write_test->question = $key->question;
        //             $write_test->question_number = $key->question_number;
        //             $write_test->save();
        //             // view側でroleの値も取得できるようにする
        //         }elseif ('role == 1') {
        //             $write_test->test_id = $id;
        //             $write_test->question = $key->question;
        //             $write_test->question_number = $key->question_number;
        //             $write_test->save();
        //
        //         }elseif ('role == 2') {
        //             $select_test->test_id = $id;
        //             $select_test->question = $key->question;
        //             $select_test->answer = $key->answer;
        //             $select_test->select_item1 = $key->Choice1;
        //             $select_test->select_item2 = $key->Choice2;
        //             $select_test->select_item3 = $key->Choice3;
        //             $select_test->select_item4 = $key->Choice4;
        //             // 8択問題だった時に追加する処理
        //             if (array_key_exists( 'Choice5', $key )) {
        //                 $select_test->select_item5 = $key->Choice5;
        //                 $select_test->select_item6 = $key->Choice6;
        //                 $select_test->select_item7 = $key->Choice7;
        //                 $select_test->select_item8 = $key->Choice8;
        //             }
        //             $select_test->question_number = $key->question_number;
        //             $select_test->save();
        //
        //         }elseif ('role == 3') {
        //             $hole_test->test_id = $id;
        //             $hole_test->question = $key->question;
        //             $hole_test->answer1 = $key->answer1;
        //             $hole_test->answer2 = $key->answer2;
        //             $hole_test->question_number = $key->question_number;
        //             $hole_test->save();
        //         }
        //     }
        // }

        // return view('testedit',
        //   // [
        //   //   // 'count_questions' => $count_questions,
        //   //   // 'test' => $test,
        //   //   // 'test_id' => $id,
        //   // ], compact('sort', 'count_questions')
        // );

    }
}
