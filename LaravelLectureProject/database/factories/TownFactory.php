<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TownFactory extends Factory
{
    protected $model = \App\Models\Town::class;

    public function definition()
    {
        return [
            'name' => $this->faker->city,
            'county_name' => \App\Models\County::inRandomOrder()->first()->name,
        ];
    }
}
