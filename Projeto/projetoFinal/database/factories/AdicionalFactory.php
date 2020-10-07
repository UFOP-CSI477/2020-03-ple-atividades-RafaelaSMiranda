<?php

namespace Database\Factories;

use App\Models\Adicional;
use Illuminate\Database\Eloquent\Factories\Factory;

class AdicionalFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Adicional::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //

            'nome' => $this->faker->randomElement($array = array('Mussarela', 'Queijo', 'Tomate', 'Bacon', 'Fritas')),
            'valor' => $this->faker->numberBetween($min = 2, $max = 15),

        ];
    }
}
