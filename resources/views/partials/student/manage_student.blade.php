<div class="modal fade" id="myModal" role="dialog" style=" margin: 0 0 0 5px;">
    <div class="modal-dialog" style="width: 90%;height: 90%;display: inline-block;text-align: center;vertical-align: middle;">
              <!-- Modal content-->
              <div class="modal-content" style="height: 90%;min-height: 90%;height: auto;border-radius: 0;">
                  <div class="modal-header" style=" background-color: #ac2925; color: white; font-size: 23px;">
                      <button type="button" class="close" data-dismiss="modal"><span class=" glyphicon glyphicon-remove"></span></button>
                  <h4 class="modal-title">Manage Student Record</h4>
                </div>
                  <div style="width:95%;">
                      {!! Form::Open(array ('url' => '/add_student','class'=>'form-horizontal')) !!}
                      <div class="row">
                      <div id="tabs">
                        <ul>
                          <li><a href="#tabs-1">Personal Information</a></li>
                          <li><a href="#tabs-2">Personal Information - 2</a></li>
                          <li><a href="#tabs-3">Education</a></li>
                          <li><a href="#tabs-4">Education - 2</a></li>
                          <li><a href="#tabs-5">Languages,Honor & Awards</a></li>
                          <li><a href="#tabs-6">Applicant & Sponsor</a></li>
                          <li><a href="#tabs-7">Official Use Only</a></li>
                        </ul>
                        <div id="tabs-1">
                         <table class="table table-condensed"  >
                          <tr>
                              <td >
                                 <div class = "form-group">
                                    <label for = "firstname" class = "col-md-4 control-label">
                                         {{ Form::label('title','Visitor ID')}}
                                    </label>

                                   <div class = "col-md-5">
                                       {{ Form::text('search_text',null,array('id'=>'search_text','class' => 'form-control input-sm','placeholder'=>'Visitor ID'))}}
                                       <input type="hidden" name="visitor_id" value="" id="visitor_id"> 
                                       <input type="hidden" name="student_id_edit" value="" id="student_id_edit">
                                   </div>
                                     <div class="col-md-1">
                                         <button type = "button" class = "btn btn-default" name="search_button" id="search_button">Load</button>
                                     </div>
                                </div>
                                  
                              </td>
                              <td>
                                  &nbsp;
                              </td>
                              
                          </tr>
                          <tr>
                              <td>
                                 <div class = "form-group">
                                    <label for = "firstname" class = "col-md-4 control-label">
                                         {{ Form::label('title','First Name:')}}
                                    </label>

                                   <div class = "col-md-7">
                                       {{ Form::text('first_name',null,array('id'=>'first_name','class' => 'form-control input-sm','placeholder'=>'Enter First Name'))}}

                                   </div>
                                </div>
                              </td>
                              <td>
                                  <div class = "form-group">
                                    <label for = "lastname" class = "col-md-4 control-label">
                                         {{ Form::label('title','Last Name:')}}
                                    </label>

                                    <div class = "col-md-7">
                                        {{ Form::text('last_name',null,array('id'=>'last_name','class' => 'form-control input-sm','placeholder'=>'Enter Last Name'))}}
                                    </div>
                                 </div>
                              </td>
                          </tr>
                          <tr>
                              <td>
                                 <div class = "form-group">
                                    <label for = "firstname" class = "col-md-4 control-label">
                                         {{ Form::label('title','Program:')}}
                                    </label>

                                   <div class = "col-md-7">
                                       <select name="program" id="program" class="form-control input-sm">
                                           
                                       </select>
                                   </div>
                                </div>
                              </td>
                              <td>
                                  <div class = "form-group">
                                    <label for = "lastname" class = "col-md-4 control-label">
                                         {{ Form::label('title','Semester:')}}
                                    </label>

                                    <div class = "col-md-7">
                                        <div class = "radio col-md-9">
                                            <label>
                                                <input type = "radio" name = "semester" id = "semester" value = "Spring">Spring
                                            </label>
                                            <label>
                                                <input type = "radio" name = "semester" id = "semester" value = "Summer">Summer
                                            </label>
                                            <label>
                                                <input type = "radio" name = "semester" id = "semester" value = "Fall" checked> Fall
                                            </label>
                                        </div>
                                        <div class="col-md-3">
                                            <select name="admission_year" id="admission_year" class="form-control" style=" width: 80px;">
                                                <option value="2017" >2017</option>
                                                <option value="2016" selected>2016</option>
                                                <option value="2015">2015</option>
                                                <option value="2014">2014</option>
                                                <option value="2013">2013</option>
                                                <option value="2012">2012</option>
                                                <option value="2011">2011</option>
                                            </select>
                                        </div>

                                    </div>
                                 </div>
                              </td>
                          </tr>
                          <tr>
                              <td>
                                 <div class = "form-group">
                                    <label for = "firstname" class = "col-md-4 control-label">
                                         {{ Form::label('title','Father/Gaurd. Name:')}}
                                    </label>

                                   <div class = "col-md-7">
                                       {{ Form::text('father_name',null,array('id'=>'father_name','class' => 'form-control input-sm','placeholder'=>'Father/Gaurd. Name'))}}

                                   </div>
                                </div>
                              </td>
                              <td>
                                  <div class = "form-group">
                                    <label for = "lastname" class = "col-md-4 control-label">
                                         {{ Form::label('title','Contact:')}}
                                    </label>

                                    <div class = "col-md-7">
                                        {{ Form::text('mobile',null,array('id'=>'mobile','class' => 'form-control input-sm','placeholder'=>'Contact'))}}

                                    </div>
                                 </div>
                              </td>
                          </tr>
                          <tr>
                              <td>
                                 <div class = "form-group">
                                    <label for = "firstname" class = "col-md-4 control-label">
                                         {{ Form::label('title','Occup. Fath./Gaurd.:')}}
                                    </label>

                                   <div class = "col-md-7">
                                       {{ Form::text('father_occupation',null,array('id'=>'father_occupation','class' => 'form-control input-sm','placeholder'=>'Occupation of Father/Gaurdian'))}}

                                   </div>
                                </div>
                              </td>
                              <td>
                                  <div class = "form-group">
                                    <label for = "lastname" class = "col-md-4 control-label">
                                         {{ Form::label('title','Email:')}}
                                    </label>

                                    <div class = "col-md-7">
                                        {{ Form::text('email',null,array('id'=>'email','class' => 'form-control input-sm','placeholder'=>'Email'))}}

                                    </div>
                                 </div>
                              </td>
                          </tr>
                          <tr>
                              <td colspan="2" style="text-align:left;">
                                 <div class = "form-group">
                                    <label for = "firstname" class = "col-md-2 control-label">
                                         {{ Form::label('title','Address:')}}
                                    </label>

                                   <div class = "col-md-10">
                                       {{ Form::textarea('address',null,array('id'=>'address','class' => 'form-control input-sm','placeholder'=>'Address','rows'=>'3'))}}

                                   </div>
                                </div>
                              </td>
                              
                          </tr>
                          <tr>
                              <td colspan="2">
                                  {{ Form::submit('Save Student',array('class' => 'btn btn-circle btn-primary')) }}
                                  <button type = "button" class = "btn btn-primary" onclick="updatetab(1)">&nbsp;Next&nbsp;</button>
                              </td>
                          </tr>
                          
                          
                          
                          
                          
                      </table>
                      
                        </div>
                        <div id="tabs-2">
                            <table class="table table-condensed"  >
                                <tr>
                                    <td>
                                       <div class = "form-group">
                                          <label for = "firstname" class = "col-md-4 control-label">
                                               {{ Form::label('title','Gender:')}}
                                          </label>

                                         <div class = "col-md-7">
                                             <div class = "radio">
                                              <label>
                                                 <input type = "radio" name = "gender" id = "gender" value = "Male" checked> Male
                                              </label>
                                              <label>
                                                 <input type = "radio" name = "gender" id = "gender" value = "Female">
                                                 Female
                                              </label>
                                              </div>
                                         </div>
                                      </div>
                                    </td>
                                    <td>
                                        <div class = "form-group">
                                          <label for = "lastname" class = "col-md-4 control-label">
                                               {{ Form::label('title','Marital Status:')}}
                                          </label>

                                          <div class = "col-md-7">
                                              <div class = "radio">
                                              <label>
                                                 <input type = "radio" name = "marital_status" id = "marital_status" value = "Maried" > Married
                                              </label>
                                              <label>
                                                 <input type = "radio" name = "marital_status" id = "marital_status" value = "Unmaried" checked>
                                                 Unmaried
                                              </label>
                                              </div>
                                       </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                       <div class = "form-group">
                                          <label for = "firstname" class = "col-md-4 control-label">
                                               {{ Form::label('title','Date of Birth:')}}
                                          </label>

                                         <div class = "col-md-7">
                                             {{ Form::text('date_of_birth',null,array('id'=>'date_of_birth','class' => 'form-control input-sm','placeholder'=>'Date of Birth'))}}

                                         </div>
                                      </div>
                                    </td>
                                    <td>
                                        <div class = "form-group">
                                          <label for = "lastname" class = "col-md-4 control-label">
                                               {{ Form::label('title','Country of Citizenship:')}}
                                          </label>

                                          <div class = "col-md-7">
                                              {{ Form::text('country_of_citizenship',null,array('id'=>'country_of_citizenship','class' => 'form-control input-sm','placeholder'=>'Country of Citizenship'))}}

                                          </div>
                                       </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                       <div class = "form-group">
                                          <label for = "firstname" class = "col-md-4 control-label">
                                               {{ Form::label('title','CNIC:')}}
                                          </label>

                                         <div class = "col-md-7">
                                             {{ Form::text('cnic',null,array('id'=>'cnic','class' => 'form-control input-sm','placeholder'=>'CNIC'))}}

                                         </div>
                                      </div>
                                    </td>
                                    <td>
                                        <div class = "form-group">
                                          <label for = "lastname" class = "col-md-4 control-label">
                                               {{ Form::label('title','Phone:')}}
                                          </label>

                                          <div class = "col-md-7">
                                              {{ Form::text('phone',null,array('id'=>'phone','class' => 'form-control input-sm','placeholder'=>'Phone'))}}

                                          </div>
                                       </div>
                                    </td>
                                </tr>
                                <tr>
                                  <td colspan="2" style="text-align:left;">
                                     <div class = "form-group">
                                        <label for = "firstname" class = "col-md-2 control-label">
                                             {{ Form::label('title','Postal Address:')}}
                                        </label>

                                       <div class = "col-md-10">
                                           {{ Form::textarea('postal_address',null,array('id'=>'postal_address','class' => 'form-control input-sm','placeholder'=>'Postal Address','rows'=>'3'))}}

                                       </div>
                                    </div>
                                  </td>

                                </tr>
                                <tr>
                                    <td colspan="2">
                                        {{ Form::submit('Save Student',array('class' => 'btn btn-circle btn-primary')) }}
                                        <button type = "button" class = "btn btn-primary" onclick="updatetab(2)">&nbsp;Next&nbsp;</button>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div id="tabs-3">
                            <input type="hidden" id="student_education_ids" name="student_education_ids"  value="">
                            <table width="100%" class=" table-bordered table-condensed" style="font-size:10px; font-weight: bold;">
                                      <caption><span style="font-size:12px;">Educational Background</span></caption>
                                      <tr>
                                          <th>
                                             Name of Institution 
                                          </th>
                                          <th>Location</th>
                                          <th>Date of Entering</th>
                                          <th>Date of Leaving</th>
                                          <th>
                                              Certificate. Diploma<br>or Degree Received
                                          </th>
                                          <th>
                                              Grade or Division Secured
                                          </th>
                                          
                                      </tr>
                                      <tr>
                                        <td>
                                            <div class = " col-md-12">
                                                <input name="name_of_institution[]" id="institution" class = "form-control input-sm" type = "text" placeholder = "">
                                           </div>
                                        </td>
                                        <td>
                                            <div class = "col-md-12">
                                                <input name="location[]" id="location" class = "form-control input-sm" type = "text" placeholder = "">
                                           </div>
                                        </td>
                                        <td>
                                            <div class = "col-md-12">
                                              <input name="date_of_entering[]" id="date_of_entering" class = "form-control input-sm " type = "text" placeholder = "YYYY-MM-DD">
                                           </div>
                                        </td>
                                        <td>
                                            <div class = "col-md-12">
                                              <input name="date_of_leaving[]" id="date_of_leaving" class = "form-control input-sm " type = "text" placeholder = "YYYY-MM-DD">
                                           </div>
                                        </td>
                                        <td>
                                            <div class = "col-md-12">
                                                <input name="certificate_or_diploma[]" id="certificate_or_diploma" class = "form-control input-sm" type = "text" placeholder = "">
                                           </div>
                                        </td>
                                        <td>
                                            <div class = "col-md-12">
                                                <input name="grade_or_division[]" id="grade_or_division" class = "form-control input-sm" type = "text" placeholder = "" >
                                           </div>
                                        </td>
                                      </tr>
                                      
                                       <tr>
                                        <td>
                                            <div class = " col-md-12">
                                                <input name="name_of_institution[]" id="institution" class = "form-control input-sm" type = "text" placeholder = "">
                                           </div>
                                        </td>
                                        <td>
                                            <div class = "col-md-12">
                                                <input name="location[]" id="location" class = "form-control input-sm" type = "text" placeholder = "">
                                           </div>
                                        </td>
                                        <td>
                                            <div class = "col-md-12">
                                                <input name="date_of_entering[]" id="date_of_entering" class = "form-control input-sm " type = "text" placeholder = "YYYY-MM-DD">
                                           </div>
                                        </td>
                                        <td>
                                            <div class = "col-md-12">
                                                <input name="date_of_leaving[]" id="date_of_leaving" class = "form-control input-sm " type = "text" placeholder = "YYYY-MM-DD">
                                           </div>
                                        </td>
                                        <td>
                                            <div class = "col-md-12">
                                                <input name="certificate_or_diploma[]" id="certificate_or_diploma" class = "form-control input-sm" type = "text" placeholder = "">
                                           </div>
                                        </td>
                                        <td>
                                            <div class = "col-md-12">
                                                <input name="grade_or_division[]" id="grade_or_division" class = "form-control input-sm" type = "text" placeholder = "" >
                                           </div>
                                        </td>
                                      </tr>
                                      
                                       <tr>
                                        <td>
                                            <div class = " col-md-12">
                                                <input name="name_of_institution[]" id="institution" class = "form-control input-sm" type = "text" placeholder = "">
                                           </div>
                                        </td>
                                        <td>
                                            <div class = "col-md-12">
                                                <input name="location[]" id="location" class = "form-control input-sm" type = "text" placeholder = "">
                                           </div>
                                        </td>
                                        <td>
                                            <div class = "col-md-12">
                                                <input name="date_of_entering[]" id="date_of_entering" class = "form-control input-sm " type = "text" placeholder = "YYYY-MM-DD">
                                           </div>
                                        </td>
                                        <td>
                                            <div class = "col-md-12">
                                                <input name="date_of_leaving[]" id="date_of_leaving" class = "form-control input-sm " type = "text" placeholder = "YYYY-MM-DD">
                                           </div>
                                        </td>
                                        <td>
                                            <div class = "col-md-12">
                                                <input name="certificate_or_diploma[]" id="certificate_or_diploma" class = "form-control input-sm" type = "text" placeholder = "">
                                           </div>
                                        </td>
                                        <td>
                                            <div class = "col-md-12">
                                                <input name="grade_or_division[]" id="grade_or_division" class = "form-control input-sm" type = "text" placeholder = "" >
                                           </div>
                                        </td>
                                      </tr>
                                       <tr>
                                        <td>
                                            <div class = " col-md-12">
                                                <input name="name_of_institution[]" id="institution" class = "form-control input-sm" type = "text" placeholder = "">
                                           </div>
                                        </td>
                                        <td>
                                            <div class = "col-md-12">
                                                <input name="location[]" id="location" class = "form-control input-sm" type = "text" placeholder = "">
                                           </div>
                                        </td>
                                        <td>
                                            <div class = "col-md-12">
                                                <input name="date_of_entering[]" id="date_of_entering" class = "form-control input-sm " type = "text" placeholder = "YYYY-MM-DD">
                                           </div>
                                        </td>
                                        <td>
                                            <div class = "col-md-12">
                                                <input name="date_of_leaving[]" id="date_of_leaving" class = "form-control input-sm " type = "text" placeholder = "YYYY-MM-DD">
                                           </div>
                                        </td>
                                        <td>
                                            <div class = "col-md-12">
                                                <input name="certificate_or_diploma[]" id="certificate_or_diploma" class = "form-control input-sm" type = "text" placeholder = "">
                                           </div>
                                        </td>
                                        <td>
                                            <div class = "col-md-12">
                                                <input name="grade_or_division[]" id="grade_or_division" class = "form-control input-sm" type = "text" placeholder = "" >
                                           </div>
                                        </td>
                                      </tr>
                                       <tr>
                                        <td>
                                            <div class = " col-md-12">
                                                <input name="name_of_institution[]" id="institution" class = "form-control input-sm" type = "text" placeholder = "">
                                           </div>
                                        </td>
                                        <td>
                                            <div class = "col-md-12">
                                                <input name="location[]" id="location" class = "form-control input-sm" type = "text" placeholder = "">
                                           </div>
                                        </td>
                                        <td>
                                            <div class = "col-md-12">
                                                <input name="date_of_entering[]" id="date_of_entering" class = "form-control input-sm " type = "text" placeholder = "YYYY-MM-DD">
                                           </div>
                                        </td>
                                        <td>
                                            <div class = "col-md-12">
                                                <input name="date_of_leaving[]" id="date_of_leaving" class = "form-control input-sm " type = "text" placeholder = "YYYY-MM-DD">
                                           </div>
                                        </td>
                                        <td>
                                            <div class = "col-md-12">
                                                <input name="certificate_or_diploma[]" id="certificate_or_diploma" class = "form-control input-sm" type = "text" placeholder = "">
                                           </div>
                                        </td>
                                        <td>
                                            <div class = "col-md-12">
                                                <input name="grade_or_division[]" id="grade_or_division" class = "form-control input-sm" type = "text" placeholder = "" >
                                           </div>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td colspan="6">
                                            {{ Form::submit('Save Student',array('class' => 'btn btn-circle btn-primary')) }}
                                            <button type = "button" class = "btn btn-primary" onclick="updatetab(3)">&nbsp;Next&nbsp;</button>
                                        </td>
                                    </tr>
                                </table>
                            
                                
                            
                              
                        </div>
                        <div id="tabs-4">
                            <table class=" table table-condensed" >
                                    <tr>
                                        <td  class="col-md-12">
                                           <div class = "form-group">
                                               <label for = "firstname" class = "col-md-11 control-label" style="text-align:left;">
                                                   {{ Form::label('title','If you are presently a candidate for any title, degree or diploma, name it')}}
                                              </label>


                                          </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td  class="col-md-12">
                                            <div class = "form-group">
                                              <div class = "col-md-11">
                                                  {{ Form::text('candidate_for_any_degree_title',null,array('id'=>'candidate_for_any_degree_title','class' => 'form-control input-sm','placeholder'=>''))}}

                                              </div>
                                           </div>
                                        </td>
                                    </tr>
                                    <tr>
                                    <td  class="col-md-12">
                                        <input type="hidden" id="student_major_sub_undergraduate_ids" name="student_major_sub_undergraduate_ids"  value="">
                                        <input type="hidden" id="student_major_sub_graduate_ids" name="student_major_sub_graduate_ids"  value="">
                                        <table style="width:100%" class="table-bordered table-condensed">
                                            <tr>
                                                <td colspan="2"><b>College or University Majors(s):</b></td>
                                            </tr>
                                            <tr>
                                                <td class="col-md-6"><b>Major in Undergraduate Studies:</b></td>
                                                <td class="col-md-6"><b>Major in Graduate Studies:</b></td>
                                            </tr>
                                            <tr>
                                                <td class="col-md-6">
                                                     <input name="major_in_undergraduate[]" id="major_in_undergraduate" class = "form-control input-sm" type = "text" placeholder = "Subject 1">
                                                </td>
                                                <td class="col-md-6">
                                                    <input name="major_in_graduate[]" id="major_in_graduate" class = "form-control input-sm" type = "text" placeholder = "Subject 1">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="col-md-6">
                                                    <input name="major_in_undergraduate[]" id="major_in_undergraduate" class = "form-control input-sm" type = "text" placeholder = "Subject 2">
                                                </td>
                                                <td class="col-md-6">
                                                    <input name="major_in_graduate[]" id="major_in_graduate" class = "form-control input-sm" type = "text" placeholder = "Subject 2">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="col-md-6">
                                                    <input name="major_in_undergraduate[]" id="major_in_undergraduate" class = "form-control input-sm" type = "text" placeholder = "Subject 3">
                                                </td>
                                                <td class="col-md-6">
                                                    <input name="major_in_graduate[]" id="major_in_graduate" class = "form-control input-sm" type = "text" placeholder = "Subject 3">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="col-md-6">
                                                    <input name="major_in_undergraduate[]" id="major_in_undergraduate" class = "form-control input-sm" type = "text" placeholder = "Subject 4">
                                                </td>
                                                <td class="col-md-6">
                                                    <input name="major_in_graduate[]" id="major_in_graduate" class = "form-control input-sm" type = "text" placeholder = "Subject 4">
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                                <tr>
                                    <td >
                                        {{ Form::submit('Save Student',array('class' => 'btn btn-circle btn-primary')) }}
                                        <button type = "button" class = "btn btn-primary" onclick="updatetab(4)">&nbsp;Next&nbsp;</button>
                                    </td>
                                </tr>
                                </table>  
                        </div>              
                        <div id="tabs-5">
                            <table class=" table table-condensed" >
                             <tr>
                              <td colspan="2">
                                 <div class = "form-group">
                                     <label for = "firstname" class = "col-md-3 control-label" style="text-align:left;">
                                         {{ Form::label('title','Years of English Medium Schooling:')}}
                                    </label>
                                    <div class = "col-md-9">
                                        {{ Form::text('years_of_english_medium',null,array('id'=>'years_of_english_medium','class' => 'form-control input-sm','placeholder'=>''))}}

                                    </div>
                                   
                                </div>
                              </td>
                            </tr>
                            
                             <tr>
                              <td class="col-md-12" colspan="2">
                                  <div class="col-md-2">
                                      {{ Form::label('title','First Language:')}}
                                  </div>
                                  <div class="col-md-2">
                                      Urdu&nbsp;<input type="radio" name="first_language" value="urdu" checked>
                                  </div>
                                  <div class="col-md-2">
                                      English&nbsp;<input type="radio" name="first_language" value="english">
                                  </div>
                                  <div class="col-md-2">
                                      Punjabi&nbsp;<input type="radio" name="first_language" value="punjabi">
                                  </div>
                                  <div class="col-md-2">
                                      Saraiki&nbsp;<input type="radio" name="first_language" value="saraiki">
                                  </div>
                                  <div class="col-md-2">
                                      Other&nbsp;<input type="radio" name="first_language" value="other">
                                  </div>
                              </td>
                          </tr>
                          
                          
                          <tr>
                              <td  class="col-md-6">
                                  <input type="hidden" name="student_language_ratings_ids" id="student_language_ratings_ids" value="">
                                  <table  class="table-bordered table-condensed">
                                      <tr>
                                          <td colspan="5">(Rate yourself E-Excellent, G-Good, F-Fair, P-Poor)</td>
                                      </tr>
                                      <tr>
                                          <td class="col-md-4">Language</td>
                                          <td class="col-md-2">Reading</td>
                                          <td class="col-md-2">Writing</td>
                                          <td class="col-md-2">Speaking</td>
                                          <td class="col-md-2">Listening</td>
                                      </tr>
                                      <tr>
                                          <td class="col-md-4">
                                              <input name="name_of_language[]" id="name_of_language" class = "form-control input-sm" type = "text" placeholder = "Language 1">
                                          </td>
                                          <td class="col-md-2">
                                              <input name="reading_level[]" id="reading_level" class = "form-control input-sm" type = "text" placeholder = "">
                                          </td>
                                          <td class="col-md-2">
                                              <input name="writing_level[]" id="writing_level" class = "form-control input-sm" type = "text" placeholder = "">
                                          </td>
                                          <td class="col-md-2">
                                              <input name="speaking_level[]" id="speaking_level" class = "form-control input-sm" type = "text" placeholder = "">
                                          </td>
                                          <td class="col-md-2">
                                              <input name="listening_level[]" id="listening_level" class = "form-control input-sm" type = "text" placeholder = "">
                                          </td>
                                      </tr>
                                      <tr>
                                          <td class="col-md-4">
                                              <input name="name_of_language[]" id="name_of_language" class = "form-control input-sm" type = "text" placeholder = "Language 2">
                                          </td>
                                          <td class="col-md-2">
                                              <input name="reading_level[]" id="reading_level" class = "form-control input-sm" type = "text" placeholder = "">
                                          </td>
                                          <td class="col-md-2">
                                              <input name="writing_level[]" id="writing_level" class = "form-control input-sm" type = "text" placeholder = "">
                                          </td>
                                          <td class="col-md-2">
                                              <input name="speaking_level[]" id="speaking_level" class = "form-control input-sm" type = "text" placeholder = "">
                                          </td>
                                          <td class="col-md-2">
                                              <input name="listening_level[]" id="listening_level" class = "form-control input-sm" type = "text" placeholder = "">
                                          </td>
                                      </tr>
                                      <tr>
                                          <td class="col-md-4">
                                              <input name="name_of_language[]" id="name_of_language" class = "form-control input-sm" type = "text" placeholder = "Language 2">
                                          </td>
                                          <td class="col-md-2">
                                              <input name="reading_level[]" id="reading_level" class = "form-control input-sm" type = "text" placeholder = "">
                                          </td>
                                          <td class="col-md-2">
                                              <input name="writing_level[]" id="writing_level" class = "form-control input-sm" type = "text" placeholder = "">
                                          </td>
                                          <td class="col-md-2">
                                              <input name="speaking_level[]" id="speaking_level" class = "form-control input-sm" type = "text" placeholder = "">
                                          </td>
                                          <td class="col-md-2">
                                              <input name="listening_level[]" id="listening_level" class = "form-control input-sm" type = "text" placeholder = "">
                                          </td>
                                      </tr>
                                      
                                  </table>
                              </td>
                              <td class="col-md-6">
                                  <div class = "form-group">
                                    <label for = "firstname" class = "col-md-3 control-label">
                                         {{ Form::label('title','Honors and Awards if any:')}}
                                    </label>

                                   <div class = "col-md-9">
                                       {{ Form::textarea('honors_awards',null,array('id'=>'honors_awards','class' => 'form-control input-sm','placeholder'=>'Honors and Awards','rows'=>'8'))}}

                                   </div>
                                </div>
                              </td>
                          </tr>
                          
                           <tr>
                              <td colspan="2" style="text-align:left;">
                                 <div class = "form-group">
                                    <label for = "firstname" class = "col-md-3 control-label">
                                         {{ Form::label('title','Favourite Activities:')}}
                                    </label>

                                   <div class = "col-md-9">
                                       {{ Form::textarea('fav_activities',null,array('id'=>'fav_activities','class' => 'form-control input-sm','placeholder'=>'Favourite Activities','rows'=>'3'))}}

                                   </div>
                                </div>
                              </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    {{ Form::submit('Save Student',array('class' => 'btn btn-circle btn-primary')) }}
                                    <button type = "button" class = "btn btn-primary" onclick="updatetab(5)">&nbsp;Next&nbsp;</button>
                                </td>
                            </tr>
                            </table>
                        </div>
                        <div id="tabs-6">
                            <table class=" table table-condensed" style="width:100%;">
                          
                          
                          
                            <tr>
                                <td colspan="2">
                                  <div class = "form-group">
                                    <label for = "lastname" class = "col-md-4 control-label">
                                         {{ Form::label('title','Name of Applicant:')}}
                                    </label>

                                    <div class = "col-md-7">
                                        {{ Form::text('applicant_name',null,array('id'=>'applicant_name','class' => 'form-control input-sm','placeholder'=>'Name of Applicant'))}}

                                    </div>
                                 </div>
                              </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                  <div class = "form-group">
                                    <label for = "lastname" class = "col-md-4 control-label">
                                         {{ Form::label('title','Privately Supported Student:')}}
                                    </label>

                                    <div class = "col-md-7">
                                        {{ Form::text('privately_supported_student',null,array('id'=>'privately_supported_student','class' => 'form-control input-sm','placeholder'=>'Privately Supported Student'))}}

                                    </div>
                                 </div>
                              </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                  <div class = "form-group">
                                    <label for = "lastname" class = "col-md-4 control-label">
                                         {{ Form::label('title','Name of Sponsor:')}}
                                    </label>

                                    <div class = "col-md-7">
                                        {{ Form::text('sponsor_name',null,array('id'=>'sponsor_name','class' => 'form-control input-sm','placeholder'=>'Name of Sponsor'))}}

                                    </div>
                                 </div>
                              </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                  <div class = "form-group">
                                    <label for = "lastname" class = "col-md-4 control-label">
                                         {{ Form::label('title','Relationship to Sponsored Student:')}}
                                    </label>

                                    <div class = "col-md-7">
                                        {{ Form::text('sponsor_relation',null,array('id'=>'sponsor_relation','class' => 'form-control input-sm','placeholder'=>'Relationship to Sponsored Student'))}}

                                    </div>
                                 </div>
                              </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                  <div class = "form-group">
                                    <label for = "lastname" class = "col-md-4 control-label">
                                         {{ Form::label('title','Signature of Sponsor:')}}
                                    </label>

                                      <div class = "col-md-2" style="border-bottom:1px #000 solid; ">&nbsp;</div>
                                      <div class = "col-md-1 control-label">Dated</div>
                                      <div class = "col-md-2">{{ Form::text('sponsor_sign_date',null,array('id'=>'sponsor_sign_date','class' => 'form-control input-sm','placeholder'=>''))}}</div>
                                      <div class = "col-md-1 control-label">Day of</div>
                                      <div class = "col-md-1" style="border-bottom:1px #000 solid; ">&nbsp;</div>
                                 </div>
                              </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <p>
                                        I certify that the information provided
                                    </p>
                                </td>
                            </tr>
                            <tr>
                               <td colspan="2">
                                  <div class = "form-group">
                                    <label for = "lastname" class = "col-md-10 control-label">
                                         {{ Form::label('title','Signature of Application:')}}
                                    </label>
                                    <div class = "col-md-2" style="border-bottom:1px #000 solid; ">&nbsp;</div>
                                 </div>
                              </td> 
                            </tr>
                            <tr>
                              <td colspan="2">
                                  
                                  {{ Form::submit('Save Student',array('class' => 'btn btn-circle btn-primary')) }}
                                    
                                  <button type = "button" class = "btn btn-primary" onclick="updatetab(6)">&nbsp;Next&nbsp;</button>
                              </td>
                            </tr>
                          
                      </table> 
                        </div>
                      
                        <div id="tabs-7">
                            <table style="width:100%;">
                            <tr>
                                <td colspan="2">
                                  <div class = "form-group">
                                    <label for = "lastname" class = "col-md-4 control-label">
                                         {{ Form::label('title','Admission Status:')}}
                                    </label>
                                    <div class = "col-md-2">
                                        <input type="radio"  name="admission_status" value="Processing" checked>&nbsp;Processing

                                    </div>
                                    <div class = "col-md-2">
                                        <input type="radio"  name="admission_status" value="Accepted" >&nbsp;Accepted

                                    </div>
                                      <div class="col-md-2">
                                          <input type="radio"  name="admission_status" value="Rejected">&nbsp;Rejected
                                      </div>
                                 </div>
                              </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                  <div class = "form-group">
                                    <label for = "lastname" class = "col-md-4 control-label">
                                         {{ Form::label('title','Dated:')}}
                                    </label>

                                    <div class = "col-md-7">
                                        {{ Form::text('admission_date',null,array('id'=>'admission_date','class' => 'form-control input-sm','placeholder'=>''))}}

                                    </div>
                                 </div>
                              </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                  <div class = "form-group">
                                    <label for = "lastname" class = "col-md-4 control-label">
                                         {{ Form::label('title','Interviewd by:')}}
                                    </label>

                                    <div class = "col-md-7">
                                        {{ Form::text('interviewed_by',null,array('id'=>'interviewed_by','class' => 'form-control input-sm','placeholder'=>''))}}

                                    </div>
                                 </div>
                              </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                  <div class = "form-group">
                                    <label for = "lastname" class = "col-md-4 control-label">
                                         {{ Form::label('title','Chairman Admission Committee:')}}
                                    </label>

                                    <div class = "col-md-7">
                                        {{ Form::text('chairman_admission_committee',null,array('id'=>'chairman_admission_committee','class' => 'form-control input-sm','placeholder'=>''))}}

                                    </div>
                                 </div>
                              </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                  <div class = "form-group">
                                    <label for = "lastname" class = "col-md-4 control-label">
                                         {{ Form::label('title','Fee Code:')}}
                                    </label>

                                      <div class = "col-md-2" >{{ Form::text('fee_code',null,array('id'=>'fee_code','class' => 'form-control input-sm','placeholder'=>''))}}</div>
                                      <div class = "col-md-1 control-label">Signature:&nbsp;</div>
                                      <div class = "col-md-1" style="border-bottom:1px #000 solid; margin-left: 5px; ">&nbsp;</div>
                                      <div class = "col-md-1 control-label">Dated:</div>
                                      <div class = "col-md-2" >{{ Form::text('fee_code_date',null,array('id'=>'fee_code_date','class' => 'form-control input-sm','placeholder'=>''))}}</div>
                                 </div>
                              </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <div class = "col-md-offset-5 col-md-5">
                                        {{ Form::submit('Save Student',array('class' => 'btn btn-circle btn-primary')) }}
                                    </div>
                                </td>
                            </tr>
                          
                      </table>
                          
                        </div>
                      <!-- end of tabs -->
                      </div>
                      </div>
                    {!! Form::Close()!!}
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
              </div>

            </div>
        </div>