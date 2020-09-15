<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Test;

class TesteditController extends Controller
{
    // 詳細・編集
    public function edit()
    {
      $test = new test;
      $dblist = $test
      ->where('id', 2)
      ->get();

      // view(Testedit.blade.php)へ
      return view('testedit', compact('dblist'));
    }

}
