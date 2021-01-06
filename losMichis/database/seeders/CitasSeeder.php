<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Cita;

class CitasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Cita::factory(5)->create();
    }
}
