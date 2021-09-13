<?php

namespace Database\Factories;

use App\Models\Presentacion;
use Illuminate\Database\Eloquent\Factories\Factory;

class PresentacionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Presentacion::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'cantidad' => $this->faker->numberBetween(1,10),
            'precio' => rand(12,50)/10,
            'disponibilidad_local' => $this->faker->boolean(50),
            'disponibilidad_web' => $this->faker->boolean(50)
        ];
    }
}
