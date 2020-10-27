<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Music;
use Faker\Generator as Faker;

$factory->define(Music::class, function (Faker $faker) {
    return [
        'image' =>$faker->image('public/storage/images',640,480, null, true,true),
        'music' =>$faker->text(20),
        'artist' =>$faker->name(),
        'title' =>$faker->text(10)

    ];
});
