<?php

namespace Database\Factories;

use App\Models\ItemModel;
use Illuminate\Database\Eloquent\Factories\Factory;

class ItemModelFactory extends Factory
{
    protected $model = ItemModel::class;

    public function definition(): array
    {
        return [
            'group'=>fake()->randomElement(['Classic','Onduvilla','Onduline Tile']),
            'color'=>fake()->randomElement(['Red','Green','Brown','Black','Teracotta']),
            'prodName'=>fake()->text(50),
        ];
    }
}
