<?php
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

use App\User;

class UserTableSeeder extends Seeder
{
    public function run()
    {

        Eloquent::unguard();

        DB::table('users')->delete();

        $faker = Faker\Factory::create();


        for($i = 0; $i < 2; $i++){
            User::create(array(
                'username' => $faker->userName,
                'password' => Hash::make($faker->name . $faker->year),
            ));
        }

        User::create(array(
            'username' => 'foo',
            'password' => Hash::make('password'),

        ));

    }
}