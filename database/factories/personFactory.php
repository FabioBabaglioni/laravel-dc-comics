<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class personFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'firstName' => fake() -> firstName(),
            'lasttName' => fake() -> lastName(),
            'dateOfBirth' => fake() -> date(),
            'height' => fake() -> boolean() ? fake() -> numberBetween(0, 230) : 0,
        ];
    }
}
