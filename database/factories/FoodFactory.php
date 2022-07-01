<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class FoodFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'price' => rand(100000, 9999999),
            'discountPrice' => rand(99999, 100000),
            'image' => 'food_'.rand(1, 10).'.jpg',
            'category_id' => rand(1, 10),
            'description' => $this->faker->paragraph() . '.' . $this->faker->paragraph() . '.' . $this->faker->paragraph(),
        ];
    }
}
