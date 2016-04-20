<?php
$factory->define(App\Phone::class, function(Faker\Generator $faker){
    return [
        'name'      => $faker->sentence()
    ];
});