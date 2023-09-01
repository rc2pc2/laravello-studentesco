<?php

namespace Database\Seeders;

use App\Models\StudentDetail;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;


class StudentDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        //
        $users = User::all();

        foreach ($users as $user) {
            $studentDetail = new StudentDetail();
            $studentDetail->user_id = $user->id;
            $studentDetail->class = 'Classe #' . $faker->numberBetween(1, 102);
            $studentDetail->birth_date= $faker->date();
            $studentDetail->average_vote = $faker->randomFloat(2, 0, 3);
            $studentDetail->save();
        }
    }
}
