<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $faker = \Faker\Factory::create();
        Category::create([
            "title" => $faker->title(),
            "user_id" => $faker->numberBetween(1, 3),
            "image" => $faker->image(),
            "status" => $faker->numberBetween(0, 1),
        ]);
    }
}
