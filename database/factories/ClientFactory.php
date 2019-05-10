<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Client;
use Faker\Generator as Faker;

$factory->define(Client::class, function (Faker $faker) {
    $title =$faker->sentence;
    return [
        'title'=>$title,
        'link' => $faker->text(rand(250,30)),
        'image' => $faker->imageUrl($width = 870, $height = 350), // 'http://lorempixel.com/640/480/',

    ];
});
