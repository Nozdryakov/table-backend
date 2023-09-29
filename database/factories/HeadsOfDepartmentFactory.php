<?php

namespace Database\Factories;

use App\Models\HeadsOfDepartment;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class HeadsOfDepartmentFactory extends Factory
{
    protected $model = HeadsOfDepartment::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    public function definition(): array
    {
        return [
        'surname' => $this->faker->name,
        'name'=> $this->faker->name,
        'f_name' => $this->faker->name,
        'gender' => $this->faker->numberBetween(0,1),
        'date_of_birth' => '2002-11-21',
        'date_of_start' => '2022-09-01',
        ];
    }

}
