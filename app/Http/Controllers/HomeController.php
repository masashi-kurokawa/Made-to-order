<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index()
    {
      $a = 'https://slack.com/oauth/authorize?client_id=1327615939521.1327617199249&scope=identify&redirect_uri=http://192.168.33.10/carecon/public/home/';
      dump($a);
      echo "ok";

      return view('home');
    }
}
