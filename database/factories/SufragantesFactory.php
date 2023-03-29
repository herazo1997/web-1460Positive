<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Sufragantes>
 */
class SufragantesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'su_cedula' => '1051832145',
            'su_nombres' => $this->faker->name(),
            'su_apellidos' => $this->faker->lastName(),
            'su_celular' => $this->faker->phoneNumber(),
            'su_email' => $this->faker->safeEmail(),
        ];
    }
}
