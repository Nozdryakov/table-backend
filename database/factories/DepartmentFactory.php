<?php

namespace Database\Factories;

use App\Models\Department;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class DepartmentFactory extends Factory
{
    protected $model = Department::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    public function definition(): array
    {
        return [
            'title' => 'Цех'. $this->faker->jobTitle,
            'head_of_dep_id'=> $this->faker->unique()->numberBetween(1,30),

        ];
    }

}
