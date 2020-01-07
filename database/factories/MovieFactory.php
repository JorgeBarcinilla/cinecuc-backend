<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Movie;
use Faker\Generator as Faker;

$factory->define(Movie::class, function (Faker $faker) {
    return [
        //
        'name' => $faker->name,
        'description' => $faker->text($maxNbChars = 200),
        'genre' => $faker->text($maxNbChars = 15),
        'director' => $faker->name
    ];
});
