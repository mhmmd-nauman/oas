<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApplicanteduTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('applicantedu', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('applicant_id')->unsigned();
            $table->foreign('applicant_id')->references('id')->on('applicant');
            $table->integer('ssc_year')->nullable();
            $table->string('ssc_roll_no')->nullable();
            $table->integer('ssc_obtained')->nullable();
            $table->integer('ssc_total')->nullable();
            $table->string('ssc_exam')->nullable();
            $table->string('ssc_board')->nullable();
            $table->string('ssc_subject_group')->nullable();
            
            $table->integer('hsc_year')->nullable();
            $table->string('hsc_roll_no')->nullable();
            $table->integer('hsc_obtained')->nullable();
            $table->integer('hsc_total')->nullable();
            $table->string('hsc_exam')->nullable();
            $table->string('hsc_board')->nullable();
            $table->string('hsc_subject_group')->nullable();
            
            $table->string('hsc_opt_1_name')->nullable();
            $table->integer('hsc_opt_1_obtained')->nullable();
            $table->integer('hsc_opt_1_total')->nullable();
            
            $table->string('hsc_opt_2_name')->nullable();
            $table->integer('hsc_opt_2_obtained')->nullable();
            $table->integer('hsc_opt_2_total')->nullable();
            
            $table->string('hsc_opt_3_name')->nullable();
            $table->integer('hsc_opt_3_obtained')->nullable();
            $table->integer('hsc_opt_3_total')->nullable();
            
            $table->string('hsc_opt_4_name')->nullable();
            $table->integer('hsc_opt_4_obtained')->nullable();
            $table->integer('hsc_opt_4_total')->nullable();
            
            $table->string('hsc_opt_5_name')->nullable();
            $table->integer('hsc_opt_5_obtained')->nullable();
            $table->integer('hsc_opt_5_total')->nullable();
            
            $table->integer('grad_year')->nullable();
            $table->string('grad_roll_no')->nullable();
            $table->integer('grad_total')->nullable();
            $table->integer('grad_obtained')->nullable();
            
            $table->string('grad_exam')->nullable();
            $table->string('grad_institute')->nullable();
            $table->integer('grad_eng_obtained')->nullable();
            $table->integer('grad_eng_total')->nullable();
            $table->string('grad_opt_1_name')->nullable();
            $table->integer('grad_opt_1_obtained')->nullable();
            $table->integer('grad_opt_1_total')->nullable();
            $table->string('grad_opt_2_name')->nullable();
            $table->integer('grad_opt_2_obtained')->nullable();
            $table->integer('grad_opt_2_total')->nullable();
            $table->string('grad_opt_3_name')->nullable();
            $table->integer('grad_opt_3_obtained')->nullable();
            $table->integer('grad_opt_3_total')->nullable();
            $table->string('grad_opt_4_name')->nullable();
            $table->integer('grad_opt_4_obtained')->nullable();
            $table->integer('grad_opt_4_total')->nullable();
            $table->string('grad_opt_5_name')->nullable();
            $table->integer('grad_opt_5_obtained')->nullable();
            $table->integer('grad_opt_5_total')->nullable();
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
        Schema::drop('applicantedu');
    }
}
