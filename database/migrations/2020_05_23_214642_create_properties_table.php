<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertiesTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('properties', function (Blueprint $table) {
			$table->id();
			$table->unsignedBigInteger('property_type_id')->nullable();
			$table->string('title')->nullable();
			$table->text('description')->nullable();
			$table->string('location')->nullable();
			$table->tinyInteger('contract_type')->default(1)->nullable();
			$table->tinyInteger('bathroom')->nullable();
			$table->tinyInteger('bedroom')->nullable();
			$table->tinyInteger('garage')->nullable();
			$table->tinyInteger('living_area')->nullable();
			$table->float('floor_area', 8, 2)->nullable();
			$table->boolean('furnished')->default(0)->nullable();
			$table->boolean('self_contained')->default(0)->nullable();
			$table->boolean('private_compound')->default(0)->nullable();
			$table->boolean('status')->default(1)->nullable();
			$table->text('slug')->nullable();
			$table->text('meta_keywords')->nullable();
			$table->text('meta_description')->nullable();
			$table->unsignedBigInteger('mask')->unique()->nullable();
			$table->timestamps();
			$table->softDeletes();

			$table->foreign('property_type_id')->references('id')->on('property_types')->onDelete('set null');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('properties');
	}
}
