<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Member>
 */
class MemberFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'membership_number' => $this->faker->firstName,
            'first_name' => $this->faker->firstName,
            'middle_name' => $this->faker->lastName,
            'last_name' => $this->faker->lastName,
            'gender' => $this->faker->randomElement(['Male', 'Female']),
            'birth_date' => $this->faker->date,
            'phone_number' => $this->faker->phoneNumber,
            'email_address' => $this->faker->email,
            'password' => $this->faker->password,
            'is_active' => $this->faker->boolean(80),
        ];
    }
}
