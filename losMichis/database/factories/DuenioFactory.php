<?php

namespace Database\Factories;

use App\Models\Duenio;
use Illuminate\Database\Eloquent\Factories\Factory;

class DuenioFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Duenio::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->firstname,
            'apellidop' => $this->faker->lastname,
            'apellidom' => $this->faker->lastname,
            'direccion' => $this->faker->address,
            'telefono' => $this->faker->phoneNumber,
            'correo' => $this->faker->unique()->safeEmail,
            'email_verified_at' => now(),
        ];
    }
}
