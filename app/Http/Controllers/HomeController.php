<?php
// http://192.168.33.10/carecon/public/home
// http://localhost/home
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\SlackApi;
use App\Services\UserService;
use App\Http\Requests\RegisterUser;
use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{
    protected $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

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

      if (isset($_GET['code'])) {

          $slack_api = new Slackapi;

          $accesstoken = $slack_api->getAcsesstoken($_GET['code']);

          if (isset($accesstoken)) {

              $token = $accesstoken['access_token'];
              $user_id = $accesstoken['user_id'];

              // slackからユーザー情報取得
              $user_info = $slack_api->seachUserInfo($token, $user_id);
              dump($user_info);

              // $img = file_get_contents($user_info['user']['profile']['image_512']);
              // $base64 = base64_encode($img);

              // ユーザー情報登録
              // $slack_id = $user_info['user']['id'];
              // $slack_name = $user_info['user']['real_name'];
              // $slack_mail = $user_info['user']['name'];
              // $slack_image = $user_info['user']['profile']['image_512'];
              // $this->userService->registerUser($slack_name, $slack_id, $slack_mail, $slack_image);
          }

      }

      return view('home', [
            'slack_client_id' => env('SLACK_CLIENT_ID'),
            'slack_client_secret' => env('SLACK_CLIENT_SECRET'),
            // 'base64' => $base64,
        ]);
    }
}
