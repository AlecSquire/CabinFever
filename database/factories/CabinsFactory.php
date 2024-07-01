<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class CabinsFactory extends Factory
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
            
            'title'=>fake()->country(),
            'description'=>fake()->paragraph(),
            'image_path'=>fake()->imageUrl(),
            'price'=>fake()->numberBetween(1,100),
            'rating'=>fake()->numberBetween(2,5),
            'capacity'=> fake()->numberBetween(1,10),
            'number_of_rooms' => fake()->numberBetween(1,5),
            'location' => fake()->country(),
        ];
    }

}
