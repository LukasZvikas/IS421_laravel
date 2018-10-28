<?php

use Faker\Generator as Faker;


    $factory->define(App\Car::class, function (Faker $faker) {
        return [
            'make' => $faker->randomElement($array = array('ford', 'honda', 'toyota')),
            'model' => $faker->randomNumber($nbDigits = null, $strict = false),
            'year' => $faker->year($max = '2018')

        ];
    });
