<?php

use Faker\Generator as Faker;

$factory->define(App\Student::class, function (Faker $faker) {
    return [
        //

        'name' => $faker->name,
        'email'=>$faker->safeEmail,
        'birth_date'=>$faker->date($format = 'Y-m-d', $max = 'now'),
        'salary'=>$faker->numberBetween($min = 1000, $max = 9000),
        'status'=>$faker->randomElement($array = array (1,0))
    ];
});
