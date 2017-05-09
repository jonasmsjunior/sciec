<?php

use Illuminate\Database\Seeder;

class PopulacaoTesteAlvaro extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Entities\Instution::class,10)->create();
        factory(App\Entities\Course::class,10)->create();
        //factory(App\Entities\CourseEvents::class,10)->create();
    }
}
