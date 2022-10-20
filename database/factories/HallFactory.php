<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Hall>
 */
class HallFactory extends Factory
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
            'name_of_hall'=> $hallName,
        ];

        // Name Of Cities By Hall AND Number Of Places Allowed By Hall

        if($hallName == 'Bercy'){
            $hall['city'] = 'Paris';
            $hall['number_of_places'] = 20300;
        }
        else if($hallName == 'Halle Tony Garnier'){
            $hall['city'] = 'Lyon';
            $hall['number_of_places'] = 17000;
        }
        else if($hallName == 'Royal Albert Hall'){
            $hall['city'] = 'London';
            $hall['number_of_places'] = 5544;
        }
        else if($hallName == 'Forest National'){
            $hall['city'] = 'Bruxelles';
            $hall['number_of_places'] = 8400;
        }
        return $hall;
    }
}
