<?php

namespace Database\Seeders;

use App\Models\Cargo;
use App\Models\Engine;
use App\Models\Storage;
use App\Models\Wartsila;
use App\Models\Certificate;
use Illuminate\Database\Seeder;

class WartsilaSeeder extends Seeder
{

    public function run(): void
    {
        Wartsila::factory(1)->create();
        Certificate::factory(1)->create();
        Cargo::factory(1)->create();
        Engine::factory(1)->create();
        Storage::factory()->withDifferentEnums()->count(4)->create();
    }
}
