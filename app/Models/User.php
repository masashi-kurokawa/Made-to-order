<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Illuminate\Http\Request;

class User extends Model
{
    public function registerUser(Request $request)
    {
        $user = new User();
        $user->slack_name = $request->slack_name;
        $user->slack_id = $request->slack_id;
        $user->slack_mail = $request->slack_mail;
        $user->role = $request->role;
        $user->save();
    }
}
