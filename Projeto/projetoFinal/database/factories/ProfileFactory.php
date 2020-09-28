<?php

namespace Database\Factories;

use App\Models\Profile;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProfileFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Profile::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nome' => $this->faker->name,
            'endereco' => $this->faker->address,
            'referencia' => $this->faker->country,
            'pagamento' => $this->faker->randomElement($array = array('dinheiro', 'cartao', 'aplicativo')),
            'cpf' => $this->faker->randomDigit,
            'rg' => $this->faker->randomDigit,
            'contato' => $this->faker->randomDigit,
            'usuario' => $this->faker->userName,
            'senha' => $this->faker->password

        ];
    }
}
