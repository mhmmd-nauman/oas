<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{!! env('PROJECT_NAME') !!}-{!! env('APP_NAME') !!} System </title>
    <!-- Fonts --> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">
    
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('bootstrap/dist/css/bootstrap.min.css') }}" >
    <link rel="stylesheet" href="{{ asset('js/DataTables-1.10.13/media/css/jquery.dataTables.css') }}" >
    <!--
    <link rel="stylesheet" type="text/css" href="{{ asset('js/DataTables-1.10.13/examples/resources/syntax/shCore.css') }}">
     
    <link rel="stylesheet" type="text/css" href="{{ asset('js/DataTables-1.10.13/examples/resources/demo.css') }}">
    -->
    <script src="{{ asset('js/jquery-3.1.1.min.js') }}" ></script>
    
    <script src="{{ asset('js/DataTables-1.10.13/media/js/jquery.dataTables.js') }}" ></script>
    <script type="text/javascript" language="javascript" src="{{ asset('js/DataTables-1.10.13/examples/resources/syntax/shCore.js') }}"></script>
    <script type="text/javascript" language="javascript" src="{{ asset('js/DataTables-1.10.13/examples/resources/demo.js') }}"></script>
    
    <script src="{{ asset('bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/jquery-ui-1.12.1/jquery-ui.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('js/jquery-ui-1.12.1/jquery-ui.css') }}">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}
    <style>
        body {
            font-family: 'Lato';
        }
        .fa-btn {
            margin-right: 6px;
        }
        .navbar-default{
            background-color: #444D44;
            margin: 5px;
            color: white;
        }
        .navbar-nav-link { color: white;}
        .top_bar {
            background-color: #444D44;
        }
        
    </style>
</head>
<body>
    <div class="container" >
        <div class="row">						
            <div  class="col-md-12 " >
                <img src="{{url('/')}}/images/iub_name_logo.png"  class="center-block"/>
            </div>
        </div>
        <div class="row">	
            <div class="col-md-12">
                <img src="{{url('/')}}/images/iub_sub_title_oa.png" class="center-block" />					
            </div>						
        </div>
        <div class="row">
            <br>
        </div>
            <div class="row">
                <div class="col-md-12 top_bar" >
                    
                    <nav class = "navbar navbar-default col-md-9" role = "navigation">
                    @if (Auth::guest())
                    
                    <ul class = "nav navbar-nav ">
                            <li ><a href = "{{url('/')}}" style="color:white;">Home</a></li>
                            <li ><a href = "#" style="color:white;">Regulations</a></li>
                            <li><a href="#" style="color:white;">Instructions</a></li>
                            <li><a href="#" style="color:white;">FAQs</a></li>
                            <li><a href="#" style="color:white;"">Contact</a></li>
                            <li><a href="#" style="color:white;">About</a></li>
                    </ul>
                    
                    @else
                    <div class = "navbar-header">
                       <a class = "navbar-brand" href = "{{url('/')}}" style="color:white;">{!! env('PROJECT_NAME') !!}-{!! env('APP_NAME') !!}</a>
                    </div>

                    <div>
                       <ul class = "nav navbar-nav ">
                           
                           <li class = "dropdown">
                             <a href = "#" class = "dropdown-toggle" data-toggle = "dropdown" style="color:white;">
                                System Settings 
                                <b class = "caret"></b>
                             </a>
                            <ul class="dropdown-menu">
                                <li><a href="{{url('/department')}}">Department</a></li>
                                <li><a href="{{url('/program')}}">Programs</a></li>
                                
                                <li><a href="{{url('/course')}}">Courses</a></li>
                                <li role = "presentation" class = "divider"></li>
                                <li><a href="#{{url('/personal-settings')}}">Personal Settings</a></li>
                            </ul>
                          </li>
                          <li class = "dropdown">
                             <a href = "#" class = "dropdown-toggle" data-toggle = "dropdown" style="color:white;">
                                Admission Office 
                                <b class = "caret"></b>
                             </a>
                            <ul class="dropdown-menu">
                                <li><a href="{{url('/visitor')}}">Visitors</a></li>
                                <li><a href="{{url('/student')}}">Admissions</a></li>
                                <!--
                                <li><a href="#{{url('/admission')}}">Admissions</a></li>
                                -->
                            </ul>
                           </li>
                          <li class = "dropdown">
                             <a href = "#" class = "dropdown-toggle" data-toggle = "dropdown" style="color:white;">
                                Academics 
                                <b class = "caret"></b>
                             </a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Attendances</a></li>
                                <li><a href="#">Course Selection</a></li>
                            </ul>
                           </li>
                           <li class = "dropdown">
                             <a href = "#" class = "dropdown-toggle" data-toggle = "dropdown" style="color:white;">
                                Accounts 
                                <b class = "caret"></b>
                             </a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Option 1</a></li>
                                <li><a href="#">Option 2</a></li>
                            </ul>
                           </li>
                           <li class = "dropdown">
                             <a href = "#" class = "dropdown-toggle" data-toggle = "dropdown" style="color:white;">
                                Reports 
                                <b class = "caret"></b>
                             </a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Report 1</a></li>
                                <li><a href="#">Report 2</a></li>
                            </ul>
                           </li>
                          

                       </ul>
                    </div>
                     @endif
                 </nav>
                     
                
                    <ul class = "nav  navbar-nav pull-right" >
                        @if (Auth::guest())
                        
                             
                        <li><a href="{{ url('/login') }}" style=" color: white;"> Login</a></li>
                                
                                
                                
                                <li><a href="{{ url('/register') }}" style=" color: white;" > Register</a></li>
                            

                         
                          @else
                          
                          <li class = "dropdown">
                              <a href = "#" class = "dropdown-toggle" data-toggle = "dropdown" style="color:white;">
                                {{ Auth::user()->name }}
                                <b class = "caret"></b>
                             </a>

                             <ul class = "dropdown-menu">
                                <li><a href = "#">My Profile</a></li>
                                
                                <li class = "divider"></li>
                                <li>
                                    <a href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                             </ul>

                          </li>
                          @endif
                    </ul>
                    
                    
                </div>
            </div>
        <br>
        
        <?php //echo var_dump(request()->all()); ?>
              
               @if (Request::has('success'))
                <div class="alert alert-info">
                    <ul>
                        <li>{{ Request::get('message') }}</li>
                    </ul>
                </div>
            @endif
            @yield('content')
            </div>
   

    <!-- JavaScripts -->
    
    
    
</body>
</html>