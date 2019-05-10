<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Tag;
use Faker\Generator as Faker;
use App\Blog;

$factory->define(Tag::class, function (Faker $faker) {

    $name = $faker->jobTitle;
    return [
        'name'=>$name,
        'slug' => str_slug($name),

    ];




});
