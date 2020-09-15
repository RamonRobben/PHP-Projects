<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Experience extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('experiences', function (Blueprint $table) {
			$table->bigIncrements('id');
			$table->integer('category_id');
			$table->string('title');
			$table->string('position');
			$table->text('description');
			$table->string('location');
			$table->date('start_date');
			$table->date('end_date');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('experiences');
	}
}
