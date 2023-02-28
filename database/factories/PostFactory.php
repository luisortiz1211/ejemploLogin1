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
        return [
            'title' => $this->faker->sentence(5),
            'description' => $this->faker->sentence(10),
            'image' => $this->faker->uuid() . 'jpg',
            'user_id' => $this->faker->randomElement([1, 2, 3])
        ];
    }
}
