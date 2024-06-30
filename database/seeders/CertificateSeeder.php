<?php

namespace Database\Seeders;

use Database\Factories\CertificateFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CertificateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CertificateFactory::factory(1)->create();
    }
}
