<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Brand;

class BrandsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $brands = ['renault','citroen','ford','maserati','hummer'];

        for($i= 0; $i < 5; $i++){
            $brand = new Brand();
            $brand->name = $brands[$i];
            $brand->save();
        }
    }
}
