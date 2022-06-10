<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_lists', function (Blueprint $table) {
            $table->id();
            $table->string('user_code')->nullable();
            $table->string('f_name')->nullable();
            $table->string('l_name')->nullable();
            $table->string('email')->nullable();
            $table->string('password')->nullable();
            $table->string('agree')->nullable();
            $table->string('user_type')->nullable();
            $table->string('temp_code')->nullable();
            $table->string('email_token')->nullable();
            $table->string('email_verify')->nullable();
            $table->string('acceptance_code')->nullable();
            $table->string('m_no')->nullable();
            $table->string('dob')->nullable();
            $table->string('gender')->nullable();
            $table->string('h_phone')->nullable();
            $table->string('country')->nullable();
            $table->string('typeofservice')->nullable();
            $table->string('add_one')->nullable();
            $table->string('add_two')->nullable();
            $table->string('status')->nullable();
            $table->string('account')->nullable();
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
        Schema::dropIfExists('user_lists');
    }
}
