@extends('layouts.app')
@section('content')
<script>
function crearform(){
    $("#department_edit_id").val("");
    $("#department_id").val("");
    $("#department_name").val("");
    $("#contact").val("");
    
}
function myFunction(department_id) {
    $("#department_id").val(department_id);
    $("#department_edit_id").val(department_id);
    //alert($("#department_id").val());
}
function setDelete(department_id){
    $("#department_id").val(department_id);
}
$('#confirmDelete').on('show.bs.modal', function (e) {
      $message = $(e.relatedTarget).attr('data-message');
      $(this).find('.modal-body p').text($message);
      $title = $(e.relatedTarget).attr('data-title');
      $(this).find('.modal-title').text($title);

      // Pass form reference to modal for submission on yes/ok
      var form = $(e.relatedTarget).closest('form');
      $(this).find('.modal-footer #confirm').data('form', form);
  });

  <!-- Form confirm (yes/ok) handler, submits form -->
  $('#confirmDelete').find('.modal-footer #confirm').on('click', function(){
      $(this).data('form').submit();
  });
</script>
<script type="text/javascript">
    $(document).ready(function(){
        function setVisitor(department_id){
            $("#department_edit_id").val(department_id);
        }
        $(".edit_button").click(function(){
            var id = $("#department_edit_id").val();
            //console.log( "JSON Data: " + id + " val "+ id );
            $.getJSON( "department_in_json?id="+id, function( json ) {
                //$("#department_id").val(json.id);
                $("#department_name").val(json.department_name);
                $("#contact").val(json.contact);
                
                //$.each( json, function( key, val ) {
                    //console.log( "JSON Data: " + json.id + " val "+ val );
                    
                  //});
                
           });
        });
        
    });
</script>
<style type="text/css">
        .table-hover tbody tr:hover td, .table-hover tbody tr:hover th {
            background-color:#d4d4d4;
          }  
</style>


        
        <div class=" container" >
            <div class="row" style="margin: 0 0 0 0px;">
             
            <div class="row">
                <div id="title_personal_info">
                        Educational Information
                </div>
            </div>
            <br>
            {!! Form::Open(array ('url' => '/add_department','class'=>'form-horizontal')) !!}
            <input type="hidden" name="applicant_edit_id" id="applicant_edit_id" value="">
            <div class = "panel panel-default">
                <div class = "panel-heading">
                   <h3 class = "panel-title">
                      Matric
                   </h3>
                </div>

                <div class = "panel-body">
                   <div class="row">
                    <div class="col-md-12">
                    
                            <div class = "form-group">
                                <label for = "firstname" class = "col-md-2 control-label">
                                    {{ Form::label('title','Year Passed:')}}
                                </label>
                                <div class = "col-md-4">
                                    {{ Form::text('contact',null,array('id'=>'contact','class' => 'form-control input-sm','placeholder'=>'Year Passed'))}}
                                </div>
                                <label for = "lastname" class = "col-md-2 control-label">
                                    {{ Form::label('title','Exam:')}}
                                </label>

                                <div class = "col-md-4">
                                       <select id="ssc_exam" class="form-control">
                                           <option>Matric/SSC</option>
                                           <option>O Level</option>
                                           <option>Equivalent (e.g., Shahadat-ul-Aama)</option>
                                       </select>
                                </div>
                            </div>
                           </div>
                       </div>
                   <div class="row">
                    <div class="col-md-12">
                    
                            <div class = "form-group">
                                <label for = "firstname" class = "col-md-2 control-label">
                                    {{ Form::label('title','Obtained Marks:')}}
                                </label>
                                <div class = "col-md-4">
                                    {{ Form::text('contact',null,array('id'=>'contact','class' => 'form-control input-sm','placeholder'=>'Obtained Marks'))}}
                                </div>
                                <label for = "lastname" class = "col-md-2 control-label">
                                    {{ Form::label('title','Roll No:')}}
                                </label>

                                <div class = "col-md-4">
                                    {{ Form::text('contact',null,array('id'=>'contact','class' => 'form-control input-sm','placeholder'=>'Roll No'))}}
                                </div>
                            </div>
                           </div>
                       </div>
                   <div class="row">
                    <div class="col-md-12">
                    
                            <div class = "form-group">
                                <label for = "firstname" class = "col-md-2 control-label">
                                    {{ Form::label('title','Group/Subjects:')}}
                                </label>
                                <div class = "col-md-4">
                                    <select id="ssc_subject_group" class="form-control">
                                        <option>Science</option>
                                        <option>Humanities</option>
                                        <option>Technical</option>
                                    </select>
                                    
                                </div>
                                <label for = "lastname" class = "col-md-2 control-label">
                                    {{ Form::label('title','Total Marks:')}}
                                </label>

                                <div class = "col-md-4">
                                    {{ Form::text('contact',null,array('id'=>'contact','class' => 'form-control input-sm','placeholder'=>'Total Marks'))}}
                                       
                                </div>
                            </div>
                           </div>
                       </div>
                </div>
             </div>
            <div class = "panel panel-default">
                <div class = "panel-heading">
                   <h3 class = "panel-title">
                      Intermediate
                   </h3>
                </div>

                <div class = "panel-body">
                   <div class="row">
                    <div class="col-md-12">
                    
                            <div class = "form-group">
                                <label for = "firstname" class = "col-md-2 control-label">
                                    {{ Form::label('title','Year Passed:')}}
                                </label>
                                <div class = "col-md-4">
                                    {{ Form::text('contact',null,array('id'=>'contact','class' => 'form-control input-sm','placeholder'=>'Year Passed'))}}
                                </div>
                                <label for = "lastname" class = "col-md-2 control-label">
                                    {{ Form::label('title','Exam:')}}
                                </label>

                                <div class = "col-md-4">
                                    <select id="hsc_exam" class="form-control">
                                        <option>FA/FSc/HSSC</option>
                                        <option>ICS</option>
                                        <option>ICOM</option>
                                        <option>A Level</option>
                                        <option>DAE</option>
                                        <option>Equivalent (e.g., Shahadat-ul-Khasa)</option>
                                    </select>
                                       
                                </div>
                            </div>
                           </div>
                       </div>
                   <div class="row">
                    <div class="col-md-12">
                    
                            <div class = "form-group">
                                <label for = "firstname" class = "col-md-2 control-label">
                                    {{ Form::label('title','Obtained Marks:')}}
                                </label>
                                <div class = "col-md-4">
                                    {{ Form::text('contact',null,array('id'=>'contact','class' => 'form-control input-sm','placeholder'=>'Obtained Marks'))}}
                                </div>
                                <label for = "lastname" class = "col-md-2 control-label">
                                    {{ Form::label('title','Roll No:')}}
                                </label>

                                <div class = "col-md-4">
                                    {{ Form::text('contact',null,array('id'=>'contact','class' => 'form-control input-sm','placeholder'=>'Roll No'))}}
                                </div>
                            </div>
                           </div>
                       </div>
                   <div class="row">
                    <div class="col-md-12">
                    
                            <div class = "form-group">
                                <label for = "firstname" class = "col-md-2 control-label">
                                    {{ Form::label('title','Group/Subjects:')}}
                                </label>
                                <div class = "col-md-4">
                                    <select id="hsc_subject_group" class="form-control">
                                        <option>Pre-Medical</option>
                                        <option>Pre-Engineering</option>
                                        <option>Humanities</option>
                                    </select>
                                </div>
                                <label for = "lastname" class = "col-md-2 control-label">
                                    {{ Form::label('title','Total Marks:')}}
                                </label>

                                <div class = "col-md-4">
                                    {{ Form::text('contact',null,array('id'=>'contact','class' => 'form-control input-sm','placeholder'=>'Total Marks'))}}
                                       
                                </div>
                            </div>
                           </div>
                       </div>
                </div>
             </div>
            <div class = "panel panel-default">
                <div class = "panel-heading">
                   <h3 class = "panel-title">
                      Graduation
                   </h3>
                </div>

                <div class = "panel-body">
                   <div class="row">
                    <div class="col-md-12">
                    
                            <div class = "form-group">
                                <label for = "firstname" class = "col-md-2 control-label">
                                    {{ Form::label('title','Year Passed:')}}
                                </label>
                                <div class = "col-md-4">
                                    {{ Form::text('contact',null,array('id'=>'contact','class' => 'form-control input-sm','placeholder'=>'Year Passed'))}}
                                </div>
                                <label for = "lastname" class = "col-md-2 control-label">
                                    {{ Form::label('title','Exam:')}}
                                </label>

                                <div class = "col-md-4">
                                    <select id="grad_exam" class="form-control">
                                            <option value="BA">BA</option>
                                            <option value="BSc">BSc</option>
                                            <option value="BCom">BCom</option>
                                    </select>
                                    
                                       
                                </div>
                            </div>
                           </div>
                       </div>
                   <div class="row">
                    <div class="col-md-12">
                    
                            <div class = "form-group">
                                <label for = "firstname" class = "col-md-2 control-label">
                                    {{ Form::label('title','Obtained Marks:')}}
                                </label>
                                <div class = "col-md-4">
                                    {{ Form::text('contact',null,array('id'=>'contact','class' => 'form-control input-sm','placeholder'=>'Obtained Marks'))}}
                                </div>
                                <label for = "lastname" class = "col-md-2 control-label">
                                    {{ Form::label('title','Roll No:')}}
                                </label>

                                <div class = "col-md-4">
                                    {{ Form::text('contact',null,array('id'=>'contact','class' => 'form-control input-sm','placeholder'=>'Roll No'))}}
                                </div>
                            </div>
                           </div>
                       </div>
                    <div class="row">
                        <div class="col-md-12">
                    
                            <div class = "form-group">
                                
                                
                                <label for = "lastname" class = "col-md-2 control-label">
                                    {{ Form::label('title','Total Marks:')}}
                                </label>

                                <div class = "col-md-4">
                                    {{ Form::text('contact',null,array('id'=>'contact','class' => 'form-control input-sm','placeholder'=>'Total Marks'))}}
                                       
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6" style=" text-align: center;">
                            {{ Form::label('title','Marks')}}
                        </div>
                        <div class="col-md-6" style=" text-align: center;">    
                            {{ Form::label('title','Marks')}}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 center" >
                            <div class="col-md-4" style=" text-align: center;">
                                {{ Form::label('title','Compulsory')}}
                            </div>
                            <div class="col-md-4" style=" text-align: center;">
                                {{ Form::label('title','Obtained')}}
                            </div>
                            <div class="col-md-4" style=" text-align: center;">
                                {{ Form::label('title','Total')}}
                            </div>
                        </div>
                        <div class="col-md-6" style=" text-align: center;">    
                            <div class="col-md-4" style=" text-align: center;">
                                {{ Form::label('title','Optional')}}
                            </div>
                            <div class="col-md-4" style=" text-align: center;">
                                {{ Form::label('title','Obtained')}}
                            </div>
                            <div class="col-md-4" style=" text-align: center;">
                                {{ Form::label('title','Total')}}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 center" >
                            <div class="col-md-4" style=" text-align: center;">
                                {{ Form::label('title','English')}}
                            </div>
                            <div class="col-md-4" style=" text-align: center;">
                                {{ Form::text('contact',null,array('id'=>'contact','class' => 'form-control input-sm','placeholder'=>'Obtained'))}}
                            </div>
                            <div class="col-md-4" style=" text-align: center;">
                                {{ Form::text('contact',null,array('id'=>'contact','class' => 'form-control input-sm','placeholder'=>'Total'))}}
                            </div>
                        </div>
                        <div class="col-md-6" style=" text-align: center;">    
                            <div class="col-md-4" style=" text-align: center;">
                            <select id="grad_opt_1_name"  class=" form-control" >
                                <option value="">-- Select a subject--</option>
                                <option value="Arabic">Arabic</option>
                                <option value="Arabic(elective)">Arabic(elective)</option>
                                <option value="Arabic(optional)">Arabic(optional)</option>
                                <option value="Biology">Biology</option>
                                <option value="Botany">Botany</option>
                                <option value="B-Tech">B-Tech</option>
                                <option value="Cartography">Cartography</option>
		&nbsp;&nbsp;  <option value="Chemistry">Chemistry</option>
		&nbsp;&nbsp;  <option value="Civics">Civics</option>
		&nbsp;&nbsp;  <option value="Civil">Civil</option>
		&nbsp;&nbsp;  <option value="Commerce">Commerce</option>
		&nbsp;&nbsp;  <option value="Computer Science">Computer Science</option>
		&nbsp;&nbsp;  <option value="Demography">Demography</option>
		&nbsp;&nbsp;  <option value="Economics">Economics</option>
		&nbsp;&nbsp;  <option value="Education">Education</option>
		&nbsp;&nbsp;  <option value="English">English</option>
		&nbsp;&nbsp;  <option value="English Compulsory">English Compulsory</option>
		&nbsp;&nbsp;  <option value="English Literature">English Literature</option>
		&nbsp;&nbsp;  <option value="Environmental Sciences/Population Studies">Environmental Sciences/Population Studies</option>
		&nbsp;&nbsp;  <option value="Fazil-e-Arabic">Fazil-e-Arabic</option>
		&nbsp;&nbsp;  <option value="Fine Arts(elective)">Fine Arts(elective)</option>
		&nbsp;&nbsp;  <option value="Fine Arts/Graphic Design and Textile Design(elective)">Fine Arts/Graphic Design and Textile Design(elective)</option>
		&nbsp;&nbsp;  <option value="Gender Studies(elective)">Gender Studies(elective)</option>
		&nbsp;&nbsp;  <option value="Geography">Geography</option>
		&nbsp;&nbsp;  <option value="GIS">GIS</option>
		&nbsp;&nbsp;  <option value="History">History</option>
		&nbsp;&nbsp;  <option value="International Relations">International Relations</option>
		&nbsp;&nbsp;  <option value="Islamic Studies">Islamic Studies</option>
		&nbsp;&nbsp;  <option value="Journalism">Journalism</option>
		&nbsp;&nbsp;  <option value="Library Science (as elective or optional)">Library Science (as elective or optional)</option>
		&nbsp;&nbsp;  <option value="Mass Communication (as elective or optional)">Mass Communication (as elective or optional)</option>
		&nbsp;&nbsp;  <option value="Mathematics">Mathematics</option>
		&nbsp;&nbsp;  <option value="Media Studies">Media Studies</option>
		&nbsp;&nbsp;  <option value="Pakistan Studies">Pakistan Studies</option>
		&nbsp;&nbsp;  <option value="Persian">Persian</option>
		&nbsp;&nbsp;  <option value="Persian(elective)">Persian(elective)</option>
		&nbsp;&nbsp;  <option value="Persian(optional)">Persian(optional)</option>
		&nbsp;&nbsp;  <option value="Philosophy">Philosophy</option>
		&nbsp;&nbsp;  <option value="Physical Education">Physical Education</option>
		&nbsp;&nbsp;  <option value="Physics">Physics</option>
		&nbsp;&nbsp;  <option value="Political Science">Political Science</option>
		&nbsp;&nbsp;  <option value="Political Science(elective)">Political Science(elective)</option>
		&nbsp;&nbsp;  <option value="Psychology">Psychology</option>
		&nbsp;&nbsp;  <option value="Psychology(elective 200 Marks)">Psychology(elective 200 Marks)</option>
		&nbsp;&nbsp;  <option value="Punjabi(elective)">Punjabi(elective)</option>
		&nbsp;&nbsp;  <option value="Shahadat-ul-Alia">Shahadat-ul-Alia</option>
		&nbsp;&nbsp; <option value="Siraiki(elective)">Siraiki(elective)</option>
		&nbsp;&nbsp;  <option value="Siraiki(optional)">Siraiki(optional)</option>
		&nbsp;&nbsp;  <option value="Sociology">Sociology</option>
		&nbsp;&nbsp;  <option value="Statistics">Statistics</option>
		&nbsp;&nbsp;  <option value="Urdu">Urdu</option>
		&nbsp;&nbsp;  <option value="Urdu(elective)">Urdu(elective)</option>
		&nbsp;&nbsp;  <option value="Urdu(optional)">Urdu(optional)</option>
		&nbsp; &nbsp; <option value="Zoology">Zoology</option>
			</select>
                            </div>
                            <div class="col-md-4" style=" text-align: center;">
                                {{ Form::label('title','Obtained')}}1
                            </div>
                            <div class="col-md-4" style=" text-align: center;">
                                {{ Form::label('title','Total')}}1
                            </div>
                        </div>
                    </div>
                </div>
             </div>
            
                            <div class="row">
                          <table class="table"  >
                          <tr>
                              <td>
                                 <div class = "form-group">
                                    <label for = "firstname" class = "col-md-4 control-label">
                                         {{ Form::label('title','Hafiz-e-Quran:')}}
                                    </label>

                                   <div class = "col-md-7">
                                       <div class = "radio">
                                            <label>
                                               <input type = "radio" name = "gender" id = "gender" value = "Male" checked> Yes
                                            </label>
                                            <label>
                                               <input type = "radio" name = "gender" id = "gender" value = "Female">
                                               No
                                            </label>
                                        </div>
                                   </div>
                                </div>
                              </td>
                              <td>
                                  <div class = "form-group">
                                    <label for = "lastname" class = "col-md-4 control-label">
                                         {{ Form::label('title','Nationality:')}}
                                    </label>

                                    <div class = "col-md-7">
                                        {{ Form::text('contact',null,array('id'=>'contact','class' => 'form-control input-sm','placeholder'=>'Nationality'))}}
                                    </div>
                                 </div>
                              </td>
                          </tr>
                          <tr>
                              <td>
                                 <div class = "form-group">
                                    <label for = "firstname" class = "col-md-4 control-label">
                                         {{ Form::label('title','Religion:')}}
                                    </label>

                                   <div class = "col-md-7">
                                       
                                      <select name="allocation_year" id="marks_allocation_year" class="form-control courses_student_marks" >
                                            <option value="ISLAM" selected>ISLAM</option>
                                            <option value="Other" >Other</option>
                                        </select>

                                   </div>
                                </div>
                              </td>
                              <td>
                                  <div class = "form-group">
                                    <label for = "lastname" class = "col-md-4 control-label">
                                         {{ Form::label('title','Blood Group:')}}
                                    </label>

                                    <div class = "col-md-7">
                                        {{ Form::text('contact',null,array('id'=>'contact','class' => 'form-control input-sm','placeholder'=>'Blood Group'))}}
                                    </div>
                                 </div>
                              </td>
                          </tr>
                          <tr>
                              <td>
                                 <div class = "form-group">
                                    <label for = "firstname" class = "col-md-4 control-label">
                                         {{ Form::label('title','Current Mailing Address:')}}
                                    </label>

                                   <div class = "col-md-7">
                                       
                                       {{ Form::textarea('postal_address',null,array('id'=>'postal_address','class' => 'form-control input-sm','placeholder'=>'Current Mailing Address','rows'=>'3'))}}

                                   </div>
                                </div>
                              </td>
                              <td>
                                  <div class = "form-group">
                                    <label for = "lastname" class = "col-md-4 control-label">
                                         {{ Form::label('title','Permanent Address:')}}
                                    </label>

                                    <div class = "col-md-7">
                                        {{ Form::textarea('postal_address',null,array('id'=>'postal_address','class' => 'form-control input-sm','placeholder'=>'Permanent Address','rows'=>'3'))}}
                                    </div>
                                 </div>
                              </td>
                          </tr>
                          <tr>
                              <td>
                                 <div class = "form-group">
                                    <label for = "firstname" class = "col-md-4 control-label">
                                         {{ Form::label('title','Province:')}}
                                    </label>

                                   <div class = "col-md-7">
                                       <select class="form-control" name="provinces_sel" onchange="getDistricts()">
                                                <option value="Punjab">Punjab</option>
                                                <option value="Sind">Sind</option>
                                                <option value="Khyber Pakhtunkhwa">Khyber Pakhtunkhwa</option>
                                                <option value="Baluchistan">Baluchistan</option>
                                                <option value="Gilgit-Baltistan">Gilgit-Baltistan</option>
                                                <option value="Azad Kashmir">Azad Kashmir</option>
                                                <option value="FATA">FATA</option>
                                                <option value="Islamabad">Islamabad Capital Territory</option>
                                        </select>
                                       

                                   </div>
                                </div>
                              </td>
                              <td>
                                  <div class = "form-group">
                                    <label for = "lastname" class = "col-md-4 control-label">
                                         {{ Form::label('title','District:')}}
                                    </label>

                                    <div class = "col-md-7">
                                        <select class="form-control" name="districts">
                                            <option value="Attock">Attock</option>
                                            <option value="Bahawalnagar">Bahawalnagar</option>
                                            <option value="Bahawalpur">Bahawalpur</option>
                                            <option value="Bhakkar">Bhakkar</option>
                                            <option value="Chakwal">Chakwal</option>
                                            <option value="Chiniot">Chiniot</option>
                                            <option value="Dera Ghazi Khan">Dera Ghazi Khan</option>
                                            <option value="Faisalabad">Faisalabad</option>
                                            <option value="Gujranwala">Gujranwala</option>
                                            <option value="Gujrat">Gujrat</option>
                                            <option value="Hafizabad">Hafizabad</option>
                                            <option value="Jhang">Jhang</option>
                                            <option value="Jhelum">Jhelum</option>
                                            <option value="Kasur">Kasur</option>
                                            <option value="Khanewal">Khanewal</option>
                                            <option value="Khushab">Khushab</option>
                                            <option value="Lahore">Lahore</option>
                                            <option value="Layyah">Layyah</option>				
                                    </select>
                                        
                                    </div>
                                 </div>
                              </td>
                          </tr>
                          <tr>
                              <td>
                                 <div class = "form-group">
                                    <label for = "firstname" class = "col-md-4 control-label">
                                         {{ Form::label('title','Guardian Name:')}}
                                    </label>

                                   <div class = "col-md-7">
                                       
                                       {{ Form::text('department_name',null,array('id'=>'department_name','class' => 'form-control input-sm','placeholder'=>'Guardian Name','required'=>'true'))}}

                                   </div>
                                </div>
                              </td>
                              <td>
                                  <div class = "form-group">
                                    <label for = "lastname" class = "col-md-4 control-label">
                                         {{ Form::label('title','Relationship:')}}
                                    </label>

                                    <div class = "col-md-7">
                                        {{ Form::text('contact',null,array('id'=>'contact','class' => 'form-control input-sm','placeholder'=>'Relationship'))}}
                                    </div>
                                 </div>
                              </td>
                          </tr>
                          <tr>
                              <td>
                                 <div class = "form-group">
                                    <label for = "firstname" class = "col-md-4 control-label">
                                         {{ Form::label('title','CNIC#:')}}
                                    </label>

                                   <div class = "col-md-7">
                                       
                                       {{ Form::text('department_name',null,array('id'=>'department_name','class' => 'form-control input-sm','placeholder'=>'CNIC','required'=>'true'))}}

                                   </div>
                                </div>
                              </td>
                              <td>
                                  <div class = "form-group">
                                    <label for = "lastname" class = "col-md-4 control-label">
                                         {{ Form::label('title','Monthly Income Rs:')}}
                                    </label>

                                    <div class = "col-md-7">
                                        {{ Form::text('contact',null,array('id'=>'contact','class' => 'form-control input-sm','placeholder'=>'Monthly Income Rs'))}}
                                    </div>
                                 </div>
                              </td>
                          </tr>
                          <tr>
                              <td>
                                 <div class = "form-group">
                                    <label for = "firstname" class = "col-md-4 control-label">
                                         {{ Form::label('title','Profession:')}}
                                    </label>

                                   <div class = "col-md-7">
                                       
                                       {{ Form::text('department_name',null,array('id'=>'department_name','class' => 'form-control input-sm','placeholder'=>'Profession','required'=>'true'))}}

                                   </div>
                                </div>
                              </td>
                              <td>
                                  <div class = "form-group">
                                    <label for = "lastname" class = "col-md-4 control-label">
                                         {{ Form::label('title','Address:')}}
                                    </label>

                                    <div class = "col-md-7">
                                        {{ Form::text('contact',null,array('id'=>'contact','class' => 'form-control input-sm','placeholder'=>'Address'))}}
                                    </div>
                                 </div>
                              </td>
                          </tr>
                          <tr>
                              <td>
                                 <div class = "form-group">
                                    <label for = "firstname" class = "col-md-4 control-label">
                                         {{ Form::label('title','City:')}}
                                    </label>

                                   <div class = "col-md-7">
                                       
                                       {{ Form::text('department_name',null,array('id'=>'department_name','class' => 'form-control input-sm','placeholder'=>'City','required'=>'true'))}}

                                   </div>
                                </div>
                              </td>
                              <td>
                                  <div class = "form-group">
                                    <label for = "lastname" class = "col-md-4 control-label">
                                         {{ Form::label('title','Phone No:')}}
                                    </label>

                                    <div class = "col-md-7">
                                        {{ Form::text('contact',null,array('id'=>'contact','class' => 'form-control input-sm','placeholder'=>'Phone No'))}}
                                    </div>
                                 </div>
                              </td>
                          </tr>
                          <tr>
                              <td class="col-md-12" colspan="2">
                                  <div class = "col-md-offset-5 col-md-5">
                                  {{ Form::submit('Save Information',array('class' => 'btn btn-circle btn-primary')) }}
                                  </div>
                              </td>
                          </tr>
                      </table> 
                      
                    {!! Form::Close()!!}
                </div>
                

            </div>
                    
        </div>


            <script type="text/javascript">
                $( "#date_of_birth" ).datepicker({
                  changeMonth: true,
                  changeYear: true,
                  yearRange: "-60:+0",
                  dateFormat: "yy-mm-dd"
                }).datepicker("setDate", new Date());
            </script>      

@endsection