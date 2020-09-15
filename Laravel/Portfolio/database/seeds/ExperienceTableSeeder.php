<?php

use Illuminate\Database\Seeder;

class ExperienceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
			$faker = Faker\Factory::create();

			for ($i = 0; $i < 20; $i++) {
				DB::table('experiences')->insert([
					'category_id' => $faker->biasedNumberBetween(0, 2, 'sqrt'),
					'title' => $faker->sentence(6, true),
					'position' => $faker->word(),
					'description' => $faker->paragraph(3, true),
					'location' => $faker->address(),
					'start_date' => $faker->date('Y-m-d', 'now'),
					'end_date' => $faker->date('Y-m-d', '2022-01-01'),
				]);
			}
    }
}
