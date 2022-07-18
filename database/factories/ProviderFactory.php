<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProviderFactory extends Factory
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
            'contact' => $this->faker->name(),
            'tel' => $this->faker->phoneNumberWithExtension(),
            'email' => $this->faker->unique()->safeEmail(),
            'zap' => $this->faker->phoneNumberWithExtension(),
            'brazil_state_id' => $this->faker->randomElement(['12', '27', '16', '29', '23']),
            'brazil_city_id' => $this->faker->randomElement( ['1100015', '1100023', '1100031']),
        ];
    }
}
