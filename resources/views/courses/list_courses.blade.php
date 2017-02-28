@extends('layouts.app')
@section('content')
<script>
function crearform(){
    $("#course_edit_id").val("");
    $("#course_id").val("");
    $("#name").val("");
    $("#code").val("");
    $("#credit_hours").val("");
}
function myFunction(course_id) {
    $("#course_id").val(course_id);
    $("#course_edit_id").val(course_id);
    //alert($("#course_id").val());
}
function setDelete(course_id){
    $("#course_id").val(course_id);
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
        function setVisitor(course_id){
            $("#course_edit_id").val(course_id);
        }
        $(".edit_button").click(function(){
            var id = $("#course_edit_id").val();
            //console.log( "JSON Data: " + id + " val "+ id );
            $.getJSON( "course_in_json?id="+id, function( json ) {
                //$("#course_id").val(json.id);
                $("#name").val(json.name);
                $("#code").val(json.code);
                $("#credit_hours").val(json.credit_hours);
                
                //$.each( json, function( key, val ) {
                    //console.log( "JSON Data: " + json.id + " val "+ val );
                    
                  //});
                
           });
        });
        $("#visitor_table").dataTable( {"bSort": false});
    });
</script>
<style type="text/css">
        .table-hover tbody tr:hover td, .table-hover tbody tr:hover th {
            background-color:#d4d4d4;
          }  
</style>


        
        <div class=" container" >
            <div class="row" style="margin: 0 0 0 0px;">
                <div class=" col-md-6">
                    <h3>{{$report_title}}</h3>
                </div>
                <div class="col-md-6">
                    <div class = "dropdown pull-right">
                        <button type="button" class="btn btn-danger pull-right" onclick="crearform()" data-toggle="modal" data-target="#myModal">Insert New Course</button>
                    </div>
            </div>
            <div class="row">
                <br>
            </div>
            <div class="row">
                
                <table class=" display" id="visitor_table" >
                <thead>            
                <tr>
                            <th style=" width: 10%;">ID</th>
                            
                            <th>Name</th>
                            <th style=" width: 10%;">Code</th>
                            <th style=" width: 10%;">Credit Hour</th>
                            <th style=" width: 10%;">Status</th>
                            <th style=" width: 15%;">Edit / Delete</th>
                        </tr>
                </thead>
                    <tbody>
                    <?php foreach ($courses as $course){?>
                        <tr >
                            <td> <?php echo $course->id;?></td>
                            <td> <?php echo $course->name; ?></td>
                            <td> <?php echo $course->code; ?></td>
                            <td> <?php echo $course->credit_hours; ?></td>
                            <td><?php echo $course->status; ?></td>
                            <td><button class="btn btn-danger btn-sm glyphicon glyphicon-refresh edit_button"  onclick="myFunction(<?php echo $course->id;?>)"  data-toggle="modal" data-target="#myModal" > Edit </button> &nbsp;&nbsp;
                                    <button class="btn btn-sm btn-danger" type="button" onclick="setDelete(<?php echo $course->id;?>);" data-toggle="modal" data-target="#confirmDelete" data-title="Delete User" data-message="Are you sure you want to delete this Course ?">
                                    <i class="glyphicon glyphicon-trash"></i> Delete
                                </button>

                            </td>
                        </tr>
                    <?php } ?>
                    </tbody>
             </table>

            </div>
                    
        </div>

<div class="modal fade" id="myModal" role="dialog" style=" margin: 0px;">
    <div class="modal-dialog" style="width: 90%;height: 90%;display: inline-block;text-align: center;vertical-align: middle;">
              <!-- Modal content-->
              <div class="modal-content" style="height: 90%;min-height: 90%;height: auto;border-radius: 0;">
                  <div class="modal-header" style=" background-color: #ac2925; color: white; font-size: 23px;">
                      <button type="button" class="close" data-dismiss="modal"><span class=" glyphicon glyphicon-remove"></span></button>
                  <h4 class="modal-title">Manage Courses Record</h4>
                </div>
                  <div style="width:900px;">
                      {!! Form::Open(array ('url' => '/add_course','class'=>'form-horizontal')) !!}
                      <table class="table"  >
                          <tr>
                              <td>
                                 <div class = "form-group">
                                    <label for = "firstname" class = "col-md-4 control-label">
                                         {{ Form::label('title','Course Name:')}}
                                    </label>

                                   <div class = "col-md-7">
                                       <input type="hidden" name="course_edit_id" id="course_edit_id" value="">
                                       {{ Form::text('name',null,array('id'=>'name','class' => 'form-control input-sm','placeholder'=>'Enter Course Name','required'=>'true'))}}

                                   </div>
                                </div>
                              </td>
                              <td>
                                  <div class = "form-group">
                                    <label for = "lastname" class = "col-md-4 control-label">
                                         {{ Form::label('title','Code:')}}
                                    </label>

                                    <div class = "col-md-7">
                                        {{ Form::text('code',null,array('id'=>'code','class' => 'form-control input-sm','placeholder'=>'Enter Course Code'))}}
                                    </div>
                                 </div>
                              </td>
                          </tr>
                          <tr>
                              <td>
                                  <div class = "form-group">
                                    <label for = "lastname" class = "col-md-4 control-label">
                                         {{ Form::label('title','Credit Hours:')}}
                                    </label>

                                    <div class = "col-md-7">
                                        {{ Form::text('credit_hours',null,array('id'=>'credit_hours','class' => 'form-control input-sm','placeholder'=>'Enter Credit Hours'))}}
                                    </div>
                                 </div>
                              </td>
                              <td>
                                  <div class = "form-group">
                                    <label for = "lastname" class = "col-md-4 control-label">
                                         {{ Form::label('title','Status:')}}
                                    </label>

                                    <div class = "col-md-7">
                                        <div class = "radio">
                                        <label>
                                           <input type = "radio" name = "status" id = "status" value = "Active" checked> Active
                                        </label>
                                        <label>
                                           <input type = "radio" name = "status" id = "status" value = "Disabled">
                                           Disabled
                                        </label>
                                     </div>

                                    </div>
                                 </div>
                              </td>
                          </tr>
                          
                          <tr>
                              <td class="col-md-12" colspan="2">
                                  <div class = "col-md-offset-5 col-md-5">
                                  {{ Form::submit('Save Course',array('class' => 'btn btn-circle btn-primary')) }}
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
        <div class="modal fade" id="confirmDelete" role="dialog" aria-labelledby="confirmDeleteLabel" aria-hidden="true">
             <div class="modal-dialog">
                <div class="modal-content">
                    {!! Form::Open(array ('url' => '/remove_course','class'=>'form-horizontal')) !!}
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                          <h4 class="modal-title">Delete Parmanently</h4>
                        </div>
                        <div class="modal-body">
                          <p>Are you sure about this ?</p>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                          <input type="hidden" name="course_id" id="course_id" value=""/>
                          {{ Form::submit('Delete',array('class' => 'btn btn-circle btn-danger')) }}
                          
                        </div>
                    {!! Form::Close()!!}
                </div>
              </div>
         </div>

@endsection