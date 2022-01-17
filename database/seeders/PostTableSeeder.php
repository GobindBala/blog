<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;
class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
        Post::create([
            "title" => $faker->title(),
            "user_id" => $faker->numberBetween(1, 3),
            "category_id" => $faker->numberBetween(1, 3),
            "image" => $faker->image(),
            "descriptions" => $faker->paragraph($nbSentences = 9, $variableNbSentences = true),
            "status" => $faker->numberBetween(0, 1),
        ]);
    }
}
