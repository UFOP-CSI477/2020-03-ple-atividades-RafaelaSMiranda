<?php

namespace Database\Factories;

use App\Models\Equipamento;
use Illuminate\Database\Eloquent\Factories\Factory;

class EquipamentoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Equipamento::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nome' => $this->faker->word
        ];
    }
}
