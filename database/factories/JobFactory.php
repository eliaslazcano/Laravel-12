<?php

namespace Database\Factories;

use App\Models\Job;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Job>
 */
class JobFactory extends Factory
{
  /**
   * Define the model's default state.
   * @return array<string, mixed>
   */
  public function definition(): array
  {
    # Para criar 100 registros fake abra o tinker:
    # php artisan tinker
    # App\Models\Job::factory(100)->create()
    return [
      'title' => fake()->jobTitle(),
      'salary' => '$' . number_format(fake()->numberBetween(1500, 1000000)) . ' USD'
    ];
  }
}
