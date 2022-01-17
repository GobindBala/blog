<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $faker = \Faker\Factory::create();
        User::create([
            'name' => $faker->name(),
            'email' => $faker->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => '$2y$10$fIB219qblZNa/I9dMBmDhO7yT8rHY.wA3pacF/dvdjdLDurM/6d/G', // password=12345678
            'remember_token' => Str::random(10),
        ]);
    }
}
