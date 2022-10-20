<?php

namespace Database\Factories;

use App\Models\Ticket;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class Ticket_categoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $seat = $this->faker->randomElement(Ticket::pluck('seat'));

        $ticket = [
            // 'description' => 'haha',
            // 'price' => 50, // ajouter des variations en fonction du siège choisit etc
            'start_date' => $this->faker->dateTimeBetween('+0 days', '+1 years'),
            'end_date' => $this->faker->dateTimeBetween('+1 years', '+2 years'),
            'area' => $this->faker->randomElement(['Balcony', 'Ground'])
        ];

        if($ticket['area'] == 'Balcony' AND $seat > 10000){
            $ticket['description'] = "You're poor... but less than many others.";
            $ticket['price'] = 50;
        }
        else if($ticket['area'] == 'Balcony' AND $seat < 10000){
            $ticket['description'] = "You're not so rich, but still...";
            $ticket['price'] = 85;
        }
        else if($ticket['area'] == 'Ground' AND $seat < 10000){
            $ticket['description'] = "You're so rich... I'm jealous !";
            $ticket['price'] = 250;
        }
        else if($ticket['area'] == 'Ground' AND $seat > 10000){
            $ticket['description'] = "You're so rich... I'm gonna take all your money !";
            $ticket['price'] = 150;
        }
        return $ticket;

    }
}
