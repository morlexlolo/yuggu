<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Team;
use Faker\Generator as Faker;

$factory->define(Team::class, function (Faker $faker) {

    $name =$faker->sentence;
    return [
        'name'=>$name,
        'position' => $faker->text(rand(250,30)),
        'image' => $faker->imageUrl($width = 870, $height = 350), // 'http://lorempixel.com/640/480/',

        'fb' => $faker->text(rand(250,30)),
        'twitter' => $faker->text(rand(250,30)),
        'insta' => $faker->text(rand(250,30)),

    ];
});
