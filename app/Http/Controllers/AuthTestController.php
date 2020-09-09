<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthTestController extends Controller
{
    public function index(Request $request)
    {

      echo "ok";

      if (isset($request)) {
          dump($request);
      }

      // $credentials = $request->only('slack_name', 'slack_mail');
      //
      //   if (Auth::attempt($credentials)) {
      //       // 認証に成功した
      //       echo "ok";
      //   } else {
      //     echo "no";
      //     dump(Auth::check());
      //   }

      return view('authtest');
    }

    // public function login(Request $request)
    // {
    //
    //   return  redirect()->route('authtest');
    //
    // }
}
