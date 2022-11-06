<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ModelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $factory->define(App\Post::class, function(Faker\Generator $faker) {
            return [
            'title' => $faker->sentence(10),
            'body' => $faker->sentence(50),
            ];
            });
    }
}
