<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Test;
use App\Models\Write_test;
use App\Models\Select_test;

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
        $write_test = Write_test::where('test_id', $id)->get();
        $select_test = Select_test::where('test_id', $id)->get();
        //確認用
        // dump($write_survey);
        // 初期記入方法
        // return view('survey.edit',compact('survey'));
        return view('testedit', [
              'test' => $test,
              'write_tests' => $write_test,
              'select_tests' => $select_test,
            ]);
    }

}
