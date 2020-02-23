<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRateAnnualPerformanceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rate_annual_performance', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->date('date');
            $table->text('must_do_1');
            $table->text('must_do_2');
            $table->text('must_do_3');
            $table->text('must_do_4');
            $table->text('should_do_1');
            $table->text('should_do_2');
            $table->text('could_do_1');
            $table->bigInteger('monthly_rate');
            $table->text('monthly_performance_level');
            $table->unsignedBigInteger('status');
            $table->bigInteger('type');
            $table->text('note');
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('status')->references('id')->on('status')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rate_annual_performance');
    }
}
