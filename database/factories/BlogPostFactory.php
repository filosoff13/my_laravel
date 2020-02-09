<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;

$factory->define(\App\Models\BlogPost::class, function (Faker $faker) {
    $title = $faker->sentence(rand(3, 8), true);
//    $txt = $faker->realText(rand(1000, 4000));

    return [
        'category_id' => rand(1, 11),
        'user_id' => (rand(1, 5) == 5) ? 1 : 2,
        'title' => $title,
        'slug' => \Illuminate\Support\Str::slug($title),
        'picture' => '../public/pic/hqdefault.jpg',
        'excerpt' => $faker->text(rand(40, 100)),
        'published_at' => $faker->dateTimeBetween('-2 month', '-1 day'),

    ];
});
