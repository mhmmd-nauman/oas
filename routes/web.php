<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Auth::routes();

Route::get('/notify',function(){
                session()->flash('msg','Hey, You have a message to read');
                return redirect()->to('/student');
            });
    
    Route::get('/', 'HomeController@index');
    Route::get('/visitor-export-pdf', 'VisitorController@export_visitor_pdf');

    Route::auth();
    // visitor routes
    Route::get('/visitor','VisitorController@getvisitor');
    Route::get('/visitor-export-excel','VisitorController@export_visitor');
    Route::post('/add_visitor','VisitorController@add_visitor');
    Route::get('/visitor_in_json','VisitorController@getvisitor_in_json');
    Route::post('/remove_visitor','VisitorController@remove_visitor');
    // end of visitor routes
    // student routes
    Route::get('/student','StudentController@getstudents');
    //Route::get('/student_in_json','StudentController@getstudent_in_json');
    Route::post('/add_student','StudentController@add_student');
    Route::post('/remove_student','StudentController@remove_student');
    Route::get('/student_in_json','StudentController@getstudent_in_json');
    Route::get('/student_education_in_json','StudentController@getstudent_edu_in_json');
    Route::get('/student_pre_major_subjects_in_json','StudentController@getstudent_pre_major_subjects_in_json');
    Route::get('/student_langauage_ratings_in_json','StudentController@student_langauage_ratings_in_json');
    Route::get('/student-pdf-form/{id}','StudentController@student_form_in_pdf');
    // end of student routes
    
    // department routes
    Route::get('/department','DepartmentController@index');
    Route::post('/add_department','DepartmentController@add_department');
    Route::post('/remove_department','DepartmentController@remove_department');
    Route::get('/department_in_json','DepartmentController@department_in_json');
    Route::get('/all_departments_in_json','DepartmentController@all_department_in_json');
    // end of department routes
  
    // course routes
    Route::get('/course','CourseController@index');
    Route::post('/add_course','CourseController@add_course');
    Route::post('/remove_course','CourseController@remove_course');
    Route::get('/course_in_json','CourseController@course_in_json');
    Route::get('/all_courses_in_json','CourseController@all_courses_in_json');
    Route::get('/all_student_unallocated_courses_in_json','StudentController@all_student_unallocated_courses_in_json');
    Route::get('/all_student_allocated_courses_in_json','StudentController@all_student_allocated_courses_in_json');
    Route::post('/save_course_allocation','StudentController@save_course_allocation');
    Route::post('/save_course_marks','StudentController@save_course_marks');
    Route::get('/all_student_allocated_courses_marks_in_json','StudentController@all_student_allocated_courses_marks_in_json');
    Route::get('/student-result-transcript/{id}','StudentController@student_result_transcript');
    
    //
    // end of department routes
    
    // program routes
    Route::get('/program','ProgramOfferedController@index');
    Route::post('/add_program','ProgramOfferedController@add_program');
    Route::post('/remove_program','ProgramOfferedController@remove_program');
    Route::get('/program_in_json','ProgramOfferedController@program_in_json');
    Route::get('/all_programs_in_json','ProgramOfferedController@all_programs_in_json');
    // end of program routes
    
    
    Route::get('/bear','bearController@getbear');
    Route::get('/picnic','bearController@getpicnic');
    Route::get('/fish','bearController@getfish');
    Route::get('/tree','bearController@gettree');
    Route::post('/submit','bearController@add_bear');
