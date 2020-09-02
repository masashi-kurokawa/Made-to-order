<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\SlackApi;
use App\Services\UserService;
use App\Http\Requests\RegisterUser;


class HomeController extends Controller
{
    protected $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function index()
    {

      if (isset($_GET['code'])) {

          $slack_api = new Slackapi;

          $accesstoken = $slack_api->getAcsesstoken($_GET['code']);
          dump($accesstoken);

          if (isset($accesstoken)) {

              $token = $accesstoken['access_token'];
              $user_id = $accesstoken['user_id'];

              // slackからユーザー情報取得
              $user_info = $slack_api->seachUserInfo($token, $user_id);
              dump($user_info);

              // ユーザー情報登録
              // $slack_id = $user_info['user']['id'];
              // $slack_name = $user_info['user']['real_name'];
              // $slack_mail = $user_info['user']['name'];
              // $this->userService->registerUser($slack_name, $slack_id, $slack_mail);
          }

      }

      return view('home', [
            'slack_client_id' => env('SLACK_CLIENT_ID'),
            'slack_client_secret' => env('SLACK_CLIENT_SECRET'),
            // 'user_info' => $user_info,
        ]);
    }
}
