<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{

    public function index()
    {

      if (Auth::check()) {
            // 認証に成功した
            dump(Auth::user());
            // Auth::logout();
            echo "ok";
        } else {
          echo "no";
          dump(Auth::check());
          dump(Auth::attempt());
          dump(Auth::user());
        }

      return view('home');
    }
}
