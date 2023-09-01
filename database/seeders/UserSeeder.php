<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        $gino = new User();
        $gino->name = 'Gino';
        $gino->email = 'g@gmail.com';
        $gino->password = Hash::make('1234');
        $gino->save();

        for ($i=0; $i < 36; $i++) {
            $user = new User();
            $user->name = $faker->name();
            $user->email = $faker->email();
            $user->password = Hash::make($faker->password());
            $user->save();
        }
    }
}
