<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\BookCopy>
 */
class BookCopyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'isbn' => $this->faker->isbn13(),
            'barcode' => $this->faker->ean13(),
            'year_published' => $this->faker->date(),
            'edition' => $this->faker->randomElement([1, 2, 3, 4, 5]),
            'book_id' => $this->faker->numberBetween(1, 25),
            'publisher_id' => $this->faker->numberBetween(1, 7),
            'is_active' => $this->faker->boolean(80),
        ];
    }
}
