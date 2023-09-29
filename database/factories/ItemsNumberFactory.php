<?php

namespace Database\Factories;

use App\Models\ItemsNumber;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */

class ItemsNumberFactory extends Factory
{
    protected $model = ItemsNumber::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */


    public function definition(): array
    {
        $numbers = range(1, 2500);
        shuffle($numbers);
        return  [

            'u_code' => $this->faker->hexColor,
            't_item_id' => array_pop($numbers)
        ];
    }


}





