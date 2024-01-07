<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pet>
 */
class PetFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'owner_id' => fake()->numberBetween(1, 50) ,
            'specie_id' => fake()->numberBetween(1, 10),
            'name' => fake()->name,
            'race'=> fake()->word,
            'weight' => fake()->randomFloat(2, 1, 100),    
            'brithDate'=>fake()->date(),
            'gender' => fake()->randomElement([0,1]),
        ];
    }
}
