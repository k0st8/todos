<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TodoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected status = ['Todo', 'Done']
    public function definition()
    {
        return [
            //
            // 'id'=>$faker->number(),
            'title' => $faker->title,
            'status' => $faker->number({
                min:0,
                max:1
            }),
            'user_id'=>$faker->number(199),
            'viewed'=>$faker->number(),
            'description'=>$faker->text($maxNbChars=100)
        ];
    }
}
