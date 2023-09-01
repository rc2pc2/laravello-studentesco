<?php

namespace Database\Seeders;

use App\Models\Technology;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        $technologyNames = [
            'HTML' => 5,
            'CSS' => 3,
            'SCSS' => 1,
            'VUE' => 4.1,
            'JS' => 2015,
            'PHP' => 8.1,
            'LARAVEL' => 10.1,
            'RUST' => 2,
            'PYTHON' => 3.2,
        ];


        foreach ($technologyNames as $technologyName => $technologyVersion) {
            $technology = new Technology();
            $technology->name = $technologyName;
            $technology->color = $faker->hexColor();
            $technology->version = $technologyVersion;
            $technology->save();
        }
    }
}
