<?php

namespace Database\Factories;

use Carbon\Carbon;
use Faker\Factory as Faker;
use Illuminate\Database\Eloquent\Factories\Factory;


class WartsilaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $faker = Faker::create();
        return [
            '_dbTime' => Carbon::now('Asia/Jakarta'),
            '_terminalTime' => Carbon::now('Asia/Jakarta'),
            '_groupName' => 'wartsila',
            'turboRPM' => $faker->numberBetween(100, 2000),
            'airChargePress' => $faker->randomFloat(2, 0.5, 2.5),
            'airChargeTemp' => $faker->randomFloat(2, 20, 60),
            'speedRPM' => $faker->numberBetween(500, 2500),
            'speedRefRPM' => $faker->numberBetween(500, 2500),
            'loadRPM' => $faker->numberBetween(500, 2500),
            'fuelOilPress' => $faker->randomFloat(2, 0.5, 2.5),
            'fuelOilTemp' => $faker->randomFloat(2, 20, 60),
            'ltWaterPress' => $faker->randomFloat(2, 0.5, 2.5),
            'ltWaterTemp' => $faker->randomFloat(2, 20, 60),
            'htWaterPress' => $faker->randomFloat(2, 0.5, 2.5),
            'htWaterTemp' => $faker->randomFloat(2, 20, 60),
            'crankcasePress' => $faker->randomFloat(2, 0.5, 2.5),
            'airStartPress' => $faker->randomFloat(2, 0.5, 2.5),
            'lubeOilPress' => $faker->randomFloat(2, 0.5, 2.5),
            'lubeOilTemp' => $faker->randomFloat(2, 20, 60),
          ];
    }
}


