<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Cat;
use Faker\Generator as Faker;

$factory->define(Cat::class, function (Faker $faker) {

    $name=$faker->sentence;
    return [
        'name'=>$name,
        'slug' => str_slug($name),
    ];
});
