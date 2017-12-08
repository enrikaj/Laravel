<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create('lt_LT');

          $data = [];

          for($i =0; $i < 10; $i++) {
          $data[] = [
            'name' => $faker->name,
            'email' => $faker->email,
            'password' => Hash::make('labas')
            ];
            }

    DB::table('users')->insert($data);
    }

}
