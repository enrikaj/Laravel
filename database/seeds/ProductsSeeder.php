<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsSeeder extends Seeder
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
          'price' => $faker->randomFloat(2, 10, 1000)
        ];
      }

        DB::table('products')->insert($data);
    }
}
