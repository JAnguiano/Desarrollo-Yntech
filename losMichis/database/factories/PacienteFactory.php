<?php

namespace Database\Factories;

use App\Models\Paciente;
use Illuminate\Database\Eloquent\Factories\Factory;

class PacienteFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Paciente::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'tipo' => $this->faker->randomElement(['perro','gato','ave','roedor']),
            'duenio' => $this->faker->randomElement(['1','2','3','4']),
            'edad' => $this->faker->numberBetween($min = 1, $max = 10),
            'peso' => $this->faker->numberBetween($min = 10, $max = 20),
            'sexo' => $this->faker->randomElement(['hembra','Macho']),
            'alias' => $this->faker->firstname,
        ];
    }
}
