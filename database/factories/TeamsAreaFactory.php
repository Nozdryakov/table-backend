<?php

namespace Database\Factories;

use App\Models\TeamsArea;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */

class TeamsAreaFactory extends Factory
{
    protected $model = TeamsArea::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */


     public function definition(): array
        {
            return  [
                'area_id' => fake()->numberBetween(1,100),
                'team_id' => fake()->unique()->numberBetween(1,4500)
            ];
        }


}





