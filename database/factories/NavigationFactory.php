<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Navigation;
use Faker\Generator as Faker;

$factory->define(Navigation::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'slug' => $faker->word,
        'description'=> $faker->sentence
    ];
});
