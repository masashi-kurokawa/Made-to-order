<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Test;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    //
    public function index()
    {

       //POSTされてきた情報

       //どのテストか？


       //DBから情報持ってくる
       $test = new Test;
       //表示したいテストID持ってくる
       $testnumber = $test->where('id',1)->value('id'); //('id',1)の中の１は変数になる
       $items = DB::table('select_tests','hole_tests','write_tests',)
       // $items = DB::table('hole_tests','write_tests',)
       ->whereTest_id("$testnumber")->get();

       //ここからテスト表示処理



       // $dblist = $query->get();
       dump($items);

       // return view('test');
       return view('test',compact('items'));
       // return view('test',compact('', '', '', ''));
    }
}
