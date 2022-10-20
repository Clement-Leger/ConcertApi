<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Genre;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Artist>
 */
class ArtistFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {

        $genreId = $this->faker->randomElement(Genre::all('id')->pluck('id'));

        return [
            'artist_name' => fake()->name(),
            'genre_id' => $genreId,
        ];
    }
}