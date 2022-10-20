<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer_orders', function (Blueprint $table) {
            $table->id();
            $table->integer('customer_id');
            $table->date('order_time');
            $table->string('delivery_address');
            $table->string('delivery_email_address');
            $table->string('preferred_delivery_time')->nullable();
            $table->date('time_paid');
            $table->date('time_sent');
            $table->decimal('total_price');
            $table->decimal('discount');
            $table->decimal('final_price');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customer_orders');
    }
};
