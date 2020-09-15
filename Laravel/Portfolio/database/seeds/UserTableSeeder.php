<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Date;

class UserTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('users')->insert([
			'name' => 'RamonRobben',
			'email' => 'ramon.robben@live.nl',
			'email_verified_at' => Carbon\Carbon::now(),
			'password' => bcrypt('Kutkind01!'),
			'created_at' => Carbon\Carbon::now(),
			'updated_at' => Carbon\Carbon::now()
		]);
	}
}
