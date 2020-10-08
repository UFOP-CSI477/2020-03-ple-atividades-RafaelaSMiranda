<?php

namespace Database\Factories;

use App\Models\Pedido;
use App\Models\PedidoProduto;
use App\Models\Produto;
use Illuminate\Database\Eloquent\Factories\Factory;

class PedidoProdutoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = PedidoProduto::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //

            'pedido_id' => Pedido::factory(),
            'produto_id' => Produto::factory(),
            'quantidade' => $this->faker->randomElement(array(1, 2, 3)),
            'valorTotal' => $this->faker->numberBetween($min = 10, $max = 60),
        ];
    }
}
