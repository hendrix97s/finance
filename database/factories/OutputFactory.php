<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

class OutputFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id'     => User::factory(),
            'type'        => Arr::random(['fixed','variable']),
            'description' => 'Descriptions for tests',
            'value'       => $this->faker->randomFloat(8,50,5000),
            'output_at'    => $this->faker->date(),
        ];
    }
}
