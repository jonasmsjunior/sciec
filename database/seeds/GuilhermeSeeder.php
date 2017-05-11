<?php

use Illuminate\Database\Seeder;

class GuilhermeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Entities\TypeActivityUser::class, 5)->create();
        factory(App\Entities\ActivityUser::class, 5)->create();
    }
}
