<?php

namespace App\Http\Resources;

use App\Models\PropertyFile;
use Illuminate\Http\Resources\Json\JsonResource;

class Property extends JsonResource
{
	/**
	 * Transform the resource into an array.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return array
	 */
	public function toArray($request)
	{
		$coverPhoto = PropertyFile::where("property_id", $this->id)->where("is_cover", 1)->first();
		return [
			"id" => $this->id,
			"mask" => (int) $this->mask,
			"title" => $this->title,
			"cover_photo" => $coverPhoto ? $coverPhoto->file_url : null,
			"created_at" => date("Y-m-d", strtotime($this->created_at))
		];
	}
}
