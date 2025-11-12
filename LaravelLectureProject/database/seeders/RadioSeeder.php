<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Radio;

class RadioSeeder extends Seeder
{
    public function run()
    {
        Radio::factory(10)->create();
    }
}
