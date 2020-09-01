<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ScoreController extends Controller
{
    //
    public function index()
    {
       return view('score');
    }
}

//点数早見表用
class SearchController extends Controller
{
    public function index(Request $request){
        $query = User::query();

　　　　　//$request->input()で検索時に入力した項目を取得します。
        $search1 = $request->input('user_id');
        $search2 = $request->input('test_title');
        $search3 = $request->input('score');

         // プルダウンメニューで指定なし以外を選択した場合、$query->whereで選択した棋力と一致するカラムを取得します
        if ($request->has('user_id') && $search1 != ('指定なし')) {
            $query->where('user_id', $search1)->get();
        }

         // プルダウンメニューで指定なし以外を選択した場合、$query->whereで選択した好きな戦法と一致するカラムを取得します
        if ($request->has('test_title') && $search2 != ('指定なし')) {
            $query->where('test_title', $search2)->get();
        }

        // ユーザ名入力フォームで入力した文字列を含むカラムを取得します
        // if ($request->has('name') && $search3 != '') {
        //     $query->where('name', 'like', '%'.$search3.'%')->get();
        // }

　　　　//ユーザを1ページにつき10件ずつ表示させます
        // $data = $query->paginate(10);

        return view('users.search',[
            'data' => $data
        ]);
    }
}
