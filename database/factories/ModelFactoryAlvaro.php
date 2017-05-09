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
$factory->define(App\Entities\Instution::class, function (Faker\Generator $faker) {


    return [
        'nome' => $faker->name,
        'site' => $faker->sentence,
        'email' => $faker->unique()->safeEmail,
        'descricao' => $faker->sentence,
        'status' => $faker->boolean,
        'telefone' => $faker->phoneNumber,
    ];
});

$factory->define(App\Entities\Course::class, function (Faker\Generator $faker) {


    return [
        'nome' => $faker->name,
        'descricao' => $faker->sentence,
        'status' => $faker->boolean,
        'telefone' => $faker->phoneNumber,
        'id_instutions' => $faker->numberBetween(1,10),
    ];
});

$factory->define(App\Entities\CourseEvents::class, function (Faker\Generator $faker) {


    return [
       // 'id_cursos' => $faker->numberBetween(1,100),
       // 'id_eventos' => $faker->numberBetween(1,5),
    ];
});


