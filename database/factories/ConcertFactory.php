<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Artist;
use App\Models\Hall;
use App\Models\Venue;
use App\Models\concertGroup;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Concert>
 */
class ConcertFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {

        $hallName = $this->faker->randomElement(Hall::all('name_of_hall')->pluck('name_of_hall'));
        $artistId = $this->faker->randomElement(Artist::all('id')->pluck('id'));
        $venueId = $this->faker->randomElement(Venue::all('id')->pluck('id'));
        $concertGroupId = $this->faker->randomElement(concertGroup::all('id')->pluck('id'));

        return [
            //
            'concert_name' => $this->faker->randomElement(['La foire du fou', "L'homme qui disait non", "Oh happy night", "The first man on the moon", "Pax Romanus", "Jéjé les gaimeurs"]),
            'artist_id' => $artistId,
            'date' => $this->faker->date('Y_m_d'),
            'venue_id' => $venueId,
            'concert_group_id' => $concertGroupId,
        ];
    }
}


// 'name_of_hall' => $hallName,
// 'name_of_artist' => $artistName,
// 'city' => Hall::all()->where('name_of_hall', $hallName)->value('city'),
// 'popularity' => Artist::all()->where('name_of_artist', $artistName)->value('popularity'),
// 'music_type' => Artist::all()->where('name_of_artist', $artistName)->value('music_type'),
// 'number_of_places' => Hall::all()->where('name_of_hall', $hallName)->value('number_of_places'),
// 'places_left' => mt_rand(1500, 4000),
// 'price_of_ticket' => mt_rand(5, 15),
// 'remember_token' => Str::random(10),
// // AJOUTER DES DATES DE CONCERT