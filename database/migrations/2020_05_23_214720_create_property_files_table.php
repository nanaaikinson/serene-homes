<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertyFilesTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('property_files', function (Blueprint $table) {
			$table->id();
			// $table->foreignId('property_id')->constrained('properties_table')->onDelete('cascade');
			$table->unsignedBigInteger('property_id')->nullable();
			$table->text('description')->nullable();
			$table->string('file_url')->nullable();
			$table->string('filename')->nullable();
			$table->boolean('is_cover')->default(0)->nullable();
			$table->unsignedBigInteger('mask')->nullable()->unique();
			$table->tinyInteger('type')->default(1)->nullable();
			$table->tinyInteger('category')->default(1)->nullable();
			$table->timestamps();

			$table->foreign('property_id')->references('id')->on('properties')->onDelete('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('property_files');
	}
}
