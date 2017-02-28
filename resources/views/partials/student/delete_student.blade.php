<div class="modal fade" id="confirmDelete" role="dialog" aria-labelledby="confirmDeleteLabel" aria-hidden="true">
    <div class="modal-dialog">
       <div class="modal-content">
           {!! Form::Open(array ('url' => '/remove_student','class'=>'form-horizontal')) !!}
               <div class="modal-header">
                 <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                 <h4 class="modal-title">Delete Parmanently</h4>
               </div>
               <div class="modal-body">
                 <p>Are you sure about this ?</p>
               </div>
               <div class="modal-footer">
                 <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                 <input type="hidden" name="student_id" id="student_id" value=""/>
                 {{ Form::submit('Delete',array('class' => 'btn btn-circle btn-danger')) }}

               </div>
           {!! Form::Close()!!}
       </div>
     </div>
</div>