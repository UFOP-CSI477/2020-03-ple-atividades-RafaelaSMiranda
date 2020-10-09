<?php

namespace Database\Factories;

use App\Models\Cliente;
use App\Models\Pedido;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class PedidoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Pedido::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //


            'valorTotal' => $this->faker->numberBetween($min = 30, $max = 200),
            'observacao' => $this->faker->word,
            'cliente_id' => Cliente::factory(),
        ];
    }
}
