<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends Factory
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
            "user_id" => 1,
            "image" => $faker->image($dir = null, $width = 640, $height = 480, $category = null, $fullPath = true, $randomize = true, $word = null, $gray = false),
            "status" => $faker->numberBetween(0, 1),
        ];
    }
}
