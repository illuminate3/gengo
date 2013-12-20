<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class IsoLanguageTranslates extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('iso_language_translates', function(Blueprint $table) {

			$table->increments('id');

			$table->string('bg', 50)->nullable();
			$table->string('cs', 50)->nullable();
			$table->string('da', 50)->nullable();
			$table->string('de', 50)->nullable();
			$table->string('el', 50)->nullable();
			$table->string('en', 50)->nullable();
			$table->string('es', 50)->nullable();
			$table->string('et', 50)->nullable();
			$table->string('fi', 50)->nullable();
			$table->string('fr', 50)->nullable();
			$table->string('hr', 50)->nullable();
			$table->string('hu', 50)->nullable();
			$table->string('is', 50)->nullable();
			$table->string('it', 50)->nullable();
			$table->string('ja', 50)->nullable();
			$table->string('lt', 50)->nullable();
			$table->string('lv', 50)->nullable();
			$table->string('mt', 50)->nullable();
			$table->string('nl', 50)->nullable();
			$table->string('no', 50)->nullable();
			$table->string('pl', 50)->nullable();
			$table->string('pt', 50)->nullable();
			$table->string('ro', 50)->nullable();
			$table->string('sk', 50)->nullable();
			$table->string('sl', 50)->nullable();
			$table->string('sv', 50)->nullable();
			$table->string('tr', 50)->nullable();

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
		Schema::drop('iso_language_translates');
	}

}