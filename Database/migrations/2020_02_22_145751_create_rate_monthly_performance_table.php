<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRateMonthlyPerformanceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rate_monthly_performance', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBiginteger('user_id');
            $table->string('objective_category');
            $table->string('objective_and_milestone');
            $table->string('result');
            $table->string('achieve');
            $table->string('note');
            $table->unsignedBiginteger('status');
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
        Schema::dropIfExists('rate_monthly_performance');
    }
}
