<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembershipPlansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('membership_plans', function (Blueprint $table) {
            $table->id();
            $table->string('plan_name')->nullable();
            $table->string('plan_fee')->nullable();
            $table->string('membership_time')->nullable();
            $table->string('monthly_fix_income')->nullable();
            $table->string('payment_request_form')->nullable();
            $table->string('membership_plan_status')->nullable();
            $table->string('monthly_fix_income_status')->nullable();
            $table->string('annual_membership_fee')->nullable();
            $table->string('investment')->nullable();
            $table->string('investment_status')->nullable();
            $table->string('investment_duration')->nullable();
            $table->bigInteger('position');
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
        Schema::dropIfExists('membership_plans');
    }
}
