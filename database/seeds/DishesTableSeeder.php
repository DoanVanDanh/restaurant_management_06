<?php

use Illuminate\Database\Seeder;

class DishesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   //  bị đảo lộn
        factory(App\Models\Dish::class,10)->create()->each( function($dish) {
        	$faker = Faker\Factory::create();
        	$price_id = App\Models\Price::all()->random()->id;
        	$dish->price()->attach($price_id, [
        	'time' => $faker->date,
        	]);
        });
    }
}
