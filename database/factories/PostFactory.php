<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
          $faker = \Faker\Factory::create();
        return [
            "title" => $faker->sentence(),
            "user_id" => $faker->numberBetween(1, 5),
            "category_id" => $faker->numberBetween(1, 20),
            "image" => $faker->image(),
            "descriptions" => $faker->paragraph($nbSentences = 9, $variableNbSentences = true),
            "status" => $faker->numberBetween(0, 1),
        ];
    }
}
