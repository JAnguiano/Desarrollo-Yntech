<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
    	$this->call(VeterinariosSeeder::class);
    	$this->call(DueniosSeeder::class);
        $this->call(PacientesSeeder::class);
        $this->call(CitasSeeder::class);
    }
}
