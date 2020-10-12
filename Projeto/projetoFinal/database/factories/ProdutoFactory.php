<?php

namespace Database\Factories;

use App\Models\Produto;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProdutoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Produto::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //

            'nome' => $this->faker->randomElement($array = array('Pizza', 'Hambúrguer', 'Porção', 'Suco', 'Agua', 'Regrigerante')),
            'tipo' => $this->faker->randomElement($array = array('Bebida', 'Pizza', 'Hambúrguer', 'Porção', 'Combo', 'Promoção', 'Sobremesa')),
            'condicao' => $this->faker->randomElement($array = array('Disponível', 'Não disponível')),
            'descricao' => $this->faker->word,
            'valor' => $this->faker->numberBetween($min = 10, $max = 60)
        ];
    }
}
