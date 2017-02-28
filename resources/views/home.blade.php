@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="jumbotron">
            <h3>Welcome to {!! env('PROJECT_NAME') !!}-{!! env('APP_NAME') !!} Administration</h3> 
        </div>
    </div>
    <div class="row">
        
        <div class = "panel-group" id = "accordion">
            <div class = "panel panel-default col-md-3">

               <div class = "panel-heading">
                  <h4 class = "panel-title">
                     <a data-toggle = "collapse" data-parent = "#accordion" href = "#collapseOne">
                        <span class="glyphicon glyphicon-search" aria-hidden=true></span>System Settings 
                     </a>
                  </h4>
               </div>

               <div id = "collapseOne" class = "panel-collapse collapse in">
                  <div class = "panel-body">
                        <div class="row">
                              <a href="{{url('/department')}}">
                              <button type=button class="btn btn-default col-md-6">
                                  <span class="glyphicon glyphicon-user" aria-hidden=true></span>Department
                              </button> 
                              </a>
                                <a href="{{url('/program')}}">
                              <button type=button class="btn btn-default col-md-6">
                                  <span class="glyphicon glyphicon-user" aria-hidden=true></span>Programs
                              </button> 
                              </a>
                        </div>
                        <br>
                        <div class="row">
                            
                            <button type=button class="btn btn-default col-md-6">
                                <span class="glyphicon glyphicon-user" aria-hidden=true></span>Users
                            </button> 
                            </a>
                        </div>
                      
                  </div>
               </div>

            </div>

            <div class = "panel panel-default col-md-3 col-md-offset-1">
               <div class = "panel-heading">
                  <h4 class = "panel-title">
                     <a data-toggle = "collapse" data-parent = "#accordion" href = "#collapseTwo">
                        <span class="glyphicon glyphicon-search" aria-hidden=true></span>Front Office 
                     </a>
                  </h4>
               </div>
               <div id = "collapseTwo" class = "panel-collapse collapse">
                  <div class = "panel-body">
                        <div class="row">
                              <a href="{{url('/visitor')}}">
                              <button type=button class="btn btn-default col-md-6">
                                  <span class="glyphicon glyphicon-user" aria-hidden=true></span>Visitors
                              </button> 
                              </a>
                                <a href="{{url('/student')}}">
                              <button type=button class="btn btn-default col-md-6">
                                  <span class="glyphicon glyphicon-user" aria-hidden=true></span>Admissions
                              </button> 
                              </a>
                        </div>
                        
                      
                  </div>
               </div>

            </div>

            <div class = "panel panel-default col-md-3 col-md-offset-1">
                <div class = "panel-heading">
                  <h4 class = "panel-title">
                     <a data-toggle = "collapse" data-parent = "#accordion" href = "#collapseThree">
                        <span class="glyphicon glyphicon-search" aria-hidden=true></span>Academics 
                     </a>
                  </h4>
               </div>
               <div id = "collapseThree" class = "panel-collapse collapse">
                  <div class = "panel-body">
                        <div class="row">
                              <a href="{{url('/#')}}">
                              <button type=button class="btn btn-default col-md-6">
                                  <span class="glyphicon glyphicon-user" aria-hidden=true></span>Attendances
                              </button> 
                              </a>
                                <a href="{{url('/#')}}">
                              <button type=button class="btn btn-default col-md-6">
                                  <span class="glyphicon glyphicon-user" aria-hidden=true></span>Course Selection
                              </button> 
                              </a>
                        </div>
                        
                      
                  </div>
               </div>

            </div>
         </div>
        </div>
      
    <div class="row">
        <div class="col-md-12">
            <hr>
        </div>
    </div>
</div>

@endsection