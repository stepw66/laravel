<?php

/*
|--------------------------------------------------------------------------
| Post Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\Post::class, function ($faker) {
    return [
        'title' => $faker->sentence,
        'content' => implode("\n\n", $faker->paragraphs(10)),
        'published_at' => $faker->dateTimeBetween('-1 month', '+10 days'),
    ];
});
