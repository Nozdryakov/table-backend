<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\TeamsArea;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */

class ProductFactory extends Factory
{
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    public function definition(): array
    {
        do {
            $numbers1 = range(1, 1500);
            shuffle($numbers1);
            $numbers2 = range(1, 2000);
            shuffle($numbers2);

            $team_area_id = array_pop($numbers1);
            $item_number_id = array_pop($numbers2);

            // Проверяем, существует ли такая комбинация уже в базе данных
            $existingRecord = Product::where('team_area_id', $team_area_id)
                ->where('item_number_id', $item_number_id)
                ->first();
        } while ($existingRecord);

        return  [
            'team_area_id' => $team_area_id,
            'item_number_id' => $item_number_id
        ];
    }

}
