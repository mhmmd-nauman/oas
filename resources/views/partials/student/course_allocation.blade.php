<div class="modal fade" id="courseAllotedModal" role="dialog" style=" margin: 0px;">
    <div class="modal-dialog" style="width: 90%;height: 90%;display: inline-block;text-align: center;vertical-align: middle;">
        <!-- Modal content-->
        <div class="modal-content" style="height: 90%;min-height: 90%;height: auto;border-radius: 0;">
            <div class="modal-header" style=" background-color: #ac2925; color: white; font-size: 23px;">
                <button type="button" class="close" data-dismiss="modal"><span class=" glyphicon glyphicon-remove"></span></button>
            <h4 class="modal-title">Manage Course Allocation - <span id = "allocation_semester_head_message"></span></h4>
          </div>
            <div style="width:900px;">
                {!! Form::Open(array ('url' => '/save_course_allocation','class'=>'form-horizontal')) !!}
                <input type="hidden" value="" name="allocatted_student_id" id="allocatted_student_id">
                
                <table class="table"  >
                    <tr>
                        <td colspan="2">
                            <label for = "lastname" class = "col-md-2 control-label">
                                {{ Form::label('title','Semester:')}}
                           </label>
                            <div class = "col-md-9">
                                <div class = "radio col-md-6">
                                    
                                    <label>
                                        <input type = "radio" name = "semester" id = "semester" class="courses_alloted" value = "Spring">Spring
                                    </label>
                                    <label>
                                        <input type = "radio" name = "semester" id = "semester" class="courses_alloted" value = "Summer">Summer
                                    </label>
                                    <label>
                                        <input type = "radio" name = "semester" id = "semester" value = "Fall" class="courses_alloted" checked> Fall
                                    </label>
                                </div>
                                <div class="col-md-3">
                                    <label for = "lastname" class = " control-label">
                                        {{ Form::label('title','Year:')}}
                                   </label>
                                </div>
                                <div class="col-md-3">
                                    <select name="allocation_year" id="allocation_year" class="form-control courses_alloted_year" style=" width: 80px;">
                                        <option value="2017" >2017</option>
                                        <option value="2016" selected>2016</option>
                                        <option value="2015">2015</option>
                                        <option value="2014">2014</option>
                                        <option value="2013">2013</option>
                                        <option value="2012">2012</option>
                                        <option value="2011">2011</option>
                                    </select>
                                </div>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" style=" //text-align: left;">
                            <h4>Available Courses - <span id = "allocation_semester_message1">Fall 2016</span></h4>
                        </td> 
                    </tr>
                    <tr>
                        <td colspan="2">
                            <div class = "form-group col-md-12" id="checkboxes" style=" text-align: left;">
                              
                            </div>
                        </td>
                        
                    </tr>
                    <tr>
                        <td colspan="2" style=" //text-align: left;">
                            <h4>Assigned Courses - <span id = "allocation_semester_message2">Fall 2016</span></h4>
                        </td> 
                    </tr>
                    <tr>
                        <td colspan="2">
                            <div class = "form-group col-md-12" id="assigned_courses" style=" text-align: left;">
                              assigned courses
                            </div>
                        </td>
                        
                    </tr>
                   <tr>
                        <td class="col-md-12" colspan="2">
                            <div class = "col-md-offset-5 col-md-5">
                            {{ Form::submit('Save Allocation',array('class' => 'btn btn-circle btn-primary')) }}
                            </div>
                        </td>
                    </tr>
                    
                </table> 

              {!! Form::Close()!!}
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>

      </div>
  </div>