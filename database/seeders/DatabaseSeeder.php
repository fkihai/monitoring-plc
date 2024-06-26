<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Wartsila;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        Wartsila::factory(1)->create();
    }
}
