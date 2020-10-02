<?php

namespace Database\Factories;

use App\Models\Coleta;
use Illuminate\Database\Eloquent\Factories\Factory;

class ColetaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Coleta::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //

            'nome' => $this->faker->randomElement($array = array(
                'Hospital A',
                'Hemocentro B',
                'Centro de Saúde C',
                'Hospital B',
                'Hemocentro A',
                'Centro de Saúde A',
                'Centro de Saíde B',
                'Hospital C',
                'Hemocentro C',
            )),
            'cidade' => $this->faker->city,


        ];
    }
}
