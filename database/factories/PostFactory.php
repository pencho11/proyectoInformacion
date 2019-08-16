<?php

use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        'titulo'=>$faker->sentence(),
        'contenido'=>$faker->text(),
        'id_autor'=>App\User::All()->random()
    ];
});