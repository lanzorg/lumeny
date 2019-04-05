<?php

use Faker\Generator;
use App\Customer;
use App\Contract;

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

$factory->define(Customer::class, function (Generator $faker) {
    return [
        'firstname' => $faker->firstName,
        'lastname' => $faker->lastName,
        'street' => $faker->streetName,
        'number' => $faker->buildingNumber,
        'zip' => $faker->postcode,
        'city' => $faker->city,
    ];
});

$factory->define(Contract::class, function (Generator $faker) {
    return [
        'energy' => $faker->word,
        'product' => $faker->jobTitle,
        'mobile' => $faker->phoneNumber,
        'duration' => $faker->randomNumber,
        'promo' => $faker->userName,
        'customer_id' => $faker->randomDigit,
    ];
});
