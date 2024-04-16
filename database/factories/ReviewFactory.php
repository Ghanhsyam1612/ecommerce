<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Review>
 */
class ReviewFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'comment' => $this->faker->paragraph,
            'star' => $this->faker->numberBetween(1, 5),
            'user_id' => function ()
            {
                return User::inRandomOrder()->first()->id;
            },

            'product_id' => function ()
            {
                return Product::inRandomOrder()->first()->id;
            }
        ];
    }
}
