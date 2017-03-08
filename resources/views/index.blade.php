@extends('layouts.app')

@section('content')

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
        <div id="title_personal_info">
                Overview of your Information
        </div>
        <br>
        <div class = "panel panel-default">
            <div class = "panel-heading">
               <h3 class = "panel-title">
                  Personal Information
               </h3>
            </div>

            <div class = "panel-body">
                <table class="table table-borderless table-hover">
                    <tr>
                        <td class="col-md-2">
                            CNIC#
                        </td>
                        <td>
                            tt
                        </td>
                        <td class="col-md-2">
                            Name
                        </td>
                        <td>
                            tt
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Father's Name
                        </td>
                        <td>
                            tt
                        </td>
                        <td>
                            Phone
                        </td>
                        <td>
                            tt
                        </td>
                    </tr>
                    <tr>
                        <td>
                            E-Mail
                        </td>
                        <td>
                            tt
                        </td>
                        <td>
                            Gender
                        </td>
                        <td>
                            tt
                        </td>
                    </tr>
                    <tr>
                        <td>
                            District
                        </td>
                        <td>
                            tt
                        </td>
                        <td>
                            Nationality
                        </td>
                        <td>
                            tt
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Current Mailing Address
                        </td>
                        <td>
                            tt
                        </td>
                        <td>
                            Permanent Address
                        </td>
                        <td>
                            tt
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Hafiz-e-Quran
                        </td>
                        <td>
                            tt
                        </td>
                        <td>
                            Blood Group
                        </td>
                        <td>
                            tt
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Religion
                        </td>
                        <td>
                            tt
                        </td>
                        <td>
                            
                        </td>
                        <td>
                            
                        </td>
                    </tr>
                </table>
            </div>
         </div>
        <div class = "panel panel-default">
            <div class = "panel-heading">
               <h3 class = "panel-title">
                  Guardian Information
               </h3>
            </div>

            <div class = "panel-body">
                  <table class="table table-borderless table-hover">
                    <tr>
                        <td class="col-md-2">
                            Name
                        </td>
                        <td>
                            
                        </td>
                        <td class="col-md-2">
                            Relationship
                        </td>
                        <td>
                            
                        </td>
                        <td class="col-md-2">
                            CNIC#
                        </td>
                        <td>
                            
                        </td>
                    </tr>
                    <tr>
                        <td class="col-md-2">
                            Phone
                        </td>
                        <td>
                            
                        </td>
                        <td class="col-md-2">
                            Monthly Income
                        </td>
                        <td>
                            
                        </td>
                        <td class="col-md-2">
                            Profession
                        </td>
                        <td>
                            
                        </td>
                    </tr>
                    <tr>
                        <td class="col-md-2">
                            Address
                        </td>
                        <td>
                            
                        </td>
                        <td class="col-md-2">
                            City
                        </td>
                        <td colspan="3">
                            
                        </td>
                        
                        
                    </tr>
                    
                </table>
            </div>
         </div>
        <div class = "panel panel-default">
            <div class = "panel-heading">
               <h3 class = "panel-title">
                  Educational Information
            </div>

            <div class = "panel-body">
               Panel content
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