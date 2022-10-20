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
        Schema::create('concerts', function (Blueprint $table) {
            $table->id();
            $table->string('concert_name');
            $table->integer('artist_id');
            $table->date('date');
            $table->integer('venue_id');
            $table->integer('concert_group_id');
            // $table->integer('number_of_places');
            // $table->integer('places_left');
            // $table->integer('price_of_ticket');
            // AJOUTER DES DATES DE CONCERT
            $table->rememberToken();
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
        Schema::dropIfExists('concerts');
    }
};
