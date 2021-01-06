<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Duenio;

class DueniosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Duenio::factory(5)->create();
    }
}
