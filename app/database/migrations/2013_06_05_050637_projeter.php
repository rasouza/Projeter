<?php

use Illuminate\Database\Migrations\Migration;

class Projeter extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('targets', function($table) {
			$table->increments('id');
			$table->string('name', 100);
			$table->softDeletes();
			$table->timestamps();
		});

		Schema::create('mailings', function($table) {
			$table->integer('target_id');
			$table->string('email', 200);
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('targets');
		Schema::dropIfExists('mailings');
	}

}