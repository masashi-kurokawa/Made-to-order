<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Services\SlackApi;
// use App\Services\UserService;
// use App\Http\Requests\RegisterUser;
use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{
    protected $userService;

    // public function __construct(UserService $userService)
    // {
    //     $this->userService = $userService;
    // }

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
