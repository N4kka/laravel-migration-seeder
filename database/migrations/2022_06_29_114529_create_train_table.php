<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id()->uniqid;
            $table->string('company', 12);
            $table->string('train_type', 20);
            $table->tinyInteger('train_stops');
            $table->string('departure_station', 30);
            $table->string('arrival_station', 30);
            $table->time('departure_time', 0);
            $table->time('arrival_time', 0);
            $table->tinyInteger('train_code');
            $table->tinyInteger('carriages_number');
            $table->string('class_type', 10);
            $table->integer('passengers_number');
            $table->boolean('on_time')->default(0);
            $table->boolean('cancelled')->default(0);
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
        Schema::dropIfExists('trains');
    }
}
