<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\Models\User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = 'secret',
        'remember_token' => str_random(10),
        'phone' => random_int(090000,099999),
        'address' => $faker->address,
        'rule' => rand(0,1),
        'salary' => $faker->numberBetween(3,5) * 10000,
    ];
});

$factory->define(App\Models\Restaurant::class, function(Faker $faker) {
    return [
        'name' => $faker->name,
        'address' => $faker->address,
        'phone' => random_int(090000000,099999999),
        'images' => $faker->image($dir = '/tmp', $width = 640, $height = 480),
        'decription' => $faker->paragraph(1),        
    ];
});

$factory->define(App\Models\Table::class, function(Faker $faker) {
    return [
        // 0 is normal . 1 is vip
        'name' => $faker->numberBetween(0,1),
        'percent' => random_int(50, 1000)*1000,
        'decription' => $faker->paragraph(1),
    ];
});

$factory->define(App\Models\Price::class, function(Faker $faker) {
    return [
        'price' => random_int(20,450)*1000,
    ];
});

$factory->define(App\Models\Category::class, function(Faker $faker) {
    return [
        'name' =>implode(' ', $faker->words(2)),
        'parent_id' => 0,
    ];
});

$factory->define(App\Models\Schedule::class, function(Faker $faker) {
    return [
        'user_id' =>App\Models\User::all()->random()->id,
        'schedules' => $faker->date,
        // ca 1: sang , 2:chieu , 3:toi
        'time' => random_int(1, 3),
        'status' => (boolean)rand(0,1),
        'reason' => implode(' ', $faker->words(2)),
    ];
});

$factory->define(App\Models\Dish::class, function(Faker $faker) {

    return [
        'category_id' =>App\Models\Category::where('parent_id', '<>', 0)->get()->random()->id,
        'name' => implode(' ', $faker->words(2)),
        'images' => implode('', $faker->words(5)),
        'decription' => $faker->paragraph(1),
    ];
});

$factory->define(App\Models\Menu::class, function(Faker $faker) {
    return [
        'user_id' =>App\Models\User::all()->random()->id,
        'dish_id' =>App\Models\Dish::all()->random()->id,
        'table_id' =>App\Models\Table::all()->random()->id,
        'quanlity' => random_int(1, 9),
    ];
});

$factory->define(App\Models\Comment::class, function(Faker $faker) {
    return [
        'user_id' =>App\Models\User::all()->random()->id,
        // 1 is restaurant , 2 is dish
        'commentable_id' =>random_int(1, 2),
        // mỗi id có 1 id riêng => sử lí sau, bây giờ random để có dữ liệu
        'commentable_type' =>random_int(1, 20),
        'content' => $faker->paragraph(1),
    ];
});
