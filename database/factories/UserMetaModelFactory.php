<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\Usermeta::class, function ($faker) {
    return [
        'user_id' => array_rand([1,2,3,4,5,6]),
        'meta_name' => str_random(5),
        'meta_value' => str_random(),
    ];
});
