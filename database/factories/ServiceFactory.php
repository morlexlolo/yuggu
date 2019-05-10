<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Service;
use Faker\Generator as Faker;

$factory->define(Service::class, function (Faker $faker) {
    $title =$faker->sentence;
    return [
        'title'=>$title,
        'icon' => $faker->imageUrl($width = 870, $height = 350), // 'http://lorempixel.com/640/480/',
        'description' => $faker->paragraph(rand(10,15)),
    ];
});
