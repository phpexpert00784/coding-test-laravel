<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class OrderFactory extends Factory
{

    protected $model = \App\Models\Order::class;

    public function definition()
    {
        return [
            "user_id" => \App\Models\User::factory(),
            "order_no" => $this->faker->unique()->numerify('SINGH#####'),
        ];
    }

}
