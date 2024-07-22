<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Employer;

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
            'employer_id'           => Employer::factory(),
            'title'                 => fake()->jobTitle,
            'min_salary'            => rand(16500, 150000),
            'max_salary'            => rand(2000, 30000),
            'location'              => 'Provide the location',
            'type'                  => fake()->randomElement(['Full Time', 'Part Time']),
            'schedule'              => fake()->randomElement(['','Monday to Friday', '8 hour shift', 'Day Shift', 'Night Shift']),
        ];
    }
}
