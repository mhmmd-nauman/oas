<script type="text/javascript">
function crearform(){
    $("#student_id_edit").val("");
    $("#visitor_id").val("");
    $("#student_id").val("");
    $("#student_education_ids").val("");
    $("#first_name").val("");
    $("#last_name").val("");
    $("#father_name").val("");
    $("#program").val("1").change();
    $("#father_name").val("");
    $("#mobile").val("");
    $("#father_occupation").val("");
    $("#email").val("");
    $("#address").val("");
    $('input[name="marital_status"][value="Unmaried"]').attr('checked',true);
    $("#date_of_birth").val("");
    $("#sponsor_sign_date").val("");
    $("#fee_code_date").val("");
    $("#admission_date").val("");
    $("#country_of_citizenship").val("");
    $("#cnic").val("");
    $("#phone").val("");
    $("#postal_address").val("");
    
}
function setVisitor(visitor_id){
    $("#visitor_edit_id").val(visitor_id);
    $("#visitor_id").val(visitor_id);
}
function myFunction(student_id) {
    $("#student_id").val(student_id);
    $("#student_id_edit").val(student_id);
   // alert($("#student_id_edit").val());
}
function setDelete(student_id){
    $("#student_id").val(student_id);
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
 
    $(document).ready(function(){
        
        $.getJSON( "all_programs_in_json", function( json ) {
               var $select = $('#program');  
               $select.find('option').remove();
               //$("#program").append($('<option>').text("Select Program").attr('value', "0"));
               $.each( json, function( index, value ) {
                   //console.log( "JSON Data: " + key + " val "+ val.department );
                   //$select.append('<option value=' + key + '>' + value + '</option>');  
                   $("#program").append($('<option>').text(value.program_name).attr('value', value.id));
                 });


        });
        
        
        $(".edit_button").click(function(){
            var id = $("#student_id_edit").val();
            //alert( "JSON Data: " + id + " val "+ id );
            $.getJSON( "student_in_json?id="+id, function( json ) {
                
                $("#search_text").val(json.visitor_id);
                $("#visitor_id").val(json.visitor_id);
                $("#first_name").val(json.first_name);
                $("#last_name").val(json.last_name);
                $("#program").val(json.program_id).change();
                $("#admission_year").val(json.admission_year).change();
                $('input[name="semester"][value="' + json.semester + '"]').attr('checked',true);
                $("#father_name").val(json.father_name);
                $("#mobile").val(json.mobile);
                $("#phone").val(json.phone);
                
                $("#father_occupation").val(json.father_occupation);
                $("#email").val(json.email);

                $("#address").val(json.address);
                $('input[name="gender"][value="' + json.gender + '"]').attr('checked',true);
                $('input[name="marital_status"][value="' + json.marital_status + '"]').attr('checked',true);
                $("#date_of_birth").val("");
                if(json.date_of_birth !== "1970-01-01"){
                    $("#date_of_birth").val(json.date_of_birth);
                }
                $("#country_of_citizenship").val(json.country_of_citizenship);
                $("#cnic").val(json.cnic);
                $("#phone").val(json.phone);
                $("#postal_address").val(json.postal_address);
                $("#candidate_for_any_degree_title").val(json.candidate_for_any_degree_title);
                $("#years_of_english_medium").val(json.years_of_english_medium);
                $('input[name="first_language"][value="' + json.first_language + '"]').attr('checked',true);
                $("#honors_awards").val(json.honors_awards);
                $("#fav_activities").val(json.fav_activities);
                $("#applicant_name").val(json.applicant_name);

                $("#applicant_name").val(json.applicant_name);
                $("#privately_supported_student").val(json.privately_supported_student);
                $("#sponsor_name").val(json.sponsor_name);
                $("#sponsor_relation").val(json.sponsor_relation);
                
                $("#sponsor_sign_date").val("");
                if(json.sponsor_sign_date !== "1970-01-01"){
                    $("#sponsor_sign_date").val(json.sponsor_sign_date);
                }
                $('input[name="admission_status"][value="' + json.admission_status + '"]').attr('checked',true);
                //$("#admission_date").val(json.admission_date);
                $("#admission_date").val("");
                if(json.admission_date !== "1970-01-01"){
                    $("#admission_date").val(json.admission_date);
                }
                
                $("#interviewed_by").val(json.interviewed_by);
                $("#chairman_admission_committee").val(json.chairman_admission_committee);

                $("#fee_code").val(json.fee_code);
                //$("#fee_code_date").val(json.fee_code_date);
                
                $("#fee_code_date").val("");
                if(json.fee_code_date !== "1970-01-01"){
                    $("#fee_code_date").val(json.fee_code_date);
                }
                
                //$.each( json, function( key, val ) {
                //    console.log( "JSON Data: " + key + " val "+ val );
                    
                //  });
                
           });
           // next jason request
           
           $.getJSON( "student_education_in_json?id="+id, function( json ) {
                var i = 0;
                var education_string = "";
                $.each( json, function( key, val ) {
                    //console.log( "JSON Data: " + key + " val "+ val.institution_name );
                    $("[id=institution]:eq("+i+")").val(val.institution_name);
                    $("[id=location]:eq("+i+")").val(val.location);
                    $("[id=date_of_entering]:eq("+i+")").val(val.date_of_entering);
                    $("[id=date_of_leaving]:eq("+i+")").val(val.date_of_leaving);
                    $("[id=certificate_or_diploma]:eq("+i+")").val(val.degree_receive);
                    $("[id=grade_or_division]:eq("+i+")").val(val.grade);
                    
                    education_string = education_string + val.id + ",";
                    i++;
                  });
                  $("[id=student_education_ids]:eq(0)").val(education_string);
                  
           });
           // major subjects
           $.getJSON( "student_pre_major_subjects_in_json?id="+id, function( json ) {
                var i = 0;
                var i2 = 0;
                var major_subject_undergraduate_string = "";
                var major_subject_graduate_string = "";
                $.each( json, function( key, val ) {
                    console.log( "JSON Data: " + val.subject_type + " val "+ val.id );
                    if(val.subject_type === "undergraduate"){
                        $("[id=major_in_undergraduate]:eq("+i+")").val(val.subject_name);
                        major_subject_undergraduate_string = major_subject_undergraduate_string + val.id + ",";
                        i++;
                    }else{
                        $("[id=major_in_graduate]:eq("+i2+")").val(val.subject_name);
                        major_subject_graduate_string = major_subject_graduate_string + val.id + ",";
                        i2++;
                    }
                    
                    
                  });
                  $("[id=student_major_sub_undergraduate_ids]:eq(0)").val(major_subject_undergraduate_string);
                  $("[id=student_major_sub_graduate_ids]:eq(0)").val(major_subject_graduate_string);
            });
            
            // student language ratings
           $.getJSON( "student_langauage_ratings_in_json?id="+id, function( json ) {
                var i = 0;
                var student_language_ratings_string = "";
                $.each( json, function( key, val ) {
                    console.log( "JSON Data: " + val.language_name + " val "+ val.id );
                    $("[id=name_of_language]:eq("+i+")").val(val.language_name);
                    $("[id=reading_level]:eq("+i+")").val(val.reading);
                    $("[id=writing_level]:eq("+i+")").val(val.writing);
                    $("[id=speaking_level]:eq("+i+")").val(val.speaking);
                    $("[id=listening_level]:eq("+i+")").val(val.listening);
                    student_language_ratings_string = student_language_ratings_string + val.id + ",";
                    i++;
                  });
                  $("[id=student_language_ratings_ids]:eq(0)").val(student_language_ratings_string);
            });
           
        });
        
        function process_course_allocation(){
            $('#checkboxes').html("");
            $('#assigned_courses').html("");
            
            var id = $("#student_id_edit").val();
            $("#allocatted_student_id").val(id);
            var semester = $('input[id=semester]:checked').val();
            var allocation_year = $('#allocation_year').val();
            $('#allocation_semester_message1').html(semester +" "+ allocation_year);
            $('#allocation_semester_message2').html(semester +" "+ allocation_year);
            
            // retrieve student and put on screen somewhere
            $.getJSON( "student_in_json?id="+id, function( json ) {
                $('#allocation_semester_head_message').html("");
                $('#allocation_semester_head_message').append(json.first_name+' '+json.last_name+' - '+json.roll_number);
            });
            // end of student retreival
            //alert(id);
            $('#checkboxes').html("waiting.....");
            $.getJSON( "all_student_unallocated_courses_in_json?allocatted_student_id="+id+"&semester="+semester+"&allocation_year="+allocation_year, function( json ) {
                $('#checkboxes').html("");
                var empty_flag = 1;
                $.each( json, function( index, value ) {
                    empty_flag = 0;
                    //console.log( "JSON Data: " + key + " val "+ val.id );
                    //<div class = "col-md-12"
                    $('#checkboxes').append('<div class = "col-md-4"><input type="checkbox" name="allocated_course_name[]" value="' + value.id + '" id="allocated_course_id" /> ' + value.name + '</div>');
                   // $("#program").append($('<option>').text(value.program_name).attr('value', value.id));
                  });
                  if(empty_flag == 1){
                      $('#checkboxes').append('<p><b> Student has been allocated all courses in study program!</b></p>');
                  }
                 
                  
           });
           // plug allready assigned courses
           var allready_assigned_courese_list = "";
           $('#assigned_courses').html("waiting.......");
           $.getJSON( "all_student_allocated_courses_in_json?allocatted_student_id="+id+"&semester="+semester+"&allocation_year="+allocation_year, function( json ) {
                $('#assigned_courses').html("");
                var empty_flag = 1;
                $.each( json, function( index, value ) {
                    empty_flag = 0;
                    $('#assigned_courses').append('<div class = "col-md-4"><input type="checkbox" name="allocated_course_name[]" value="' + value.id + '" id="allocated_course_id" checked /> ' + value.name + '</div>');
                    allready_assigned_courese_list = allready_assigned_courese_list+value.id+",";
                  });
                 $('#assigned_courses').append('<input type="hidden" name=allready_assigned_courses value="'+allready_assigned_courese_list+'">'); 
                if(empty_flag == 1){
                    $('#assigned_courses').append('<p><b> No Course Allocated for this Semester to the student!</b></p>');
                }
           });
        }
        
        $(".courses_alloted").click(function(){
            process_course_allocation();
        });
        $(".courses_alloted_year").change(function(){
            process_course_allocation();
        });
        
        
        $(".courses_student_marks").click(function(){
            var id = $("#student_id_edit").val();
            $("#marks_detail_student_id").val(id);
            var semester = $('input[id=marks_semester]:checked').val();
            var allocation_year = $('#marks_allocation_year').val();
           // plug allready assigned courses
           
           $('#marks_semester_message').html(semester +" "+ allocation_year);
           var allready_assigned_courese_list = "";
           var displayed_html = "";
           $.getJSON( "all_student_allocated_courses_marks_in_json?allocatted_student_id="+id+"&semester="+semester+"&allocation_year="+allocation_year, function( json ) {
                $('#assigned_student_courses').html("");
                displayed_html = displayed_html + "<div class ='row'>";
                    displayed_html = displayed_html + "<div class = 'col-md-3'><b>Subject</b></div>";
                    displayed_html = displayed_html + "<div class = 'col-md-2'><b>Mid Marks</b></div>";
                    displayed_html = displayed_html + "<div class = 'col-md-2'><b>Final Marks</b></div>";
                    displayed_html = displayed_html + "<div class = 'col-md-1'><b>As. Marks</b></div>";
                    displayed_html = displayed_html + "<div class = 'col-md-1'><b>Q. Marks</b></div>";
                    displayed_html = displayed_html + "<div class = 'col-md-1'><b>P. Marks</b></div>";
                    displayed_html = displayed_html + "<div class = 'col-md-1'><b>At. Marks</b></div>";
                    displayed_html = displayed_html + "</div>";
                    //sessional_assignment
                $.each( json, function( index, value ) {
                    displayed_html = displayed_html + "<div class ='row'>";
                    displayed_html = displayed_html + "<div class = 'col-md-3'>" + value.name + "</div>";
                    displayed_html = displayed_html + "<div class = 'col-md-2'><input type='text' name='midterm_marks[" + value.id + "][]' id='midterm_marks' class='form-control input-sm' value='"+value.pivot.midterm_marks+"'></div>";
                    displayed_html = displayed_html + "<div class = 'col-md-2'><input type='text' name='finalterm_marks[" + value.id + "][]' id='finalterm_marks' class='form-control input-sm' value='"+value.pivot.finalterm_marks+"'></div>";
                    displayed_html = displayed_html + "<div class = 'col-md-1'><input type='text' name='sessional_assignment[" + value.id + "][]' id='sessional_assignment' class='form-control input-sm' value='"+value.pivot.sessional_assignment+"'></div>";
                    displayed_html = displayed_html + "<div class = 'col-md-1'><input type='text' name='sessional_quiz[" + value.id + "][]' id='sessional_quiz' class='form-control input-sm' value='"+value.pivot.sessional_quiz+"'></div>";
                    displayed_html = displayed_html + "<div class = 'col-md-1'><input type='text' name='sessional_presentation[" + value.id + "][]' id='sessional_presentation' class='form-control input-sm' value='"+value.pivot.sessional_presentation+"'></div>";
                    displayed_html = displayed_html + "<div class = 'col-md-1'><input type='text' name='sessional_attendence[" + value.id + "][]' id='sessional_attendence' class='form-control input-sm' value='"+value.pivot.sessional_attendence+"'></div>";
                    displayed_html = displayed_html + "</div>";
                    allready_assigned_courese_list = allready_assigned_courese_list+value.id+",";
                  });
                $('#assigned_student_courses').append(displayed_html);
                $('#assigned_student_courses').append('<input type="hidden" name=allready_assigned_courses value="'+allready_assigned_courese_list+'">'); 
           });
        });
        
        
        //$("#student_table").dataTable();
        $("#student_table").dataTable( {"bSort": false});
        //$("input[name=education]").attr('value', 'love'); id="institution"
        //$("[id=task]:eq(0)").val("one");
        //$("[id=task]:eq(1)").val("two");
    });
    
    $(document).ready(function(){
        $("#search_button").click(function(){
            var id =$("#search_text").val();
            $.getJSON( "visitor_in_json?id="+id, function( json ) {
                
                alert("Visitor Data Loaded!");
                $("#visitor_id").val(id);
                $("#first_name").val(json.first_name);
                $("#last_name").val(json.last_name);
                $("#program").val(json.program).change();
                //$.each( json, function( key, val ) {
                    //console.log( "JSON Data: " + json.id + " val "+ val );
                    
                  //});
                
           });
        });
    });
    

          $(function() {
            $( "#tabs" ).tabs();
            $( "#date_of_birth" ).datepicker({
              changeMonth: true,
              changeYear: true,
              yearRange: "-60:+0",
              dateFormat: "yy-mm-dd"
            }).datepicker("setDate", new Date());
            $( "#admission_date" ).datepicker({
              changeMonth: true,
              changeYear: true,
              yearRange: "-60:+0",
              dateFormat: "yy-mm-dd"
            }).datepicker("setDate", new Date());
            $( "#fee_code_date" ).datepicker({
              changeMonth: true,
              changeYear: true,
              yearRange: "-60:+0",
              dateFormat: "yy-mm-dd"
            }).datepicker("setDate", new Date());
            
            $( "#sponsor_sign_date" ).datepicker({
              changeMonth: true,
              changeYear: true,
              yearRange: "-60:+0",
              dateFormat: "yy-mm-dd",
            }).datepicker("setDate", new Date());
            
            // date_of_leaving
            $( ".date_of_entering" ).datepicker({
              changeMonth: true,
              changeYear: true,
              yearRange: "-60:+0",
              dateFormat: "yy-mm-dd",
            }).datepicker("setDate", new Date());
            $( ".date_of_leaving" ).datepicker({
              changeMonth: true,
              changeYear: true,
              yearRange: "-60:+0",
              dateFormat: "yy-mm-dd",
            }).datepicker("setDate", new Date());
           // $('#tabs').tabs('select', '#tabs-7');
            
          });
          function updatetab(index){
              $("#tabs").tabs({ active: index });
          }
</script>