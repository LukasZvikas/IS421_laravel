<?php

use Faker\Generator as Faker;


    $factory->define(App\Car::class, function (Faker $faker) {
        return [
            'make' => $faker->randomElement($array = array('ford', 'honda', 'toyota')),
            'model' => $faker->name,
            'year' => $faker->year($max = '2018')

        ];
    });
