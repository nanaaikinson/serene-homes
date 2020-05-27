<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Traits\ResponseTrait;
use Exception;
use Firebase\JWT\JWT;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
	use ResponseTrait;

	public function login(Request $request)
	{
		try {
			$validator = Validator::make($request->all(), ["email" => "required|email", "password" => "required"]);
			if ($validator->fails()) {
				$errors = $validator->errors()->all();
				return $this->validationResponse($errors);
			}
			$user = User::where("email", (string) $request->email)->first();
			if ($user) {
				if (Hash::check($request->password, $user->password)) {
					$payload = [
						"email" => $user->email,
						"iss" => url("/"),
						"exp" => time() + (60 * 60 * 8),
						"iat" => time()
					];
					$token = JWT::encode($payload, config('app.key'));
					$response = ["user" => $user->full_name, "avatar" => $user->avatar, "token" => $token];

					return $this->successResponse("", $response);
				}
				return $this->errorResponse("Incorrect credentials provided");
			}
			return $this->errorResponse("Incorrect credentials provided");
		} catch (Exception $e) {
		}
	}
}
