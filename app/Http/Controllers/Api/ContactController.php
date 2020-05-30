<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Mail\ContactUsMail;
use App\Traits\ResponseTrait;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
	use ResponseTrait;

	public function contactUs(Request $request)
	{
		try {
			$rules = ["name" => "required", "email" => "required|email", "message" => "required"];
			$validator = Validator::make($request->all(), $rules);
			if ($validator->fails()) {
				return $this->validationResponse($validator->errors()->all());
			}

			$emails = [
				["email" => "serenegatedhomes@gmail.com", "name" => ""],
			];

			Mail::to($emails)
				->send(new ContactUsMail(["name" => $request->name, "email" => $request->email, "message" => $request->message]));


			return $this->successResponse("", ["heading" => "Your message has been sent!", "sub" => "Thank you. We will get back to you as soon as possible"]);
		} catch (Exception $e) {
			return $this->errorResponse($e->getMessage());
		}
	}
}
