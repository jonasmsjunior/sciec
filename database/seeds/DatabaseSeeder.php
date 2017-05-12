<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(PopulacaoTeste::class);
        $this->call(GuilhermeSeeder::class);
        $this->call(MarquesSeeder::class);
        $this->call(RomuloSeeder::class);
    }
}
