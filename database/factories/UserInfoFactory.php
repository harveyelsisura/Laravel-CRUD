<?php

use Faker\Generator as Faker;

$factory->define(App\UserInformation::class, function (Faker $faker) {
    return [
        "first_name" => $faker->firstName,
        "last_name" => $faker->lastName,
        "phone" => $faker->phoneNumber,
        "email" => $faker->safeEmail
    ];
});
