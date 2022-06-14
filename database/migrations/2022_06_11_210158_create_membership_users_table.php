<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMembershipUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('membership_users', function (Blueprint $table) {
            $table->id();
            $table->string('user_id')->nullable();
            $table->string('f_name')->nullable();
            $table->string('profile')->nullable();
            $table->string('l_name')->nullable();
            $table->string('gender')->nullable();
            $table->string('dob')->nullable();
            $table->string('acceptance_code')->nullable();
            $table->string('email')->nullable();
            $table->string('country')->nullable();
            $table->string('m_no')->nullable();
            $table->string('typeofservice')->nullable();
            $table->string('h_phone')->nullable();
            $table->longtext('add_one')->nullable();
            $table->longtext('add_two')->nullable();
            $table->string('com_name')->nullable();
            $table->string('com_regi')->nullable();
            $table->string('com_add')->nullable();
            $table->string('state')->nullable();
            $table->string('city')->nullable();
            $table->string('company_country')->nullable();
            $table->string('cell_numb')->nullable();
            $table->string('com_phone')->nullable();
            $table->string('exe_code')->nullable();
            $table->string('com_fax')->nullable();
            $table->string('com_email')->nullable();
            $table->string('web_url')->nullable();
            $table->longtext('message')->nullable();
            $table->string('transaction_id')->nullable();
            $table->string('payment_status')->nullable();
            $table->string('membership_plan_id')->nullable();
            $table->string('plan_name')->nullable();
            $table->string('plan_fee')->nullable();
            $table->string('membership_time')->nullable();
            $table->string('monthly_fix_income')->nullable();
            $table->string('plan_status')->nullable();
            $table->string('annual_membership_fee')->nullable();
            $table->string('investment')->nullable();
            $table->string('investment_duration')->nullable();
            $table->string('membership_plan_status')->nullable();
            $table->string('monthly_fix_income_status')->nullable();
            $table->string('investment_status')->nullable();
            $table->boolean('status')->default(0);
            $table->string('transaction_code')->nullable();
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
        Schema::dropIfExists('membership_users');
    }
}
