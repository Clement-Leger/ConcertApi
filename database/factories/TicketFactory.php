<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Concert;
use App\Models\Ticket_category;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class TicketFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {

        $concertId = $this->faker->randomElement(Concert::all('id')->pluck('id'));
        $ticketCategoryId = $this->faker->randomElement(Ticket_category::all('id')->pluck('id'));

        return [
            //
            'serial_number' => Str::random(10),
            'concert_id' => $concertId,
            'ticket_category_id' => $ticketCategoryId,
            'seat' => mt_rand(1, 20000), // FAIRE CORRESPONDRE AVEC LE HALL
            'purchase_date' => now()->toDateString(),
        ];
    }
}
