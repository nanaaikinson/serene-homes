<?php

namespace App\Http\Controllers;

use App\Models\Property;
use App\Models\PropertyFeature;
use App\Models\PropertyFile;
use Exception;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
	public function show(Request $request, $property)
	{
		try {
			$property = Property::where("slug", (string) $property)->firstOrFail();
			$features = PropertyFeature::where("property_id", $property->id)->first();
			$coverPhoto = PropertyFile::where("property_id", (int) $property->id)->where("is_cover", 1)->first();
			$otherPhotos = PropertyFile::where("property_id", (int) $property->id)->where("is_cover", 0)->get();

			return view("pages.property", compact("property", "features", "coverPhoto", "otherPhotos"));
		} catch (Exception $e) {
			abort(404);
		}
	}
}
