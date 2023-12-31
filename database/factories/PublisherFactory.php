<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\publisher>
 */
class PublisherFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->company,
            'email_address' => $this->faker->unique()->companyEmail,
            'phone_number' => $this->faker->tollFreePhoneNumber,
            'is_active' => $this->faker->boolean(80),
        ];
    }
}
