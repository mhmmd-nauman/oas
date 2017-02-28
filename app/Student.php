<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Student extends Model {
    
    protected $table = 'students';
    // DEFINE RELATIONSHIPS --------------------------------------------------
    
    public function fish() {
        return $this->hasOne('App\Fish','foreign_key', 'local_key'); 
    }
    public function student_program()
    {
        return $this->hasOne('App\ProgramOffered','id','program_id'); 
    }
    public function student_educations() {
        return $this->hasMany('App\StudentEducation');
    }
    
    public function student_pre_major_subjects() {
        return $this->hasMany('App\StudentPreviousMajorSubjects');
    }
    
    public function student_language_ratings() {
        return $this->hasMany('App\StudentLanguageRating');
    }
    
    public function courses() {
        return $this->belongsToMany('App\Course', 'students_courses', 'student_id', 'course_id')
                    ->withPivot('semester', 
                            'allocation_year',
                            'date_of_allocation',
                            'date_of_midterm',
                            'midterm_marks',
                            'date_of_finalterm',
                            'finalterm_marks',
                            'sessional_assignment',
                            'sessional_quiz',
                            'sessional_presentation',
                            'sessional_attendence',
                            'obtain_cgpa',
                            'obtain_grade'
                            )
                    ->withTimestamps();
    }

}