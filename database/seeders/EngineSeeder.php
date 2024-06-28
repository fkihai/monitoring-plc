<?php

namespace Database\Seeders;

use Database\Factories\EngineFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EngineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        EngineFactory::factory(1)->create();
    }
}
