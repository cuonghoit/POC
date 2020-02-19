<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainningImplementationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('training_implementation', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('program_title');
            $table->string('training_purpose');
            $table->string('course_content');
            $table->string('training_provider');
            $table->longText('supporting_document');
            $table->double('total_estimated_cost');
            $table->string('budget_cost_code');
            $table->double('tuition_fee');
            $table->string('taxes')->nullable();
            $table->double('logistic_fee');
            $table->double('other_fees');
            $table->longText('commitment');
            $table->longText('remark');
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
        Schema::dropIfExists('trainning_implementation');
    }
}
