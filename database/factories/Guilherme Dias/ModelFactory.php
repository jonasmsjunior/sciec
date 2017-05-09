<?php

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

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Entities\TypeActivityUser::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'nome' => $faker->sentence,
        'descricao' => $faker->sentence,
        'status'=> $faker->numberBetween(0,1),
    ];
});

$factory->define(App\Entities\ActivityUser::class, function (Faker\Generator $faker) {


    return [
        'status'=> $faker->numberBetween(0,1),
        'presenca' => $faker->boolean,
        'data_entrada' => $faker->dateTime,
        'data_saida' => $faker->dateTime,
        'id_users' => $faker->numberBetween(1,100),
        'id_activities' => $faker->numberBetween(1,10),
        'id_type_activity_user' => $faker->numberBetween(1,5),
    ];
});

//legal

