<?php

namespace Database\Factories;

use App\Models\Compra;
use App\Models\Pessoa;
use App\Models\Produto;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class CompraFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Compra::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //

            'pessoa_id' => Pessoa::factory(),
            'produto_id' => Produto::factory(),
            'data' => $this->faker->date("Y-m-d", 'now'),


        ];
    }
}
