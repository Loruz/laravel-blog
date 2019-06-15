<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Category;
use App\Post;
use App\User;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'author_id' => factory(User::class),
        'category_id' => factory(Category::class),
        'title' => $faker->sentence,
        'description' => $faker->paragraph,
        'content'=> $faker->paragraph(50)
    ];
});
