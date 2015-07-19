<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use AlmoxarifadoTableSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        //$this->call(AlmoxarifadoTableSeeder::class);

        Model::reguard();
    }
}
