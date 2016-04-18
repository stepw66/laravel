<?php
$factory->define(App\Post::class, function(Faker\Generator $faker){
    return [
        'title'     => $faker->realText(50),
        'content'   => $faker->realText(),
    ];
});