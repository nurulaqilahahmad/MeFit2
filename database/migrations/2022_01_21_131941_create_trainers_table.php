<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trainers', function (Blueprint $table) {
            $table->id('trainerID');    
            $table->string('trainerFullname');
            $table->string('trainerEmail')->unique();
            $table->string('trainerUsername');
            $table->string('trainerTelno');   
            $table->string('trainerPassword');
            $table->text('trainerDescription')->nullable();   
            $table->string('trainerImage')->nullable();         
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
        Schema::dropIfExists('trainers');
    }
}
