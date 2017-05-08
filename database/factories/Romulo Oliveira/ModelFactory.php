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



/* ROMULO*/
$factory->define(App\Entities\Articles::class, function (Faker\Generator $faker) {


    return [
        'titulo'    => $faker->title,
        'resumo'    => $faker->sentence,
        'autores'   =>$faker->name,
        'local'     =>$faker->locale,
        'subtitulo' =>$faker->sentence,
        'situacao'  =>$faker->sentence,
        'status'    =>$faker->boolean,
    ];
});

$factory->define(App\Entities\Participation::class, function (Faker\Generator $faker) {


    return [
        'nome' => $faker->sentence,
        'descricao'=>$faker->sentence,
        'status' => $faker->boolean,
    ];
});

$factory->define(App\Entities\UsersEvents::class, function (Faker\Generator $faker) {


    return [

        'status' => $faker->boolean,
    ];
});

//legal
