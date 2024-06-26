<?php

namespace Database\Factories;
use Carbon\Carbon;
use App\Models\Storage;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\Sequence;


class StorageFactory extends Factory
{
    protected $model = Storage::class;

    public function definition()
    {
        return [
            '_dbTime' => Carbon::now('Asia/Jakarta'),
            '_terminalTime' => Carbon::now('Asia/Jakarta'),
            '_groupName' => $this->faker->word(),
            'tank' => $this->faker->randomElement(['one', 'two', 'three', 'four']),
            'heightOfCPO' => $this->faker->numberBetween(30,7000),
            'tStorageWhen0M' => $this->faker->randomFloat(2, 0,30),
            'tStorageWhen1M' => $this->faker->randomFloat(2, 0,30),
            'tStorageWhen2M' => $this->faker->randomFloat(2, 0,30),
            'tStorageWhen3M' => $this->faker->randomFloat(2, 0,30),
            'tStorageWhen4M' => $this->faker->randomFloat(2, 0,30),
            'tStorageWhen5M' => $this->faker->randomFloat(2, 0,30),
            'tStorageWhen6M' => $this->faker->randomFloat(2, 0,30),
            'tStorageWhen7M' => $this->faker->randomFloat(2, 0,30),
            'factorKoreksi' => $this->faker->randomFloat(2, 0,30),
            'density' => $this->faker->randomFloat(4, 0, 1),
            'EstimasiStok' => $this->faker->randomNumber(6),
        ];
    }

    public function withDifferentEnums()
    {
        return $this->state(new Sequence(
            ['tank' => 'one'],
            ['tank' => 'two'],
            ['tank' => 'three'],
            ['tank' => 'four'],
        ));
    }
}
