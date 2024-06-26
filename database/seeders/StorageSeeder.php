<?php

namespace Database\Seeders;

use App\Models\Storage;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class StorageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Storage::factory()->withDifferentEnums()->count(4)->create();
    }
}
