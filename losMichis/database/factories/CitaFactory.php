<?php

namespace Database\Factories;

use App\Models\Cita;
use Illuminate\Database\Eloquent\Factories\Factory;

class CitaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Cita::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'idMascota' => $this->faker->numberBetween($min = 1, $max = 5),
            'fecha' => $this->faker->randomElement(['2020-12-05T11:04','2020-11-23T12:54','2021-01-03T22:04']),
            'consultorio' => $this->faker->randomElement(['Dalias','Prados','Sierra Leona']),
            'estado' => $this->faker->randomElement(['pendiente','efectuada','cancelada']),
        ];
    }
}