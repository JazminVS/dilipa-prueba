<?php

use Faker\Generator as Faker;

$factory->define(App\Administrador::class, function (Faker $faker) {
    return [
        //
        'name'=>$faker->sentence,
        'descrption'=>$faker->sentence,

    ];
});
