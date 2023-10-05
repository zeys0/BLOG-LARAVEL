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
            'category_id' => mt_rand(1, 3),
            'user_id' => mt_rand(1, 3),
            'title' => $this->faker->sentence(3, 10),
            'slug' => $this->faker->slug(3),
            'excerpt' => $this->faker->paragraph(5, 10),
            'body' => $this->faker->paragraph(10, 20)

            //
        ];
    }
}
