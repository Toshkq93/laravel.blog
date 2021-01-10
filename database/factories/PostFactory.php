<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'title' => $faker->words(3, true),
        'content' => $faker->paragraph(3),
        'description' => $faker->paragraph(1),
        'category_id' => $faker->numberBetween(3,5),
        'created_at' => $faker->dateTime(),
        'updated_at' => $faker->dateTime(),
    ];
});
