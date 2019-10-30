<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('vehicle');
            $table->string('within_metro_manila')->default("yes");

            $table->string('group');
            $table->longText('purpose');

            $table->string('pickup_street');
            $table->string('pickup_barangay');
            $table->string('pickup_city');
            $table->string('pickup_province')->nullable();
            $table->string('pickup_time')->default(1);

            $table->string('dropoff_street');
            $table->string('dropoff_days')->default(1);
            $table->string('dropoff_barangay');
            $table->string('dropoff_city');
            $table->string('dropoff_time')->default(1);
            $table->string('dropoff_province')->nullable();
            $table->string('dropoff_itinerary');
            $table->string('price')->default(0);

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
        Schema::dropIfExists('booking');
    }
}
