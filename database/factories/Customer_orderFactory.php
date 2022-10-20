<?php

namespace Database\Factories;

use App\Models\Customer;
use App\Models\Ticket_category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class Customer_orderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {

        $customerId = $this->faker->randomElement(Customer::all('id')->pluck('id'));
        $emailAddress = Customer::where('id', $customerId)->value('email');

        return [
            //
            'customer_id' => $customerId,
            'order_time' => now('Europe/Brussels')->toDateString(),
            'delivery_address' => $this->faker->address(),
            'delivery_email_address' => $emailAddress,
            'preferred_delivery_time' => now('Europe/Brussels')->tomorrow(),
            'time_paid' => now('Europe/Brussels')->toDateString(),
            'time_sent' => now('Europe/Brussels')->toDateString(),
            'total_price' => $total = $this->faker->randomElement(Ticket_category::pluck('price')),
            'discount' => $discount = mt_rand(10, 25),
            'final_price' => $total - $discount,
        ];
    }
}
