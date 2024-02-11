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
        Schema::create('table_simulator', function (Blueprint $table) {
            $table->id();
            $table->string('ip');
            $table->string('simulator_name');
            $table->unsignedInteger('current_pilot');
            $table->timestamps();
            $table->foreign('current_pilot')->references('id')->on('pilots');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_simulator');
    }
};
