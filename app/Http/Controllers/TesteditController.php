<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Test;
use App\Models\Write_test;
use App\Models\Select_test;
use Illuminate\Support\Facades\DB;

class TesteditController extends Controller
{
    // // 詳細・編集
    // public function edit()
    // {
    //   $test = new test;
    //   $dblist = $test
    //   ->where('id', 2)
    //   ->get();
    //
    //   // view(Testedit.blade.php)へ
    //   return view('testedit', compact('dblist'));
    // }

    public function edit($id)
    {
      $test = Test::find($id);
      $selectitems = DB::table('select_tests')->whereTest_id("$id")->get()->toArray();
      $writeitems = DB::table('write_tests')->whereTest_id("$id")->get()->toArray();

      $sum = array_merge($selectitems, $writeitems);

      $sort = collect($sum);

      $sort = $sort->sortBy('question_number')->all();

      dump($sort);

      // $test = Test::find($id);
      $write_test = Write_test::where('test_id', $id)->get();
      $select_test = Select_test::where('test_id', $id)->get();


      return view('testedit',
        [
          'test' => $test,
          'write_tests' => $write_test,
          'select_tests' => $select_test,
        ], compact('sort'));
    }
}
