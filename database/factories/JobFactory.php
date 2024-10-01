<?php

namespace Database\Factories;

use App\Models\Employer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'employer_id' => Employer::factory(),
            'title' => fake()->jobTitle(),
            'salary' => fake()->randomElement(['$50,000 USD', '$40,000 USD', '$35,000 USD']),
            'location' => 'remote',
            'schedule' => fake()->randomElement(['Full time', 'Part Time']),
            'url' => fake()->url,
            'featured' => fake()->randomElement(['True', 'False'])
        ];
    }
}
