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
        Schema::create('time_lap', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('session_id');
            $table->decimal('session_1', 10, 3);
            $table->decimal('session_2', 10, 3);
            $table->decimal('session_3', 10, 3);
            $table->decimal('finish_time', 10, 3);
            $table->decimal('max_speed', 3, 1);
            $table->timestamps();
            $table->foreign('session_id')->references('id')->on('sessions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('time_lap');
    }
};
