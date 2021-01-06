<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Veterinario;

class VeterinariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $veterinario =new Veterinario();
        $veterinario->nombre="Omar";
        $veterinario->apellidop="Anguiano";
        $veterinario->apellidom="Rosas";
        $veterinario->direccion="Capuchina 181 Dalias";
        $veterinario->telefono="4443018989";
        $veterinario->correo="anguianoomar537@gmail.com";
        $veterinario->estado="1";
        $veterinario->save();

        $veterinario2 =new Veterinario();
        $veterinario2->nombre="Alejandro";
        $veterinario2->apellidop="Toro";
        $veterinario2->apellidom="Martinez";
        $veterinario2->direccion="Sierra Leona 418";
        $veterinario2->telefono="4442119613";
        $veterinario2->correo="alejandro@intech.mx";
        $veterinario2->estado="1";
        $veterinario2->save();

        $veterinario3 =new Veterinario();
        $veterinario3->nombre="Alejandro";
        $veterinario3->apellidop="Anguiano";
        $veterinario3->apellidom="Orta";
        $veterinario3->direccion="Villa de Reyes";
        $veterinario3->telefono="4444444444";
        $veterinario3->correo="aanguiano@gmail.com";
        $veterinario3->estado="0";
        $veterinario3->save();
    }
}
