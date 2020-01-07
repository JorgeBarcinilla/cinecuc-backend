<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Show;
use Faker\Generator as Faker;

$factory->define(Show::class, function (Faker $faker) {
    return [
        //
        'id_movie' => $faker->randomDigitNotNull,
        'date_start' => $faker->date(),
        'date_end' => $faker->date(),
        'site' => $faker->text($maxNbChars = 20),
        'address' => $faker->text($maxNbChars = 40),
        'capacity' => $faker->numberBetween($min = 1, $max = 30)
    ];
});
