<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('applications', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('program_id')->unsigned();
            $table->foreign('program_id')->references('id')->on('programs_offered');
            $table->integer('application_fee')->nullable();
            $table->integer('ap_fee_challan_nr')->nullable();
            $table->integer('admission_fee')->nullable();
            $table->integer('ad_fee_challan_nr')->nullable();
            $table->decimal('merit_score',10,3)->nullable();
            $table->string('serial_no')->nullable();
            $table->integer('ad_fee_discount_type')->nullable();
            $table->boolean('ad_fee_discounted')->nullable();
            $table->integer('dept_test_marks')->nullable();
            $table->enum('application_status', ['Challan Printed','Application Fee Received','Admission Fee Challan Printed'])->nullable();
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->softDeletes();
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
        //
        Schema::drop('applications');
    }
}
