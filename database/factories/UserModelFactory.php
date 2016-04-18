<?php
$factory->define(App\User::class, function(Faker\Generator $faker){

    return [
        'name'      => $faker->firstName,
        'email'     => $faker->email,
        'password'  => str_random(10),
    ];
});