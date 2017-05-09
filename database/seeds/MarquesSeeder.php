<?php

use Illuminate\Database\Seeder;

class MarquesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * Essa seed ta funcioando oque so que so funciona quando usa ela na databaseSeeder
     * oque acho que aconteceu e que quando eu criei o arquivo deu um erro
     * @return void
     */
    public function run()
    {
        factory(App\Entities\User::class, 100)->create();
        factory(App\Entities\TypeUser::class, 5)->create();
        factory(App\Entities\UserTypeUser::class, 100)->create();
        factory(App\Entities\Event::class, 100)->create();
        factory(App\Entities\TypeActivity::class, 100)->create();
        factory(App\Entities\Activity::class, 10)->create();
    }
}