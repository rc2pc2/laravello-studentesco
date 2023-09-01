<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        $userIds = User::all()->pluck('id');

        for ($i=0; $i < 100 ; $i++) {
            $project = new Project();
            $project->user_id = $faker->randomElement($userIds);
            $project->name = $faker->unique()->realText($faker->numberBetween(10, 20));
            $project->description = $faker->unique()->realText($faker->numberBetween(200, 400));
            $project->save();
        }
    }
}
