<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->id('memberID');    
            $table->string('memberFullname');
            $table->string('memberEmail')->unique();
            $table->string('memberUsername');
            $table->string('memberTelno');   
            $table->string('memberPassword');
            $table->text('memberDescription')->nullable();   
            $table->string('memberImage')->nullable();
            $table->bigInteger('membershipPlanID')->nullable();
            $table->bigInteger('trainingSessionID')->nullable();
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
        Schema::dropIfExists('members');
    }
}
