<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Town;

class RadioFactory extends Factory
{
    protected $model = \App\Models\Radio::class;

    public function definition()
    {
        return [
            'name' => $this->faker->company . ' Radio',
            'frequency' => $this->faker->randomFloat(1, 87.5, 108.0),
            'town_name' => Town::inRandomOrder()->first()->name,
            'power' => $this->faker->randomFloat(2, 0.01, 5.00),
            'address' => $this->faker->address

        ];
    }
}
