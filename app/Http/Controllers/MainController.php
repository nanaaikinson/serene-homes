<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Property;
use App\Models\PropertyFile;
use Illuminate\Http\Request;

class MainController extends Controller
{
	public function index()
	{
		$properties = Property::latest()->take(6)->get();
		foreach ($properties as $k => $property) {
			$coverPhoto = PropertyFile::where("property_id", (int) $property->id)->where("is_cover", 1)->first();
			$properties[$k]->photo = $coverPhoto->file_url;
		}

		return view("pages.index", compact("properties"));
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
