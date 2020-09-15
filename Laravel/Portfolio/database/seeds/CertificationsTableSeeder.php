<?php

use Illuminate\Database\Seeder;

class CertificationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
			$faker = Faker\Factory::create();

			for ($i = 0; $i < 10; $i++) {
				DB::table('certifications')->insert([
					'title' => $faker->sentence(6, true),
					'received_date' => $faker->date('Y-m-d', 'now'),
				]);
			}

    }
}
