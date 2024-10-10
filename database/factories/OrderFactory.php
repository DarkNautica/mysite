<?php

namespace Database\Factories;

use App\Models\Order;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderFactory extends Factory
{
    protected $model = Order::class;

    public function definition()
    {
        return [
            'user_id' => User::inRandomOrder()->first()->id,
            'total' => $this->faker->randomFloat(2, 20, 200), // Generate a random float between 20 and 200
            'created_at' => $this->faker->dateTimeThisYear,
        ];
    }
}
