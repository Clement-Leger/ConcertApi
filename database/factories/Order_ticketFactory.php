<?php

namespace Database\Factories;

use App\Models\Customer_order;
use App\Models\Ticket;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class Order_ticketFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {

        $customerOrderId = $this->faker->randomElement(Customer_order::all('id')->pluck('id'));
        $ticketId = $this->faker->randomElement(Ticket::all('id')->pluck('id'));

        return [
            //
            'customer_order_id' => $customerOrderId,
            'ticket_id' => $ticketId,
        ];
    }
}
