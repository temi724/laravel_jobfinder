<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\job;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\job>
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
            'title' => $this->faker->jobTitle(),
            'description' => $this->faker->paragraph(4),
            'company' => $this->faker->company(),
            'location' => $this->faker->city(),
            'salary' => $this->faker->numberBetween(100000, 2000000), // NGN salary range
            'experience' => $this->faker->randomElement(job::$experience),
            'category' => $this->faker->randomElement(job::$categories),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
