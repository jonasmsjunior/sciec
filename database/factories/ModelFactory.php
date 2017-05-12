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
$factory->define(App\Entities\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'password' => $password ?: $password = bcrypt('secret'),
        'cpf'  => $faker->unique()->numberBetween(1,999999999),
        'email' => $faker->unique()->safeEmail,
        'telefone' => $faker->phoneNumber,
        'remember_token' => str_random(10),
        'status'=> $faker->boolean,

    ];
});

$factory->define(App\Entities\UserTypeUser::class, function (Faker\Generator $faker) {


    return [
        'id_user' => $faker->numberBetween(1,100),
        'id_type_user' => $faker->numberBetween(1,5),
        'status' => $faker->boolean,
    ];
});

$factory->define(App\Entities\TypeUser::class, function (Faker\Generator $faker) {


    return [
        'status' => $faker->boolean,
        'nome' => $faker->sentence,
        'descricao' => $faker->sentence,
    ];
});

//legal


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
$factory->define(App\Entities\Event::class, function (Faker\Generator $faker) {
    return [
        'nome' => $faker->name,
        'descricao' => $faker->sentence,
        'status'=> $faker->boolean,
        'local'=> $faker->locale,
        'data_inicio'=> $faker->dateTime,
        'data_conclusao'=> $faker->dateTime,
    ];
});
$factory->define(App\Entities\TypeActivity::class, function (Faker\Generator $faker) {
    return [
        'nome' => $faker->name,
        'descricao' => $faker->sentence,
        'status'=> $faker->boolean,
    ];
});
$factory->define(App\Entities\Activity::class, function (Faker\Generator $faker) {
    return [
        'nome' => $faker->name,
        'descricao' => $faker->sentence,
        'status'=> $faker->boolean,
        'hora' => $faker->time(),
        'local'=> $faker->locale,
        'qtd_inscritos'=>$faker->numberBetween(),
        'cod_inscritos'=> $faker->numberBetween(),
        'data_inicio'=> $faker->dateTime,
        'data_conclusao'=> $faker->dateTime,
        'id_evento'=> $faker->numberBetween(0,100),
        'id_tipo_atividade'=> $faker->numberBetween(0,100),

    ];
}); //marques

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
});//guilherme

$factory->define(App\Entities\Article::class, function (Faker\Generator $faker) {


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

$factory->define(App\Entities\UserEvent::class, function (Faker\Generator $faker) {

    return [
        'id_users' => $faker->numberBetween(1,100),
        'id_evento'=> $faker->numberBetween(0,100),
        'id_articles' => $faker->numberBetween(0,100),
        'id_participation' => $faker->numberBetween(0,100),
        'status' => $faker->boolean,
    ];
});// romulo
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
        'id_instutions' => $faker->numberBetween(0,10),
    ];
});

$factory->define(App\Entities\CourseEvents::class, function (Faker\Generator $faker) {


    return [
         'id_cursos' => $faker->numberBetween(0,10),
         'id_eventos' => $faker->numberBetween(0,5),
    ];
});//alvaro

