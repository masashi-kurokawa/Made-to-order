<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Test;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class TestshowController extends Controller
{

    public function show($id, Request $request)
    {

      $test = Test::find($id);
      $selectitems = DB::table('select_tests')->whereTest_id("$id")->get()->toArray();
      $writeitems = DB::table('write_tests')->whereTest_id("$id")->get()->toArray();

      $sum = array_merge($selectitems, $writeitems);

      $count_questions = count($sum);

      $sort = collect($sum);
      // $product = collect($sum)->with('answer')->get();
      // $product = collect($sum)->firstWhere('answer', 4);

      $sort = $sort->sortBy('question_number')->all();
      dump($product);


      return view('testshow',
        [
          'count_questions' => $count_questions,
          'test' => $test,
          'test_id' => $id,
        ], compact('sort'));


       return view('testshow');
    }
}
