<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
            "customer_name" => fake()->name(),
            "email" => $this->faker->unique()->email(),
            'user_name' => fake()->name(),
            'password' => Hash::make(Str::random(10)),
            'confirmation_code' => Str::random(10),
            'confirmation_time' => now()->toDateString(),
        ];
    }
}
