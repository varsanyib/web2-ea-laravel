<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Region;
use App\Models\Radio;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        User::updateOrCreate(
            ['email' => 'admin@admin.com'],
            ['name' => 'Admin', 'password' => Hash::make('password'), 'role' => 'admin']
        );

        if (Region::count() === 0) {
            $regions = collect(['North','South','East','West'])->map(fn($n) => Region::create(['name'=>$n]));
            foreach ($regions as $reg) {
                Radio::create(['region_id'=>$reg->id,'name'=>$reg->name.' FM','frequency'=>'101.1']);
                Radio::create(['region_id'=>$reg->id,'name'=>$reg->name.' AM','frequency'=>'720']);
            }
        }
    }
}
