<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Town;

class TownSeeder extends Seeder
{
    public function run()
    {
        Town::factory(5)->create();
    }
}