<?php
namespace App\Services;

use App\Models\User;
use Illuminate\Http\Request;

class UserService extends Service
{
		private $userModel;

		public function __construct(User $userModel)
    {
				$this->userModel = $userModel;
    }

    public function registerUser($slack_name, $slack_id, $slack_mail, $slack_image)
    {
        return $this->userModel->registerUser($slack_name, $slack_id, $slack_mail, $slack_image);
    }
}
