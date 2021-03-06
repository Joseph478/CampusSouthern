<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Company;
use Faker\Generator as Faker;

$factory->define(Company::class, function (Faker $faker) {
    return [
        'ruc' => $faker->unique()->numerify('20#########'),
        'name' => $faker->company,
        'address' => $faker->address,
    ];
});
