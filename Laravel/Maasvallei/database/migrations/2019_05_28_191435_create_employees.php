<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployees extends Migration
{

	public function up()
	{
		Schema::create('employees', function (Blueprint $table) {
			$table->bigIncrements('id');
			$table->string('firstname');
			$table->string('lastname');
			$table->string('email')->unique();
			$table->timestamp('email_verified_at')->nullable();
			$table->string('password');
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::dropIfExists('employees');
	}
}
