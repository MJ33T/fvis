<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePqfDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pqf_data', function (Blueprint $table) {
            $table->id();
            $table->string('user_id')->nullable();
            $table->string('_token')->nullable();
            $table->string('user_type')->nullable();
            $table->longtext('name_major')->nullable();
            $table->string('com_name')->nullable();
            $table->string('web_url')->nullable();
            $table->longtext('buss_disc')->nullable();
            $table->string('buss_year')->nullable();
            $table->string('buss_emply')->nullable();
            $table->longtext('broker')->nullable();
            $table->longtext('length_Investment')->nullable();
            $table->longtext('assets_purch')->nullable();
            $table->longtext('licenses_permits')->nullable();
            $table->longtext('manag_exp')->nullable();
            $table->longtext('loan_req')->nullable();
            $table->longtext('money_need')->nullable();
            $table->longtext('indicate_amount')->nullable();
            $table->longtext('ROI')->nullable();
            $table->longtext('searching_funding')->nullable();
            $table->longtext('com_Investors')->nullable();
            $table->longtext('financing_request')->nullable();
            $table->longtext('collateral')->nullable();
            $table->longtext('worth_company')->nullable();
            $table->longtext('project_venture')->nullable();
            $table->string('ex2')->nullable();
            $table->string('ex3')->nullable();
            $table->string('ex4')->nullable();
            $table->string('ex5')->nullable();
            $table->string('ex6')->nullable();
            $table->string('ex7')->nullable();
            $table->string('ex8')->nullable();
            $table->boolean('status')->default(0);
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
        Schema::dropIfExists('pqf_data');
    }
}
