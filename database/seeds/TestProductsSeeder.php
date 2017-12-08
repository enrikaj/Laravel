<?php

use Illuminate\Database\Seeder;

class TestProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $faker = Faker\Factory::create('lt_LT');

        for($i =0; $i < 10; $i++) {
          $data = [
            'name' => $faker->word,
            'price' => $faker->randomFloat(2, 10, 1000)
          ];

            \App\Product::create($data);
        }

    }
}
