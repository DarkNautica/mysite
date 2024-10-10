<?php

namespace Database\Factories;

use App\Models\Session;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class SessionFactory extends Factory
{
    protected $model = Session::class;

    public function definition()
    {
        return [
            'user_id' => User::inRandomOrder()->first()->id,
            'is_active' => $this->faker->boolean(80), // 80% chance to be true
            'created_at' => $this->faker->dateTimeThisMonth,
        ];
    }
}
