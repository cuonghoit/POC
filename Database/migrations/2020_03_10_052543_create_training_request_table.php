<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainingRequestTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('training_request', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->text('program_title');
            $table->text('training_purpose');
            $table->text('training_participant');
            $table->text('course_content');
            $table->text('duration');
            $table->text('venue');
            $table->text('training_provider');
            $table->text('supporting_document');
            $table->text('total_estimated_cost');
            $table->text('tuition_fee');
            $table->text('logistic_fee');
            $table->text('commitment');
            $table->text('remark');            
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('training_request');
    }
}
