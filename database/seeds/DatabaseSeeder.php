<?php

use Illuminate\Database\Seeder;
use App\Blog;
use App\Cat;
use App\Client;
use App\Service;
use App\Team;
use App\Carousel;
use App\Tag;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class,2)->create();
        factory(Cat::class,5)->create();
        factory(Tag::class,5)->create();
        factory(Blog::class,10)->create();
        factory(Client::class,5)->create();
        factory(Service::class,6)->create();
        factory(Team::class,4)->create();
        factory(Carousel::class,3)->create();

    }
}
