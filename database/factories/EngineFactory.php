<?php

namespace Database\Factories;
use Carbon\Carbon;
use Faker\Factory as Faker;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Engine>
 */
class EngineFactory extends Factory
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

            'ea1' => $this->faker->randomFloat(2, 0, 70),
            'ea2' => $this->faker->randomFloat(2, 0, 70),
            'ea3' => $this->faker->randomFloat(2, 0, 70),
            'ea4' => $this->faker->randomFloat(2, 0, 70),
            'ea5' => $this->faker->randomFloat(2, 0, 70),
            'ea6' => $this->faker->randomFloat(2, 0, 70),

            'la1' => $this->faker->randomFloat(2, 0, 70),
            'la2' => $this->faker->randomFloat(2, 0, 70),
            'la3' => $this->faker->randomFloat(2, 0, 70),
            'la4' => $this->faker->randomFloat(2, 0, 70),
            'la5' => $this->faker->randomFloat(2, 0, 70),
            'la6' => $this->faker->randomFloat(2, 0, 70),

            'ba1' => $this->faker->randomFloat(2, 0, 70),
            'ba2' => $this->faker->randomFloat(2, 0, 70),
            'ba3' => $this->faker->randomFloat(2, 0, 70),
            'ba4' => $this->faker->randomFloat(2, 0, 70),
            'ba5' => $this->faker->randomFloat(2, 0, 70),
            'ba6' => $this->faker->randomFloat(2, 0, 70),

            'engineSpeed' => $this->faker->randomFloat(2, 0, 70),
            'crankcase' => $this->faker->randomFloat(2, 0, 70),
        ];
    }
}
