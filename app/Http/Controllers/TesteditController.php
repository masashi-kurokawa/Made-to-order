<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Test;
use App\Models\Write_test;
use App\Models\Select_test;
use Illuminate\Support\Facades\DB;

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
      dump($sort);

      return view('testedit',
        [
          'count_questions' => $count_questions,
          'test' => $test,
          'test_id' => $id,
        ], compact('sort'));
    }
}
