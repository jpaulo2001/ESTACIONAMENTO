<?php

namespace Database\Factories;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id' => fake()->numberBetween(1,20),
            'customer_id' => fake()->numberBetween(1, 50),
            'name' => fake()->name,
            'description' => fake()->paragraph(),
            'estimate' => fake()->boolean(50) ? fake()->numberBetween(1, 400) : null,
            'deadline' => fake()->boolean(50) ? fake()->dateTime(Carbon::now()->addYear()->toDateString()) : null,
        ];
    }
}
