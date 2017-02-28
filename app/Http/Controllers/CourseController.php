<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
use App\Http\Requests;
use Auth;

class CourseController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        $courses = Course::all();
        $report_title = "Courses Information";
        return view('courses.list_courses', compact('courses'),['report_title'=>$report_title]);
    }
    
    public function add_course(Request $request){
        
        if($request->get('course_edit_id')){
            $course =  Course::find($request->get('course_edit_id'));
        }else{
            $course = new Course();
        }
        $course->name = $request->get('name');
        $course->code  = $request->get('code');
        $course->credit_hours  = $request->get('credit_hours');
        $course->status    = $request->get('status');
        
        //$department->entered_id = Auth::user()->id;
        //later needs to be fix when we have hod roles
        //$department->hod_id   = Auth::user()->id;
        $course->save();
        return redirect('course?success=1&message=Course was successfully added!')->withInput() ;
        //$request->session()->flash('flash_message', 'Course was successful added!');
        
        //return back();
    }
    public function remove_course(Request $request){
         Course::destroy($request->course_id);
         //$request->session()->flash('flash_message', 'Course was successful removed!');
         return redirect('course?success=1&message=Course was successfully removed!')->withInput() ;
        //return back();
    }
    public function course_in_json(Request $request){
        return Course::find($request->id)->toJson();
    }
    public function all_courses_in_json(){
        return Course::where("status","=","Active")->get()->toJson();
    }
}