<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertyReviewsTable extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('property_reviews', function (Blueprint $table) {
			$table->id();
			$table->unsignedBigInteger('property_id')->nullable();
			$table->text('comment')->nullable();
			$table->tinyInteger('stars')->default(5)->nullable();
			$table->string('first_name')->nullable();
			$table->string('last_name')->nullable();
			$table->string('email')->nullable();
			$table->timestamps();
			$table->softDeletes();

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
		Schema::dropIfExists('property_reviews');
	}
}
