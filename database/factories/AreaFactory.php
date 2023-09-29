<?php

namespace Database\Factories;

use App\Models\Area;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class AreaFactory extends Factory
{
    protected $model = Area::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    public function definition(): array
    {
        return [
            'title' => 'участок'. $this->faker->jobTitle,
            'dep_id'=> fake()->numberBetween(1,30),
            'head_of_area_id' => fake()->unique()->numberBetween(1,100),

        ];
    }

}
