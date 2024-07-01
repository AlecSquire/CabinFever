<?php

namespace Database\Factories;

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
            //foreign key
        
        'userName' => fake()->name(),
        'title' => fake()->sentence(),
        'body' => fake()->paragraph(),
        'rating' => fake()->numberBetween(1,5)

        ];
    }
}
