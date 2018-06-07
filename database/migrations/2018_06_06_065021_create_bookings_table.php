<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('customer_name');
            $table->string('customer_phone')->nullable();
            $table->string('customer_email')->nullable();
            $table->date('trip_date');
            $table->string('pick_up')->nullable();
            $table->double('grand_total', 10, 2);
            $table->string('status')->default('progressing');
            $table->integer('tour_id')->unsigned();
            $table->integer('guide_id')->unsigned();

            $table->foreign('tour_id')->references('id')->on('tours');
            $table->foreign('guide_id')->references('id')->on('users');
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
        Schema::dropIfExists('bookings');
    }
}
