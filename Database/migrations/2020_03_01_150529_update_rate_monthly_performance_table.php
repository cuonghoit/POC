<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateRateMonthlyPerformanceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(Schema::hasTable('rate_monthly_performance')) {
            if(!Schema::hasColumn('rate_monthly_performance', 'monthly_rate')) {
                Schema::table('rate_monthly_performance', function (Blueprint $table)
                {
                    $table->bigInteger('monthly_rate');
                });
            }
            if(!Schema::hasColumn('rate_monthly_performance', 'monthly_performance_level')) {
                Schema::table('rate_monthly_performance', function (Blueprint $table)
                {
                    $table->text('monthly_performance_level');
                });
            }
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
