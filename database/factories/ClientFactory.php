<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ClientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'tel' => $this->faker->phoneNumberWithExtension(),
            'email' => $this->faker->unique()->safeEmail(),
            'firma_aberta' => $this->faker->boolean(),
            'cnh' => $this->faker->boolean(),
            'cpf' => $this->faker->boolean(),
            'digital_certification' => $this->faker->boolean(),
            'passport' => $this->faker->boolean(),
            'rg' => $this->faker->boolean(),
            'client_status_id' => random_int(1, 4),
            'marital_status_id' => random_int(1, 5),
            'occupation_id' => random_int(1, 8),
        ];
    }
}
