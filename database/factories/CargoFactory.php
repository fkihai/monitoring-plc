<?php

namespace Database\Factories;
use Carbon\Carbon;
use Faker\Factory as Faker;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cargo>
 */
class CargoFactory extends Factory
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
            '_groupName' => 'storage',

            'ullageTkP' => $this->faker->randomFloat(2, 0, 15),
            'avgTmpTkP' => $this->faker->randomFloat(2, 0, 40),

            'ullageCot6P' => $this->faker->randomFloat(2, 0, 15),
            'avgTmpCot6P' => $this->faker->randomFloat(2, 0, 40),

            'ullageCot5P' => $this->faker->randomFloat(2, 0, 15),
            'avgTmpCot5P' => $this->faker->randomFloat(2, 0, 40),

            'ullageCot4P' => $this->faker->randomFloat(2, 0, 15),
            'avgTmpCot4P' => $this->faker->randomFloat(2, 0, 40),

            'ullageCot3P' => $this->faker->randomFloat(2, 0, 15),
            'avgTmpCot3P' => $this->faker->randomFloat(2, 0, 40),

            'ullageCot2P' => $this->faker->randomFloat(2, 0, 15),
            'avgTmpCot2P' => $this->faker->randomFloat(2, 0, 40),

            'ullageCot1P' => $this->faker->randomFloat(2, 0, 15),
            'avgTmpCot1P' => $this->faker->randomFloat(2, 0, 40),

            'ullageTkS' => $this->faker->randomFloat(2, 0, 15),
            'avgTmpTkS' => $this->faker->randomFloat(2, 0, 40),

            'ullageCot6S' => $this->faker->randomFloat(2, 0, 15),
            'avgTmpCot6S' => $this->faker->randomFloat(2, 0, 40),

            'ullageCot5S' => $this->faker->randomFloat(2, 0, 15),
            'avgTmpCot5S' => $this->faker->randomFloat(2, 0, 40),

            'ullageCot4S' => $this->faker->randomFloat(2, 0, 15),
            'avgTmpCot4S' => $this->faker->randomFloat(2, 0, 40),

            'ullageCot3S' => $this->faker->randomFloat(2, 0, 15),
            'avgTmpCot3S' => $this->faker->randomFloat(2, 0, 40),

            'ullageCot2S' => $this->faker->randomFloat(2, 0, 15),
            'avgTmpCot2S' => $this->faker->randomFloat(2, 0, 40),

            'ullageCot1S' => $this->faker->randomFloat(2, 0, 15),
            'avgTmpCot1S' => $this->faker->randomFloat(2, 0, 40),
        ];
    }
}
