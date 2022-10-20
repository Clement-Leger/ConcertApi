<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Artist;
use App\Models\role;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class Concert_roleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $artistId = $this->faker->randomElement(Artist::all('id')->pluck('id'));
        $roleId = $this->faker->randomElement(role::all('id')->pluck('id'));

        return [
            //
            'artist_id' => $artistId,
            'role_id' => $roleId,
        ];
    }
}
