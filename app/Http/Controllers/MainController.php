<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MainController extends Controller
{
	public function index()
	{
		return view("pages.index");
	}

	public function property()
	{
		return view("pages.property");
	}

	public function admin()
	{
		return view("pages.admin");
	}
}
