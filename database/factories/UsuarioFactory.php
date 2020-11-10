<?php

namespace Database\Factories;

use App\Models\Usuario;
use Illuminate\Database\Eloquent\Factories\Factory;

class UsuarioFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Usuario::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre'=>$this->faker->name,
            'cargo'=>$this->faker->company,
            'compañia'=>$this->faker->company,
            'edad'=>$this->faker->randomDigit,
            'sexo'=>$this->faker->word,
            'fecha_nacimiento'=>$this->faker->date,
            'usuario_id'=>$this->faker->randomDigit

        ];
    }
}
