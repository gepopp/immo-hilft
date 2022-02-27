<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class DonatorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'link' => $this->faker->url,
            'donation' => $this->faker->numberBetween($min = 1000, $max = 9000)
        ];
    }
}
