<?php

namespace Database\Factories;

use App\Models\Registro;
use Illuminate\Database\Eloquent\Factories\Factory;

class RegistroFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Registro::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [

            'equipamento_id' => $this->faker->numberBetween(2,4),
            'user_id' => $this->faker->numberBetween(1, 4),
            'descricao' => $this->faker->word,
            'dataLimite' => $this->faker->date("Y-m-d", 'now'),
            'tipo' => $this->faker->randomNumber(2)

        ];
    }
}
