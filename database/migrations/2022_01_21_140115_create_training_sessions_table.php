<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainingSessionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('training_sessions', function (Blueprint $table) {
            $table->id('trainingSessionID');
            $table->string('trainingSessionName')->nullable();
            $table->text('trainingSessionDescription')->nullable();
            $table->bigint('trainerID')->nullable();
            $table->string('trainerFullname')->nullable();
            $table->string('trainerTelno')->nullable();
            $table->double('trainingSessionCost')->nullable();
            $table->time('trainingSessionStartTime')->nullable();
            $table->time('trainingSessionEndTime')->nullable();
            $table->string('trainingSessionDay')->nullable();
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
        Schema::dropIfExists('training_sessions');
    }
}
