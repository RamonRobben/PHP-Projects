<?php

use Illuminate\Database\Seeder;

class EmployeesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

			$faker = Faker\Factory::create();

			DB::table('employees')->truncate();

			foreach(range(1, 100) as $index) {
				$firstname = $faker->firstName();
				$lastname = $faker->lastName();

				\App\Employee::create([
					'firstname' => $firstname,
					'lastname' => $lastname,
					'email' => $firstname . '.' . $lastname . '@live.nl',
					'password' => bcrypt('secret')
				]);
			}
    }
}
