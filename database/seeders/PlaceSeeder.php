<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Place;
use Faker\Factory as Faker;

class PlaceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for ($i = 0; $i < 100; $i++) {
            Place::create([
                'name' => $faker->unique()->company,
                'description' => $faker->paragraph,
                'address' => $faker->address,
                'city' => $faker->city,
                'image' => $faker->imageUrl(),
                'phone' => $faker->phoneNumber,
                'email' => $faker->unique()->email,
            ]);
        }
    }
}