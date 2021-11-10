<?php

namespace Database\Factories;

use App\Models\LocalProduct;
use Illuminate\Database\Eloquent\Factories\Factory;

class PresentationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'price' => $this->faker->numberBetween(50, 100),
            'presentation' => $this->faker->numberBetween(1,9) . ' u.'
        ];
    }
}
