<?php
/**
 * Created by PhpStorm.
 * User: Mardem13
 * Date: 04/05/2017
 * Time: 15:56
 *
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
$factory->define(sciec\Models\Activity::class, function (Faker\Generator $faker) {
    return [
        'nome' => $faker->name,
        'descricao' => $faker->sentence,
        'status'=> $faker->numberBetween(0,1),
        'hora' => $faker->time(),
        'local'=> $faker->locale,
        'qtd_inscritos'=>$faker->numberBetween(),
        'cod_inscritos'=> $faker->numberBetween(),
        'data_inicio'=> $faker->dateTimeAD,
        'data_conclusao'=> $faker->dateTimeAD,

    ];
});
$factory->define(sciec\Models\Events::class, function (Faker\Generator $faker) {
    return [
        'nome' => $faker->name,
        'descricao' => $faker->sentence,
        'status'=> $faker->numberBetween(0,1),
        'local'=> $faker->locale,
        'data_inicio'=> $faker->dateTimeAD,
        'data_conclusao'=> $faker->dateTimeAD,
    ];
});
$factory->define(sciec\Models\TypeActivity::class, function (Faker\Generator $faker) {
    return [
        'nome' => $faker->name,
        'descricao' => $faker->sentence,
        'status'=> $faker->numberBetween(0,1),
    ];
});