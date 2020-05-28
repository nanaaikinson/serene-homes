<?php

namespace App\Http\Controllers\Api;

use App\Helpers\FileManager;
use App\Http\Controllers\Controller;
use App\Models\PropertyFile;
use App\Traits\ResponseTrait;
use Exception;
use Illuminate\Http\Request;

class FileController extends Controller
{
	use ResponseTrait;

	public function destroy($id)
	{
		try {
			$file = PropertyFile::find((int) $id);
			if ($file) {
				if ($file->delete()) {
					FileManager::deleteFile($file->filename, ST_PROPERTY_FOLDER);

					return $this->successResponse("File deleted successfully");
				}
			}
			return $this->notFoundResponse();
		} catch (Exception $e) {
			return $this->errorResponse($e->getMessage());
		}
	}

	public function setCover($id)
	{
		try {
			$file = PropertyFile::where("id", (int) $id)->first();
			if ($file) {
				PropertyFile::where("property_id", $file->property_id)->update(["is_cover" => 0]);
				$file->is_cover = 1;
				$file->save();

				return $this->successResponse("Photo cover set successfully");
			}
			return $this->notFoundResponse();
		} catch (Exception $e) {
			return $this->errorResponse($e->getMessage());
		}
	}
}
