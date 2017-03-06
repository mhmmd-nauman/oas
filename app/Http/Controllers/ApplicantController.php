<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB; 
use App\Http\Requests;
use App\Student;
use App\Course;
use App\StudentEducation;
use App\StudentPreviousMajorSubjects;
use App\StudentLanguageRating;
use App\ProgramOffered;
use App\Http;
use App;
use Auth;
use Excel;
use PDF;
use SnappyPDF;
use Session;

class ApplicantController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        
    }
    
    public function save_applicant_personal_info(Request $request){
        
    }
    public function save_applicant_educational_info(Request $request){
        
    }
    public function save_applicant_miscellaneous_info(Request $request){
        
    }
    public function save_applicant_programms_info(Request $request){
        
    }
    public function view_applicant_all_applications(Request $request){
        
    }
    
    public function add_applicant(Request $request){
        
        if($request->student_id_edit){
            $student = Student::find($request->student_id_edit);
            $student_program_code = $student->student_program->code;
        }else{
            $student = new Student();
            $selected_program =ProgramOffered::find($request->get('program'));
            $student_program_code = $selected_program->code;
        }
        
        if($student->roll_number == "" && $request->get('admission_year') != ""){
            $results = Student::where("admission_year","=",$request->get('admission_year'))
                    ->where('roll_number','like',"%$student_program_code%")
                    ->where('semester','=',$request->get('semester'))
                    //->orderBy('id', 'desc')
                    ->count();
            //echo "here $results";
            //exit;
            $semester_code = "";
            switch($request->get('semester')){
                case"Spring":
                    $semester_code = 1;
                    break;
                case"Fall":
                    $semester_code = 2;
                    break;
                default:
                    $semester_code = 3;
                    
            }
            if(empty($results)){
                // issue the first
                 $next_roll_number = $student_program_code.substr($request->get('admission_year'), -2).$semester_code."0001";
                //exit;
            }else{
                 $last_roll_number = Student::where("admission_year","=",$request->get('admission_year'))
                    ->where('roll_number','like',"%$student_program_code%")
                   // ->where('roll_number','IS','NULL') 
                    ->where('semester','=',$request->get('semester'))     
                    ->orderBy('id', 'desc')->first()->roll_number;
                 $last_four_characters = intval(substr($last_roll_number, -4));
                 $last_four_characters++;
                 //echo strlen($last_four_characters);
                 $next_roll_number = "";
                 switch (strlen($last_four_characters)){
                     case 1:
                            $next_roll_number .="000".$last_four_characters; 
                         break;
                     case 2:
                            $next_roll_number .="00".$last_four_characters; 
                         break;
                     case 3:
                            $next_roll_number .="0".$last_four_characters; 
                     break;
                    default :
                            $next_roll_number .= $last_four_characters;
                     break;
                 }
                $next_roll_number = $student_program_code.substr($request->get('admission_year'), -2).$semester_code.$next_roll_number;
            }
            
            $student->roll_number = $next_roll_number;
        }
        $student->visitor_id    = $request->get('visitor_id');
        $student->first_name    = $request->get('first_name');
        $student->last_name     = $request->get('last_name');
        $student->program_id       = $request->get('program');
        $student->semester      = $request->get('semester');
        $student->admission_year = $request->get('admission_year');
        $student->mobile        = $request->get('mobile');
        //$student->semester = $request->get('semester');
        $student->father_name   = $request->get('father_name');
        $student->mobile        = $request->get('mobile');
        $student->address       = $request->get('address');
        $student->father_occupation = $request->get('father_occupation');
        $student->email         = $request->get('email');
        $student->gender        = $request->get('gender');
        $student->marital_status = $request->get('marital_status');
        $student->date_of_birth             = date("Y-m-d",  strtotime($request->get('date_of_birth')));
        $student->country_of_citizenship    = $request->get('country_of_citizenship');
        $student->cnic                      = $request->get('cnic');
        $student->phone                     = $request->get('phone');
        $student->postal_address            = $request->get('postal_address');
        // end of tab 1
        
        $student->candidate_for_any_degree_title = $request->get('candidate_for_any_degree_title');
        
        // end of tab 2
        $student->years_of_english_medium = $request->get('years_of_english_medium');
        $student->first_language = $request->get('first_language');
        $student->honors_awards = $request->get('honors_awards');
        $student->fav_activities = $request->get('fav_activities');
        // end of tab 3
        $student->applicant_name = $request->get('applicant_name');
        $student->privately_supported_student = $request->get('privately_supported_student');
        $student->sponsor_name = $request->get('sponsor_name');
        $student->sponsor_relation = $request->get('sponsor_relation');
        $student->sponsor_sign_date = date("Y-m-d",  strtotime($request->get('sponsor_sign_date')));
        // end of tab 4
        $student->admission_status = $request->get('admission_status');
        $admission_date = date("Y-m-d",  strtotime($request->get('admission_date')));
        if($request->get('admission_status') == "Accepted" && $request->get('admission_date') == ""){
            $admission_date = date("Y-m-d");
        }
        $student->admission_date = $admission_date;
        $student->interviewed_by = $request->get('interviewed_by');
        $student->chairman_admission_committee = $request->get('chairman_admission_committee');
        $student->fee_code = $request->get('fee_code');
        $student->fee_code_date = date("Y-m-d",  strtotime($request->get('fee_code_date')));
        // end of tab 5
        $student->dealtby_id = Auth::user()->id;
        $student->dealt_by   = Auth::user()->name;
        $student->save();
        // update visitor status
        if($student->visitor_id > 0){
            $rel_visitor = Visitor::find($student->visitor_id);
            $rel_visitor->status = $request->get('admission_status');
            $rel_visitor->save();
        }
        
        // update education table
        $edu_data =  explode(",",$request->student_education_ids);
        if(!empty($edu_data[0])){
            // update exisitng records
            $i=0;
            foreach($edu_data as $id){
                if($id > 0){
                    $st_edu = StudentEducation::find($id);
                    $st_edu->institution_name   = $request->name_of_institution[$i];
                    $st_edu->location = $request->location[$i];
                    $st_edu->date_of_entering   = $request->date_of_entering[$i];
                    $st_edu->date_of_leaving    = $request->date_of_leaving[$i];
                    $st_edu->degree_receive     = $request->certificate_or_diploma[$i];
                    $st_edu->grade              = $request->grade_or_division[$i];
                    $st_edu->save();
                }
                $i++;
            }
            // undergraduaate subjects
            $major_sub_undergraduate_data =  explode(",",$request->student_major_sub_undergraduate_ids);
            $i=0;
            foreach($major_sub_undergraduate_data as $id){
                if($id > 0){
                    $st_pre_sub = StudentPreviousMajorSubjects::find($id);
                    $st_pre_sub->subject_name = $request->major_in_undergraduate[$i];
                    //$st_pre_sub->subject_type = 'undergraduate';
                    $st_pre_sub->save();
                }
                $i++;
            }
            // graduaate subjects
            $major_sub_graduate_data =  explode(",",$request->student_major_sub_graduate_ids);
            $i=0;
            foreach($major_sub_graduate_data as $id){
                if($id > 0){
                    $st_pre_sub = StudentPreviousMajorSubjects::find($id);
                    $st_pre_sub->subject_name = $request->major_in_graduate[$i];
                    //$st_pre_sub->subject_type = 'undergraduate';
                    $st_pre_sub->save();
                }
                $i++;
            }
            // handle language rating
            $language_rating_data =  explode(",",$request->student_language_ratings_ids);
            $i=0;
            foreach($language_rating_data as $id){
                if($id > 0){
                    $st_pre_sub = StudentLanguageRating::find($id);
                    $st_pre_sub->language_name  = $request->name_of_language[$i];
                    $st_pre_sub->reading        = $request->reading_level[$i];
                    $st_pre_sub->writing        = $request->writing_level[$i];
                    $st_pre_sub->speaking       = $request->speaking_level[$i];
                    $st_pre_sub->listening      = $request->listening_level[$i];
                    $st_pre_sub->student_id     = $student->id;
                    $st_pre_sub->save();
                }
                $i++;
            }
            
        }else{
            // new record
            $i=0;
            foreach($request->name_of_institution as $name_of_institution){

                $st_edu = new StudentEducation();
                $st_edu->institution_name = $name_of_institution;
                $st_edu->location = $request->location[$i];
                $st_edu->date_of_entering = $request->date_of_entering[$i];
                $st_edu->date_of_leaving = $request->date_of_leaving[$i];
                $st_edu->degree_receive = $request->certificate_or_diploma[$i];
                $st_edu->grade = $request->grade_or_division[$i];
                $st_edu->student_id = $student->id;
                $st_edu->save();
                $i++;
            }
            // insert previouus major subjects StudentPreviousMajorSubjects
            $i=0;
            foreach($request->major_in_undergraduate as $major_in_undergraduate){
                $st_pre_sub = new StudentPreviousMajorSubjects();
                $st_pre_sub->subject_name = $major_in_undergraduate;
                $st_pre_sub->subject_type = 'undergraduate';
                $st_pre_sub->student_id = $student->id;
                $st_pre_sub->save();
                $i++;
            }
            $i=0;
            foreach($request->major_in_graduate as $major_in_graduate){
                $st_pre_sub = new StudentPreviousMajorSubjects();
                $st_pre_sub->subject_name  = $major_in_graduate;
                $st_pre_sub->subject_type = 'graduate';
                $st_pre_sub->student_id = $student->id;
                $st_pre_sub->save();
                $i++;
            }
            $i=0;
            // insert student languages data
            foreach($request->name_of_language as $name_of_language){
                $st_pre_sub = new StudentLanguageRating();
                $st_pre_sub->language_name  = $name_of_language;
                $st_pre_sub->reading = $request->reading_level[$i];
                $st_pre_sub->writing = $request->writing_level[$i];
                $st_pre_sub->speaking = $request->speaking_level[$i];
                $st_pre_sub->listening = $request->listening_level[$i];
                $st_pre_sub->student_id = $student->id;
                $st_pre_sub->save();
                $i++;
            }
        }
        
        //$request->session()->flash('flash_message', 'Visitor was successful added!');
        //var_dump(session()->all());
       // exit;
         return redirect('student?success=1&message=Student was successful added!')->withInput() ;
         //return redirect()->back()->withInput();
    }
    public function remove_student(Request $request){
        $request->student_id;
        Student::destroy($request->student_id);
        return redirect('student?success=1&message=Student was successfully removed!')->withInput() ;
        //$request->session()->flash('flash_message', 'Visitor was successful removed!');
        //return back();
    }
    
}