<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class ItemFactory extends Factory
{
    protected $model = \App\Models\Item::class;

    public function definition()
    {
        return [
            "order_id" => \App\Models\Order::factory(),
            "name" => ucfirst(Str::random(rand(5,5))),
            "price" => $this->faker->numberBetween(100,1000),
        ];
    }
}
