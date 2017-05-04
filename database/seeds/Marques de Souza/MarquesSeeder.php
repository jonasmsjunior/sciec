<?php

use Illuminate\Database\Seeder;

class MarquesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Entities\Event::class,10)->create();
        factory(App\Entities\TypeActivity::class,7)->create();
        factory(App\Entities\Activity::class,10)->create();
    }
}
