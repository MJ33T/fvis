<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvestmentBlocksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('investment_blocks', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('currency')->nullable();
            $table->string('price')->nullable();
            $table->string('discription')->nullable();
            $table->string('offers')->nullable();
            $table->string('one_time_investors_introduction_fee')->nullable();
            $table->string('investment_monthly_income')->nullable();
            $table->string('extension_option')->nullable();
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
        Schema::dropIfExists('investment_blocks');
    }
}
