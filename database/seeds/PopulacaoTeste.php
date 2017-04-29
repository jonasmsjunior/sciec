<?php

use Illuminate\Database\Seeder;

class PopulacaoTeste extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*App\Entities\UserTypeUser::truncate();
        App\Entities\TypeUser::truncate();
        App\Entities\User::truncate();*/

        factory(App\Entities\User::class,100)->create();
        factory(App\Entities\TypeUser::class,5)->create();
        factory(App\Entities\UserTypeUser::class,100)->create();

    }
}
