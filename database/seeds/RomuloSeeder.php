<?php

use Illuminate\Database\Seeder;

class RomuloSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        /* RÔMULO*/
        factory(App\Entities\Articles::class,100)->create();
        factory(App\Entities\Participation::class,100)->create();
        factory(App\Entities\UsersEvents::class,100)->create();
    }
}
