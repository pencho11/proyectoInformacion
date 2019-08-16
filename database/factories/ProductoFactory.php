<?php

use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker) {
    return [
        'nombre'=>$faker->sentence(),
        'precio'=>$faker->sentence(),
        'id_productos'=>$faker->sentence()
    ];
});
