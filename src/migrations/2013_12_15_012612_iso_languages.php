<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class IsoLanguages extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('iso_languages', function(Blueprint $table) {

			$table->increments('id');

			$table->string('iso_639_1', 2)->nullable();
			$table->string('iso_639_3', 3)->nullable();
			$table->string('english', 40)->nullable();
			$table->string('native', 50)->nullable();
			$table->smallInteger('status', 1)->default(0);

			$table->softDeletes();
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('iso_languages');
	}

}