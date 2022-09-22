<?php

use App\User;
use Illuminate\Database\Seeder;

use Faker\Generator as Faker;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        //
        $admin = new User();
        $admin->name = 'admin';
        $admin->email = 'admin@me.it';
        $admin->password = Hash::make('adminadmin');
        $admin->save();

        for ($i=0; $i < 10; $i++) {
            # code...
            $newUser = new User();
            $newUser->name = $faker->userName();
            $newUser->email = $faker->email();
            $newUser->password = Hash::make($faker->userName());
            $newUser->save();
        }
    }
}
