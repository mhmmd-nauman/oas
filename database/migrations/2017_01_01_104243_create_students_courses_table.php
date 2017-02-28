<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students_courses', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('student_id'); // 
            $table->integer('course_id'); //
            $table->enum('semester', ['Spring', 'Fall','Summer'])->nullable();
            $table->string('allocation_year')->nullable();
            $table->date('date_of_allocation')->nullable();
            $table->date('date_of_midterm')->nullable();
            $table->decimal('midterm_marks')->nullable();
            $table->date('date_of_finalterm')->nullable();
            $table->decimal('finalterm_marks')->nullable();
            $table->integer('sessional_assignment')->nullable();
            $table->integer('sessional_quiz')->nullable();
            $table->integer('sessional_presentation')->nullable();
            $table->integer('sessional_attendence')->nullable();
            $table->decimal('obtain_cgpa')->nullable();
            $table->string('obtain_grade')->nullable();
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
        Schema::drop('students_courses');
    }
}
