<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class CostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id'     => User::factory()->create()->id,
            'type'        => 'fixed',
            'description' => 'teste',
            'value'       => $this->faker->randomFloat(null,1,10000),
            'costed_at'   => $this->faker->date()
        ];
    }
}
