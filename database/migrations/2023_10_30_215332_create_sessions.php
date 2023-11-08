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
        Schema::create('sessions', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('car_id');
            $table->unsignedInteger('pilot_id');
            $table->unsignedInteger('event_id');
            $table->unsignedInteger('racetrack_id');
            $table->unsignedInteger('session_type_id');
            $table->foreign('car_id')->references('id')->on('cars')->onDelete('cascade');
            $table->foreign('pilot_id')->references('id')->on('pilots')->onDelete('cascade');
            $table->foreign('event_id')->references('id')->on('events')->onDelete('cascade');
            $table->foreign('racetrack_id')->references('id')->on('racetracks')->onDelete('cascade');
            $table->foreign('session_type_id')->references('id')->on('session_types')->onDelete('cascade');
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
        Schema::dropIfExists('sessions');
    }
};
