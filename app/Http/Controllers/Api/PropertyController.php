<?php

namespace App\Http\Controllers\Api;

use App\Helpers\FileManager;
use App\Http\Controllers\Controller;
use App\Http\Resources\PropertyCollection;
use App\Http\Resources\PropertyTypeCollection;
use App\Models\Property;
use App\Models\PropertyFeature;
use App\Models\PropertyFile;
use App\Models\PropertyType;
use App\Traits\ResponseTrait;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class PropertyController extends Controller
{
	use ResponseTrait;

	public function index(Request $request)
	{
		try {
			$properties = Property::all();
			return $this->successResponse("", new PropertyCollection($properties));
		} catch (Exception $e) {
		}
	}

	public function store(Request $request)
	{
		try {

			$rules = [
				"title" => "required",
				"location" => "required",
				"property_type" => "required|integer|not_in:0",
				"contract_type" => "required",
				"bedrooms" => "required|min:1",
				"bathrooms" => "required|min:1",
				"overview" => "required",
				"photos.*" => "required|mimes:jpg,jpeg,png|max:2048"
			];
			$validator = Validator::make($request->all(), $rules);
			if ($validator->fails()) {
				$errors = $validator->errors()->all();
				return $this->validationResponse($errors);
			}

			// Process Data
			DB::beginTransaction();

			$mask = generate_mask();

			// Save property
			$property = Property::create([
				"title" => $request->title,
				"property_type_id" => $request->property_type,
				"description" => $request->overview,
				"location" => $request->location,
				"contract_type" => get_contract_type($request->contract_type),
				"bathroom" => $request->bathrooms,
				"bedroom" => $request->bedrooms,
				"garage" => $request->garages,
				"living_area" => $request->living_rooms,
				"self_contained" => $request->self_contained ? 1 : 0,
				"furnished" => $request->furnished ? 1 : 0,
				"private_compound" => $request->private_compound ? 1 : 0,
				"slug" => Str::slug($request->title, "-") . "-" . $mask,
				"mask" => $mask,
				// "created_at" => Carbon::now()->format("Y-m-d H:i:s"),
				// "updated_at" => Carbon::now()->format("Y-m-d H:i:s"),
			]);

			$property = (object) $property;

			// Save property features
			PropertyFeature::create([
				"property_id" => $property->id,
				"air_conditioning" => $request->air_conditioning ? 1 : 0,
				"cooker" => $request->cooker ? 1 : 0,
				"washing_machine" => $request->washing_machine ? 1 : 0,
				"fans" => $request->fans ? 1 : 0,
				"refrigerator" => $request->refrigerator ? 1 : 0,
				"microwave" => $request->microwave ? 1 : 0,
				"internet_access" => $request->internet_access ? 1 : 0,
				"satellite_tv" => $request->satellite_tv ? 1 : 0,
				"garden" => $request->garden ? 1 : 0,
				"annex" => $request->annex ? 1 : 0,
				"roof_terrace" => $request->roof_terrace ? 1 : 0,
				"swimming_pool" => $request->swimming_pool ? 1 : 0,
				"security_service" => $request->security_service ? 1 : 0,
				"generator" => $request->generator ? 1 : 0,
				"water_reservoir" => $request->water_reservoir ? 1 : 0,
				// "created_at" => Carbon::now()->format("Y-m-d H:i:s"),
				// "updated_at" => Carbon::now()->format("Y-m-d H:i:s"),
			]);

			// Upload images
			$photosCount = count($request->file("photos"));
			$photosArr = ($request->file("photos"));
			$uploadedArr = [];

			for ($i = 0; $i < $photosCount; $i++) {
				$uploaded = FileManager::uploadFile($photosArr[$i], generate_mask(), ST_PROPERTY_FOLDER);

				if ($uploaded) {
					$file = PropertyFile::create([
						"property_id" => $property->id,
						"file_url" => $uploaded->path,
						"filename" => $uploaded->filename,
						"is_cover" => $i == $request->cover_index ? 1 : 0,
						"mask" => generate_mask(),
						// "created_at" => Carbon::now()->format("Y-m-d H:i:s"),
						// "updated_at" => Carbon::now()->format("Y-m-d H:i:s"),
					]);

					$uploadedArr[] = [
						"file_id" => $file->id,
						"file_url" => $file->file_url
					];
				}
			}

			if (count($uploadedArr)) {
				DB::commit();

				return $this->successResponse("Property created successfully");
			}

			DB::rollBack();
			return $this->errorResponse("An error occurred while creating this record");
		} catch (Exception $e) {
			DB::rollBack();
			return $this->errorResponse($e->getMessage());
		}
	}

	public function propertyTypes()
	{
		try {
			$property_types = PropertyType::all();
			return $this->successResponse("", new PropertyTypeCollection($property_types));
		} catch (Exception $e) {
			return $this->errorResponse($e->getMessage());
		}
	}
}
