<?php

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'user_id' => $faker->numberBetween(1,2),
        'title' => $faker->sentence(5),
        'body' => $faker->paragraph(5)
    ];
});
