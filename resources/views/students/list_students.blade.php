@extends('layouts.app')
@section('content')
@include('partials.messages')
<style type="text/css">
        .table-hover tbody tr:hover td, .table-hover tbody tr:hover th {
            background-color:#d4d4d4;
          }  
        
    </style>
        <div class=" container" >
            <div class="row" style="margin: 0 0 0 0px;">
                <div class=" col-md-6">
                    <h3>Student Information - {{$report_title}}</h3>
                </div>
                <div class="col-md-6">
                    <div class = "dropdown pull-right">
   
                        <button type = "button" class = "btn btn-success dropdown-toggle" id = "dropdownMenu1" data-toggle = "dropdown">
                           View Report
                           <span class = "caret"></span>
                        </button>
                        <ul class = "dropdown-menu" role = "menu" aria-labelledby = "dropdownMenu1">
                            <li role = "presentation">
                               <a role = "menuitem" tabindex = "-1" href = "{{url('/student')}}">Today</a>
                            </li>

                            <li role = "presentation">
                               <a role = "menuitem" tabindex = "-1" href = "{{url('/student?load=yesterday')}}">Yesterday</a>
                            </li>
                            <li role = "presentation">
                               <a role = "menuitem" tabindex = "-1" href = "{{url('/student?load=last7day')}}">Last 7 Days</a>
                            </li>
                            <li role = "presentation">
                               <a role = "menuitem" tabindex = "-1" href = "{{url('/student?load=last30day')}}">Last 30 Days</a>
                            </li>

                            <li role = "presentation" class = "divider"></li>

                            <li role = "presentation">
                               <a role = "menuitem" tabindex = "-1" href = "{{url('/student?load=today')}}">Only Today - Mine</a>
                            </li>
                            <li role = "presentation">
                               <a role = "menuitem" tabindex = "-1" href = "{{url('/student?load=viewalldata')}}">View All Data</a>
                            </li>
                         </ul>
                    </div>&nbsp;
                    <div class = "dropdown pull-right">
   
                        <button type = "button" class = "btn btn-success dropdown-toggle" id = "dropdownMenu1" data-toggle = "dropdown">
                           Export
                           <span class = "caret"></span>
                        </button>
                        <ul class = "dropdown-menu" role = "menu" aria-labelledby = "dropdownMenu1">
                            <li role = "presentation">
                                <a  href="{{url('/visitor-export-excel')}}" target="_blank" role = "menuitem" tabindex = "-1">Export to Excel</a>
                            </li>
                            <li role = "presentation" class = "divider"></li>
                            <li role = "presentation">
                               <a role = "menuitem" tabindex = "-1" href="{{url('/visitor-export-pdf')}}" target="_blank" >Export to PDF</a>
                            </li>
                         </ul>
                    </div>
                    &nbsp;
                        <button type="button" class="btn btn-danger pull-right" onclick="crearform()" data-toggle="modal" data-target="#myModal">Insert New Student</button>
                        
                        
                    
                </div>
            </div>
            <div class="row">
                <br>
            </div>
            <div class="row">
               <table class=" display" id="student_table" >
                   <thead> 
                        <tr>
                            <th style=" width: 5%;">App#</th>
                            <th style=" width: 10%;">Date</th>
                            <th>Name</th>
                            <th style=" width: 10%;">Roll#</th>
                            <th style=" width: 5%;">Program</th>
                            <th style=" width: 10%;">Admission</th>
                            <!--
                            <th>Entered By</th>
                            -->
                            <th style=" width: 10%;">Status</th>
                            <th style=" width: 10%;">Actions</th>
                        </tr>
                   </thead>
                    <tbody>
                        <?php foreach ($students as $student){?>
                            <tr id="show">
                                <td> <?php echo $student->id;?></td>
                                <td><?php echo date("M d Y",  strtotime($student->created_at));?></td>
                                <td> <?php echo $student->first_name." ".$student->last_name; ?></td>
                                <td> <?php echo $student->roll_number;  ?></td>
                                <td><?php echo $student->student_program->program_name; ?></td>
                                <td><?php echo $student->semester." ".$student->admission_year; ?></td>
                                <!--
                                <td><?php echo $student->dealt_by; ?></td>
                                -->
                                <td><?php echo $student->admission_status; ?></td>
                                <td>
                                    <div class = "dropdown pull-right">
   
                                        <button type = "button" class = "btn btn-success dropdown-toggle" id = "dropdownMenu_actions" data-toggle = "dropdown">
                                           Action
                                           <span class = "caret"></span>
                                        </button>
                                        <ul class = "dropdown-menu" role = "menu" aria-labelledby = "dropdownMenu_actions">
                                            <li role = "presentation">
                                                <a  href="{{url('/student-pdf-form/'.$student->id)}}" target="_blank" role = "menuitem" tabindex = "-1">PDF Form</a>
                                            </li>
                                            <li role = "presentation" class = "divider"></li>
                                            <li role = "presentation">
                                                <a  href="#" class="edit_button"  role = "menuitem" tabindex = "-1" onclick="myFunction(<?php echo $student->id;?>)"  data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-edit"></span> Edit</a>
                                            </li>
                                            <li role="presentation">
                                                <a  href="#"  role = "menuitem" tabindex = "-1" onclick="setDelete(<?php echo $student->id;?>);" data-toggle="modal" data-target="#confirmDelete" data-title="Delete Student" data-message="Are you sure you want to delete this record ?"> <i class="glyphicon glyphicon-trash"></i> Delete</a>
                                            </li>
                                            <li role = "presentation" class = "divider"></li>
                                            <li role = "presentation">
                                                <a  href="#" class="courses_alloted"  role = "menuitem" tabindex = "-1" onclick="myFunction(<?php echo $student->id;?>);"  data-toggle="modal" data-target="#courseAllotedModal"><span class="glyphicon glyphicon-edit"></span> Courses Allocation</a>
                                            </li>
                                            <li role = "presentation">
                                                <a  href="#" class="courses_student_marks"  role = "menuitem" tabindex = "-1" onclick="myFunction(<?php echo $student->id;?>);"  data-toggle="modal" data-target="#StudentCourseMarkModal"><span class="glyphicon glyphicon-edit"></span> Course Marks</a>
                                            </li>
                                            <li role = "presentation" class = "divider"></li>
                                            <li role = "presentation">
                                                <a  href="{{url('/student-result-transcript/'.$student->id)}}" target="_blank" role = "menuitem" tabindex = "-1">Result Transcript</a>
                                            </li>
                                         </ul>
                                    </div>
                                    
                            </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                 </table>
            
            </div>
                    
        </div>
@include('partials.student.student_course_marks_detail')
@include('partials.student.course_allocation')
@include('partials.student.manage_student')
@include('partials.student.delete_student')
@include('partials.student.bottom_student_js')
@endsection