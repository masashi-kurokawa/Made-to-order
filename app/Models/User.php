<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    // ユーザー情報登録
    public function registerUser($slack_name, $slack_id, $slack_mail, $slack_image)
    {
        $user = new User();
        $user->slack_name = $slack_name;
        $user->slack_id = $slack_id;
        $user->slack_mail = $slack_mail;
        $user->slack_image = $slack_image;
        $user->save();
    }
}
