<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Carousel;
use Faker\Generator as Faker;

$factory->define(Carousel::class, function (Faker $faker) {
    $title = $faker->sentence;
    return [
        'title'=>$title,
        'image' => $faker->imageUrl($width = 870, $height = 350), // 'http://lorempixel.com/640/480/',
        'body' => $faker->paragraph(rand(10,15)),

    ];
});
