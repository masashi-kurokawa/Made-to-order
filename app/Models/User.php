<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Illuminate\Http\Request;

class User extends Model
{
    // ユーザー情報登録
    public function registerUser($slack_name, $slack_id, $slack_mail)
    {
        $user = new User();
        $user->slack_name = $slack_name;
        $user->slack_id = $slack_id;
        $user->slack_mail = $slack_mail;
        $user->role = 1;
        $user->save();
    }
}
