<?php

use Faker\Generator as Faker;

$student=$factory->define(App\Student::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'registration_number'=>$faker->randomDigit,




    ];
});

$factory->afterCreating(App\Student::class, function($student, $faker){
   $student->user()-save(factory(App\User::class)->make());
});
