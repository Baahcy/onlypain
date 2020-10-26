<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Shop;
use Faker\Generator as Faker;

$factory->define(Shop::class, function (Faker $faker) {
    return [
        'title' =>$faker->title(),
        'price' =>$faker->randomFloat(2, 15, 50),
        'description' =>$faker->text(),
        'image' =>$faker->image('public/storage/images',640,480, null, true,true)
    ];
});
