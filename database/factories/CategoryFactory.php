<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->firstName . ' ' . $this->faker->lastName,
            'description' => $this->faker->sentence(mt_rand(5,12), true),
            'is_active' => $this->faker->boolean(80),
        ];
    }
}
