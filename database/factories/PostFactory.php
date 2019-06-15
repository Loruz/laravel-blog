<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Post;
use App\User;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'author_id' => factory(User::class),
        'category_id' => 1,
        'title' => $faker->sentence,
        'description' => $faker->paragraph,
        'content'=> $faker->paragraph(50)
    ];
});
