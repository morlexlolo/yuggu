<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Blog;
use App\Cat;
use Faker\Generator as Faker;
use App\Tag;

$factory->define(Blog::class, function (Faker $faker) {

    $title = $faker->sentence;
    return [
        'title'=>$title,
        'slug' => str_slug($title),
        'excerpt' => $faker->text(rand(250,30)),
        'image' => $faker->imageUrl($width = 870, $height = 350), // 'http://lorempixel.com/640/480/',
        'body' => $faker->paragraph(rand(10,15)),
        'view_count' => rand(1,10)*10,

        'author_id' => function () {
            return factory(App\User::class)->create()->id;
        },
        'cat_id' => function () {
            return factory(Cat::class)->create()->id;
        },
        'tag_id' => function () {
            return factory(Tag::class)->create()->id;
        },
    ];
});
