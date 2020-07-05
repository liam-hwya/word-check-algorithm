<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Blog;
use Faker\Generator as Faker;

$factory->define(Blog::class, function (Faker $faker) {
    return [
        "title" => ucwords($faker->sentence($nbWords = 6,$variableNbWords = true)),
        "desc" => $faker->sentence($nbWords = 6,$variableNbWords = true),
        "content" => $faker->paragraph(3),
        "category_id" => rand(1,5),
        "author" => "admin"
    ];
});
