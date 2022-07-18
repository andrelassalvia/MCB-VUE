<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ServiceOrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'client_id' => random_int(1, 1000),
            'service_type_id' => random_int(1, 7),
            'provider_id' => random_int(1, 1000),
            'order_status_id' => random_int(1, 7),
            'classification_id' => random_int(1, 5)
        ];
    }
}
