<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB; 
use App\Http\Requests;
use App\Visitor;
use App\Http;
use App;
use Auth;
use Excel;
use PDF;

class VisitorController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){

    }
    public function getvisitor(Request $request){
        
        $user_id = Auth::user()->id;
        switch($request->load){
            case'yesterday':
                $report_title = 'Yesterday - Mine';
                $students = Visitor::where('dealtby_id','=',$user_id)
                    ->where('status','=','Info')
                    ->whereDate('created_at', '=', date('Y-m-d',  strtotime("-1 day")))
                    ->orderBy('id', 'desc') 
                    ->get();
                break;
            case'last7day':
                $report_title = 'Last 7 Days - Mine';
                $students = Visitor::where('dealtby_id','=',$user_id)
                        ->where('status','=','Info')
                        ->whereDate('created_at', '>=', date('Y-m-d',  strtotime("-30 day")))
                        ->orderBy('id', 'desc')
                        ->get();
                break;
            case'last30day':
                $report_title = 'Last 30 Days - Mine';
                $students = Visitor::where('dealtby_id','=',$user_id)
                        ->where('status','=','Info')
                        ->whereDate('created_at', '>=', date('Y-m-d',  strtotime("-7 day")))
                        ->orderBy('id', 'desc')
                        ->get();
                break;
            case'viewalldata':
                $report_title = 'View All Data';
                $students = Visitor::where('status','=','Info')
                        ->orderBy('id', 'desc')
                        ->get();
                break;
            default:
                $report_title = 'Today - Mine';
                $students = Visitor::where('dealtby_id','=',$user_id)
                        ->where('status','=','Info')
                        ->whereDate('created_at', '=', date('Y-m-d'))
                        ->orderBy('id', 'desc')
                        ->get();
        }
        //$students = DB::table('students')->get();
        return view('visitors.list_visitors', compact('students'),['report_title'=>$report_title]);
    }
    public function export_visitor_pdf(){
        $user_id = Auth::user()->id;
        $students = Visitor::where('dealtby_id','=',$user_id)
                ->get();
        $pdf = PDF::loadView('visitors.list_visitors_pdf', compact('students'));
        return $pdf->download('VisitrsReport.pdf');
    }
    public function export_visitor(Request $request){
        //http://laraveldaily.com/laravel-excel-export-eloquent-models-results-easily/
        $user_id = Auth::user()->id;
        $report_title = 'Yesterday - Mine';
        switch($request->load){
            case'yesterday':
                $report_title = 'Yesterday - Mine';
                $students = Visitor::where('dealtby_id','=',$user_id)
                ->where('status','=','Info')
                ->whereDate('created_at', '=', date('Y-m-d',  strtotime("-1 day")))
                ->get();
                break;
            case'last7day':
                $report_title = 'Last 7 Days - Mine';
                $students = Visitor::where('dealtby_id','=',$user_id)
                        ->where('status','=','Info')
                        ->whereDate('created_at', '>=', date('Y-m-d',  strtotime("-30 day")))
                        ->orderBy('id', 'desc')
                        ->get();
                break;
            case'last30day':
                $report_title = 'Last 30 Days - Mine';
                $students = Visitor::where('dealtby_id','=',$user_id)
                        ->where('status','=','Info')
                        ->whereDate('created_at', '>=', date('Y-m-d',  strtotime("-7 day")))
                        ->orderBy('id', 'desc')
                        ->get();
                break;
            case'viewalldata':
                $report_title = 'View All Data';
                $students = Visitor::where('dealtby_id','=',$user_id)
                        ->orderBy('id', 'desc')
                        ->get();
                break;
            default:
                $report_title = 'Today - Mine';
               $students = Visitor::where('dealtby_id','=',$user_id) 
                        ->where('status','=','Info')
                        ->whereDate('created_at', '=', date('Y-m-d'))
                        ->orderBy('id', 'desc')
                        ->get();
        }
        
        //$students = Visitor::where('dealtby_id','=',$user_id) 
                        //->where('status','=','Info')
                        //->whereDate('created_at', '=', date('Y-m-d'))
                        //->orderBy('id', 'desc')
                        //->get();
        
        //print_r($students->toArray());
        //exit;
        $excel = App::make('excel');
        
        // incase we dont need headers
        //$excel->fromArray($data, null, 'A1', false, false);
        
        Excel::create("$report_title", function($excel) use($students) {
            $excel->sheet("Sheet One", function($sheet) use($students) {
                //$sheet->fromArray($students);
                $sheet->row(1, array(
                        'ID','Date', 'First Name','Last Name','Contact','Program','Call/Visit','Information Source','Dealt By','Admission Status'
                   ));
                $sheet->row(1, function($row) {
                    // call cell manipulation methods
                    $row->setBackground('#FFFF00');
                });
                $i=2;
                foreach($students as $student){
                    $sheet->row($i, array(
                        $i - 1,
                        date("d/m/Y",strtotime($student->created_at)),
                        $student->first_name,
                        $student->last_name,
                        $student->mobile,
                        $student->student_program->program_name,
                        $student->visit_type,
                        $student->information_source,
                        $student->dealt_by,
                        $student->status
                    ));
                    $i++;
                }
            });
        })->export('xls');
    }
    public function getvisitor_in_json(Request $request){
        return Visitor::find($request->id)->toJson();
    }
    public function add_visitor(Request $request){
        //print_r($request->get('visitor_edit_id'));
        if($request->get('visitor_edit_id')){
            $visitor =  Visitor::find($request->get('visitor_edit_id'));
        }else{
            $visitor = new Visitor();
        }
        $visitor->first_name = $request->get('first_name');
        $visitor->last_name  = $request->get('last_name');
        $visitor->program_id    = $request->get('program');
        $visitor->visit_type = $request->get('visit_type');
        $visitor->information_source = $request->get('information_source');
        $visitor->mobile     = $request->get('mobile');
        $visitor->dealtby_id = Auth::user()->id;
        $visitor->dealt_by   = Auth::user()->name;
        $visitor->status = 'Info';
        $visitor->save();
        //$request->session()->flash('flash_message', 'Visitor was added successfully!');
        return redirect('visitor?success=1&message=Visitor was successful added!')->withInput() ;
        //return redirect('visitor');
        //return back();
    }
    public function remove_visitor(Request $request){
         Visitor::destroy($request->visitor_id);
         //$request->session()->flash('flash_message', 'Visitor was successful removed!');
         return redirect('visitor?success=1&message=Visitor was removed successfully!')->withInput() ;
         //return back();
    }
}