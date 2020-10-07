<?php

namespace Database\Factories;

use App\Models\Adicional;
use App\Models\Produto;
use App\Models\ProdutoAdicional;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProdutoAdicionalFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ProdutoAdicional::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //

            'adicional_id' => Adicional::Factory(),
            'produto_id' => Produto::Factory(),
            'quantidade' => $this->faker->randomElement(array(1, 2, 3))
        ];
    }
}
