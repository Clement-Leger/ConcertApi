<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Venue>
 */
class VenueFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $hallName = $this->faker->unique()->randomElement(['Bercy', 'Halle Tony Garnier', 'Royal Albert Hall', 'Forest National']);

        $hall = [
            //
            'venue_name' => $hallName,
        ];

        // Name Of Cities By Hall AND Number Of Places Allowed By Hall

        if($hallName == 'Bercy'){
            $hall['location'] = '8 Bd de Bercy, 75012 Paris, France';
            $hall['capacity'] = 20300;
            $hall['type'] = 'Salle polyvalente';
        }
        else if($hallName == 'Halle Tony Garnier'){
            $hall['location'] = '20 Pl. Docteurs Charles et Christophe Mérieux, 69007 Lyon, France';
            $hall['capacity'] = 17000;
            $hall['type'] = 'Concert hall';
        }
        else if($hallName == 'Royal Albert Hall'){
            $hall['location'] = 'Kensington Gore, South Kensington, London SW7 2AP, Royaume-Uni';
            $hall['capacity'] = 5544;
            $hall['type'] = 'Concert hall';
        }
        else if($hallName == 'Forest National'){
            $hall['location'] = 'Av. Victor Rousseau 208, 1190 Forest, Belgique';
            $hall['capacity'] = 8400;
            $hall['type'] = 'Concert hall';
        }
        return $hall;
    }
}
