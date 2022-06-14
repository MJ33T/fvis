<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCisDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cis_data', function (Blueprint $table) {
            $table->id();
            $table->string('user_id')->nullable();
            $table->string('user_type')->nullable();
            $table->string('username')->nullable();
            $table->string('f_name')->nullable();
            $table->string('l_name')->nullable();
            $table->string('address')->nullable();
            $table->string('mobile')->nullable();
            $table->string('h_tell_no')->nullable();
            $table->string('fax_no')->nullable();
            $table->string('email')->nullable();
            $table->string('lang_spoke')->nullable();
            $table->string('dob')->nullable();
            $table->string('birth_place')->nullable();
            $table->string('social_security_no')->nullable();
            $table->string('citizenship')->nullable();
            $table->string('issuing_authority')->nullable();
            $table->string('date_issue')->nullable();
            $table->string('date_expiry')->nullable();
            $table->string('buss_activities')->nullable();
            $table->string('buss_name')->nullable();
            $table->string('place_activities')->nullable();
            $table->string('bank_name')->nullable();
            $table->string('bank_branch')->nullable();
            $table->string('acc_name')->nullable();
            $table->string('acc_no')->nullable();
            $table->string('bank_add')->nullable();
            $table->string('acc_siganorty')->nullable();
            $table->string('swift_code')->nullable();
            $table->string('IBAN_no')->nullable();
            $table->string('bank_officer_name')->nullable();
            $table->string('bank_tell_no')->nullable();
            $table->string('sing_speak_eng')->nullable();
            $table->string('translator_name')->nullable();
            $table->string('translator_tell')->nullable();
            $table->string('translator_email')->nullable();
            $table->string('full_name')->nullable();
            $table->string('cpmpany')->nullable();
            $table->string('com_address')->nullable();
            $table->string('com_tell')->nullable();
            $table->string('com_fax')->nullable();
            $table->string('com_email')->nullable();
            $table->string('b_name')->nullable();
            $table->string('br_name')->nullable();
            $table->string('b_add')->nullable();
            $table->string('b_acc_name')->nullable();
            $table->string('b_acc_no')->nullable();
            $table->string('b_swift_code')->nullable();
            $table->string('iban_aba_no')->nullable();
            $table->string('acc_signatory1')->nullable();
            $table->string('acc_signatory2')->nullable();
            $table->string('b_officer1')->nullable();
            $table->string('b_officer2')->nullable();
            $table->string('b_tell_no')->nullable();
            $table->string('b_fax_no')->nullable();
            $table->string('pass_no')->nullable();
            $table->string('country')->nullable();
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
        Schema::dropIfExists('cis_data');
    }
}
