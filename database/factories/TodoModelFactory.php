<?php
$factory->define(App\Todo::class, function($faker){
    return [
        'body'  => $faker->sentence()
    ];
});