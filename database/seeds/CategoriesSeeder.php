<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesSeeder extends Seeder
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
          'name' => $faker->words(3, true),
        ];
      }

        DB::table('categories')->insert($data);
    }
}
