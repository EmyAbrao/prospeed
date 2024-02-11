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
        Schema::create('table_pay_history', function (Blueprint $table) {
            $table->id();
            $table->dateTime('pay_date');
            $table->double('purchase_value', 10 , 2)->default(00);
            $table->enum('credit_type', ['pay', 'bonus']);
            $table->unsignedInteger('purchased_time');
            $table->unsignedInteger('employee_id');
            $table->unsignedInteger('pilot_id');
            $table->timestamps();
            $table->foreign('employee_id')->references('id')->on('users');
            $table->foreign('pilot_id')->references('id')->on('pilots');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_pay_history');
    }
};
