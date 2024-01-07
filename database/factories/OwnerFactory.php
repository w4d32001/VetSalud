<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Owner>
 */
class OwnerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "name"=> fake()->name,
            "surName"=>fake()->name,    
            "dni"=>fake()->randomNumber(8),
            "email"=> fake()->unique()->safeEmail,
            "phone"=>fake()->randomNumber(9),
        ];
    }
}
