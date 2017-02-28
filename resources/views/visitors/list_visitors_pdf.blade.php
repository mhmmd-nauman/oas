@extends('layouts.app_pdf')
@section('content')
        
        <div class=" container" >
            <div class="row">&nbsp;</div>
            <div class="row">
                <h5>Visitors Report</h5>
            </div>
            <div class="row">&nbsp;</div>
            <div class="row">
               <table class="table table-hover" >
                                <tr>
                                    <th>ID</th>
                                    <th>Date</th>
                                    <th>Name</th>
                                    <th>Contact</th>
                                    <th>Program</th>
                                    <th>Call/Visit</th>
                                    <th>DealtBy</th>
                                    <th>Status</th>
                                </tr>
                            <?php foreach ($students as $student){?>
                                <tr id="show">
                                    <td> <?php echo $student->id;?></td>
                                    <td><?php echo date("M d Y",  strtotime($student->created_at));?></td>
                                    <td> <?php echo $student->first_name." ".$student->last_name; ?></td>
                                    <td> <?php echo $student->mobile;  ?></td>
                                    <td><?php echo $student->student_program->program_name; ?></td>
                                    <td><?php echo $student->visit_type; ?></td>
                                    <td><?php echo $student->dealt_by; ?></td>
                                    <td><?php echo $student->status; ?></td>
                                </tr>
                            <?php } ?>
                     </table>
            
            </div>
                    
        </div>
@endsection



