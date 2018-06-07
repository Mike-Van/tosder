<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateToursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tours', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->double('price',10,2);
            $table->mediumText('overview');
            $table->mediumText('activity');
            $table->mediumText('exclusion');
            $table->mediumText('inclusion');
            $table->mediumText('policies');
            $table->integer('guide_id')->unsigned();
            $table->integer('province_id')->unsigned();

            $table->foreign('guide_id')->references('id')->on('users');
            $table->foreign('province_id')->references('id')->on('provinces');
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
        Schema::dropIfExists('tours');
    }
}
