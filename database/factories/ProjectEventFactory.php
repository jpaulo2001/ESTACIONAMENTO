<?php

namespace Database\Factories;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ProjectEvent>
 */
class ProjectEventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $startTime = Carbon::parse(fake()->dateTime());
        $endTime = Carbon::parse(
            fake()->dateTimeBetween($startTime, Carbon::parse($startTime)
                ->addHours(8)
            )
        );

        return [
            'user_id' => fake()->numberBetween(1,18),
            'project_id' => fake()->numberBetween(1, 40),
            'start_time' => $startTime->toDateTimeString(),
            'end_time' => $endTime->toDateTimeString(),
            'description' => fake()->paragraph,
            'duration' => $startTime->diffInSeconds($endTime)
        ];
    }
}
