<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthTestController extends Controller
{
    public function index(Request $request)
    {

      echo "ok";

      if (isset($request)) {
          dump($request);
      }

      return view('authtest');
    }

    public function login(Request $request)
    {

      return  redirect()->route('authtest');

    }
}
