<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ConcertSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Genre::factory(10)->create();
        \App\Models\role::factory(10)->create();
        \App\Models\Artist::factory(10)->create();
        \App\Models\Concert_role::factory(10)->create();
        \App\Models\concertGroup::factory(10)->create();
        \App\Models\Concert::factory(10)->create();
        \App\Models\Ticket_category::factory(10)->create();
        \App\Models\Ticket::factory(10)->create();
        \App\Models\Customer::factory(10)->create();
        \App\Models\Customer_order::factory(10)->create();
        \App\Models\Order_ticket::factory(10)->create();
    }
}
