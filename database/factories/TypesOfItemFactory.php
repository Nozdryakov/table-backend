<?php

namespace Database\Factories;

use App\Models\TypesOfItem;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class TypesOfItemFactory extends Factory
{
    protected $model = TypesOfItem::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    public function definition(): array
    {
        return [
            'title' => 'деталь'. $this->faker->word,
        ];
    }

}
