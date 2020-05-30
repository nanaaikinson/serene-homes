<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertyFeaturesTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('property_features', function (Blueprint $table) {
			$table->id();
			// $table->foreignId('property_id')->constrained('properties_table')->onDelete('cascade');
			$table->unsignedBigInteger('property_id')->nullable();
			$table->boolean('air_conditioning')->default(0)->nullable();
			$table->boolean('cooker')->default(0)->nullable();
			$table->boolean('washing_machine')->default(0)->nullable();
			$table->boolean('fans')->default(0)->nullable();
			$table->boolean('refrigerator')->default(0)->nullable();
			$table->boolean('microwave')->default(0)->nullable();
			$table->boolean('internet_access')->default(0)->nullable();
			$table->boolean('satellite_tv')->default(0)->nullable();
			$table->boolean('garden')->default(0)->nullable();
			$table->boolean('annex')->default(0)->nullable();
			$table->boolean('roof_terrace')->default(0)->nullable();
			$table->boolean('swimming_pool')->default(0)->nullable();
			$table->boolean('security_service')->default(0)->nullable();
			$table->boolean('generator')->default(0)->nullable();
			$table->boolean('water_reservoir')->default(0)->nullable();
			$table->timestamps();
			$table->softDeletes();

			//$table->foreign('property_id')->references('id')->on('properties')->onDelete('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('property_features');
	}
}
