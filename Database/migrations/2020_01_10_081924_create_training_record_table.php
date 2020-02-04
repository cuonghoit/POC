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
            $table->double('traveling_cost')->nullable($value = '0');
            $table->double('accommodation_cost')->nullable($value = '0');
            $table->tinyInteger('training_approval_status')->nullable($value = '0');
            $table->string('training_progress')->nullable($value = 'N/A');
            $table->string('assigned_by')->nullable($value = 'N/A');
            $table->string('training_budget_resources')->nullable($value = 'N/A');
            $table->string('training_assignment_number')->nullable($value = 'N/A');
            $table->date('training_assignment_date')->nullable();
            $table->integer('training_cost_estimation_number')->nullable($value = '1');
            $table->date('training_cost_estimation_date')->nullable();
            $table->double('training_tost_for_rerund')->nullable($value = '1');
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
