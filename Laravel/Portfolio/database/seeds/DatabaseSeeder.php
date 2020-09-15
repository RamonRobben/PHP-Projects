<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
			$this->call(ExperienceTableSeeder::class);
			$this->call(CertificationsTableSeeder::class);
			$this->call(UserTableSeeder::class);
    }
}