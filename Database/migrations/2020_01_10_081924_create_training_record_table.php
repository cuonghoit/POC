<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainingRecordTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('training_record', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('course_id');
            $table->string('training_purpose');
            $table->string('training_type');
            $table->date('training_time_from');
            $table->date('training_time_to');
            $table->string('training_location');
            $table->double('course_fee');
            $table->double('traveling_cost');
            $table->double('accommodation_cost');
            $table->tinyInteger('training_approval_status');
            $table->string('training_progress');
            $table->string('assigned_by');
            $table->string('training_budget_resources');
            $table->string('training_assignment_number');
            $table->date('training_assignment_date');
            $table->integer('training_cost_estimation_number');
            $table->date('training_cost_estimation_date');
            $table->double('training_tost_for_rerund');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('course_id')->references('id')->on('course')->onDelete('cascade');
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
        Schema::dropIfExists('training_record');
    }
}
