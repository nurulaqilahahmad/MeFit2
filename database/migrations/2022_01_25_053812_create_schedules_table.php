<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSchedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schedules', function (Blueprint $table) {
            $table->id('scheduleID');
            $table->string('trainingSessionName')->nullable();
            $table->string('trainerFullname')->nullable();
            $table->time('trainingSessionStartTime')->nullable();
            $table->time('trainingSessionEndTime')->nullable();
            $table->string('trainingSessionDay')->nullable();
            $table->bigInteger('trainingSessionID')->nullable();
            $table->bigInteger('trainerID')->nullable();
            $table->bigInteger('memberID')->nullable();
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
        Schema::dropIfExists('schedules');
    }
}
