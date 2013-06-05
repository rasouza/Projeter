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
		Schema::create('project', function($table) {
			$table->increments('id');
			$table->string('name', 100);
			$table->boolean('status')->default(FALSE);
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
		Schema::dropIfExists('project');
	}

}