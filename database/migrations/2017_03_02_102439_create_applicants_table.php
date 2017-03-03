<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApplicantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('applicant', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('email')->nullable();
            $table->string('father_name')->nullable();
            $table->string('father_occupation')->nullable();
            $table->enum('semester', ['Spring', 'Fall'])->nullable();
            $table->integer('admission_year')->nullable();
            $table->enum('gender', ['Male', 'Female'])->nullable();
            $table->string('reg_no')->nullable();
            $table->date('date_of_birth')->nullable();
            $table->string('cnic')->nullable();
            $table->text('postal_address')->nullable();
            $table->text('address')->nullable();
            $table->string('phone')->nullable();
            $table->string('mobile')->nullable();
            $table->string('pic')->nullable();
            $table->string('blood_group')->nullable();
            $table->string('religion')->nullable();
            $table->string('nationality')->nullable();
            $table->string('is_hafiz_e_quran')->nullable();
            $table->string('is_ncc_wg')->nullable();
            $table->string('domicile_district')->nullable();
            $table->string('city')->nullable();
            $table->string('g_name')->nullable();
            $table->string('g_cnic')->nullable();
            $table->string('g_phone')->nullable();
            $table->string('g_monthly_income')->nullable();
            $table->string('g_profession')->nullable();
            $table->string('g_address')->nullable();
            $table->string('g_city')->nullable();
            $table->string('g_relation')->nullable();
            $table->boolean('financial_help')->nullable();
            $table->boolean('hostel')->nullable();
            $table->boolean('quota_fata')->nullable();
            $table->boolean('quota_baluchistan')->nullable();
            $table->boolean('quota_ajk')->nullable();
            $table->boolean('quota_op')->nullable();
            $table->boolean('quota_army')->nullable();
            $table->boolean('quota_iub_tchr_emp')->nullable();
            $table->boolean('special_person')->nullable();
            $table->boolean('sports')->nullable();
            $table->boolean('personal_info_locked')->nullable();
            $table->string('particular_test_name')->nullable();
            $table->integer('particular_test_obtained')->nullable();
            $table->string('particular_test_roll_no')->nullable();
            $table->integer('particular_test_total')->nullable();
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
        Schema::drop('applicant');
    }
}
