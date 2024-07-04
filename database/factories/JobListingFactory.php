<?php

namespace Database\Factories;

use App\Models\Employer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\JobListing>
 */
class JobListingFactory extends Factory
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
            'title' => $this->faker->jobTitle(),
            'description' => $this->faker->paragraph(),
            'location' => $this->faker->city(),
            'type' => $this->faker->randomElement(['full-time', 'part-time', 'contract', 'temporary']),
            'salary' => $this->faker->randomElement(['$30,000 - $40,000', '$40,000 - $50,000', '$50,000 - $60,000', '$60,000 - $70,000', '$70,000 - $80,000']),
        ];
    }
}
