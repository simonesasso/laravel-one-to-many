<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Employee;
use Faker\Generator as Faker;

$factory->define(Employee::class, function (Faker $faker) {
    return [

      "first_name" => $faker -> firstName(),
      "last_name" => $faker -> lastName(),
      "date_of_birth" => $faker -> date(),
      "role" => $faker -> randomElement($array = array ('Developer','Accountant','Manager'))

    ];
  });
