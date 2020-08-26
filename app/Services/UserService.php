<?php
namespace App\Services;

use App\Models\User;
use Illuminate\Http\Request;

class UserService extends Service
{
		private $userModel;

		public function __construct(User $userModel)
    {
				$this->$userModel = $userModel;
    }

    public function registerUser(Request $request)
    {
        return $this->userModel->registerUser($request);
    }
}
