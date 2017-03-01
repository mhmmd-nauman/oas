@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('css/iuboa_home.css') }}" >
<div class="container">
    @if (Auth::guest())
    <div class="row">
        
        <div class="outer_panel_color_scheme col-md-12" id="outer_panel_home"> 
		<div class="inner_panel_color_scheme" id="inner_panel_home"> 
		<div id="form_container_home">
			<div id="title_home">
                            <h4>Online Admission Portal</h4>
			</div>
			<div id="body_home">
				<div id="top_home">
					<div id="top_left_home">
						<br><br>
						<center>
                                                    <a href="{{ url('/register') }}"><button ><b>Register</b></button></a>
                                                    <br>to<br>Apply Online for Admission<br><br>
							<img src="./images/iub_main_gate.jpg" alt="A place to be" style="width:256px;height:148px;"><br>
							<b>{!! env('ORG_NAME') !!}</b>
						</center><br><br>							
					</div>
					<div id="top_right_home">
					</div>
				</div>
				<div id="bottom_home">
					<b>MS/MPhil/PhD</b> Admissions Coming Soon
				</div>				
			</div>
		</div></div>
        
            </div>
        
        </div>
    @else
        
       
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
                        <span class="glyphicon glyphicon-search" aria-hidden=true></span>Admission Office 
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
      
       @endif
    <div class="row">
        <div class="col-md-12">
            <hr>
        </div>
    </div>
</div>

@endsection