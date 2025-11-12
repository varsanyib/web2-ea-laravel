<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CountyFactory extends Factory
{
    protected $model = \App\Models\County::class;

    public function definition()
    {
        $regions = [
            'Észak-Magyarország',
            'Észak-Alföld',
            'Dél-Alföld',
            'Dél-Dunántúl',
            'Közép-Magyarország',
            'Közép-Dunántúl',
            'Nyugat-Dunántúl'
        ];

        $counties = [
            'Borsod-Abaúj-Zemplén',
            'Heves',
            'Nógrád',
            'Hajdú-Bihar',
            'Szabolcs-Szatmár-Bereg',
            'Békés',
            'Csongrád',
            'Baranya',
            'Tolna',
            'Somogy',
            'Vas',
            'Zala',
            'Győr-Moson-Sopron',
            'Komárom-Esztergom',
            'Fejér',
            'Pest',
            'Budapest'
        ];

        return [
            'name' => $this->faker->unique()->randomElement($counties),
            'region' => $this->faker->randomElement($regions)
        ];
    }
}
