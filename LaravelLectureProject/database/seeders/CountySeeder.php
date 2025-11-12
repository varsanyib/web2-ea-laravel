<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Region;

class CountySeeder extends Seeder
{
    public function run()
    {
        \App\Models\County::factory(10)->create();
    }
}