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

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Keywords::class, function (Faker $faker) {

    return [
        'keyword' => $faker->name,
        'show' => $faker->numberBetween(1, 10000),
        'hit' => $faker->numberBetween(1, 10000),
        'dtrade' => $faker->numberBetween(1, 10000),
        'indtrade' => $faker->numberBetween(1, 10000),
        'dcomplete' => $faker->numberBetween(1, 10000),
        'collet' => $faker->numberBetween(1, 10000),
        'shopcollet' => $faker->numberBetween(1, 10000),
        'totalcomplete' => $faker->numberBetween(1, 10000),
        'totalamount' => $faker->numberBetween(1, 10000),
        'ahc' => $faker->randomFloat(2, 1, 10),
        'ior' => $faker->randomFloat(2, 1, 10),
        'ccr' => $faker->randomFloat(2, 1, 10)
    ];
});
