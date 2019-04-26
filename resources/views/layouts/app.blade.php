<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'SEAL-OMS') }}</title>
   <script src="{{ asset('js/sweetalert.min.js') }}"></script>
  <link href="{{ asset('css/sweetalert.css') }}" rel="stylesheet">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

  <link rel="icon" href="{{ asset('pictures/seal.jpg')}}"/>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @include('sweet::alert')


	 <!-- Support -->
<script type="text/javascript">var $zoho= $zoho || {livedesk:{values:{},ready:function(){$zoho.livedesk.chat.floatingwindow('all');}}};var d=document;s=d.createElement("script");s.type="text/javascript";s.defer=true;s.src="https://salesiq.zoho.com/support.jnueva/float.ls?embedname=jnueva";t=d.getElementsByTagName("script")[0];t.parentNode.insertBefore(s,t);</script>

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header" height="100%" style="padding-right:10px; margin-right:10px; border-right:2px solid black;">


                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a href="{{ url('/') }}">
                      <img height="75px" src="{{ asset('pictures/seal.jpg')}}"  />
                        <!-- SEAL OMS NAV TITLE -->
                    </a>

                </div>


                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                      <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                              <i class="fa fa-code" style="font-size:30px" aria-hidden="true"></i><br/>Activities<span class="caret"></span>
                          </a>
                          <ul class="dropdown-menu" role="menu">
                            <li><a href="{{ route('activity-store') }}"><i class="fa fa-plus" aria-hidden="true"> | New Activity</i></a></li>
                            <li><a href="{{ route('activity-list') }}"><i class="fa fa-list" aria-hidden="true"> | Ongoing Activity</i></a></li>
                            <li><a href="{{ route('past-activity') }}"><i class="fa fa-history" aria-hidden="true"> | Past Activities</i></a></li>
                          </ul>
                      </li>
                      <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                <i class="fa fa-users" style="font-size:30px" aria-hidden="true"></i><br/>Members<span class="caret"></span>
                          </a>
                          <ul class="dropdown-menu" role="menu">
                            <li><a href="{{ route('members-store') }}"><i class="fa fa-user-plus" aria-hidden="true"> | New Member</i></a></li>
                            <li><a href="{{ route('members-list') }}"><i class="fa fa-list" aria-hidden="true"> | Active Member List</i></a></li>
                            <li> </li>
                          </ul>
                      </li>
                      <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                <i class="fa fa-google" style="font-size:30px" aria-hidden="true"></i><br/>Google<span class="caret"></span>
                          </a>
                          <ul class="dropdown-menu" role="menu">
                            <li><a href="https://drive.google.com/drive/folders/0B68AOLn8QOqdbDVDUWQta0Fpckk?usp=sharing" target="_blank"><i class="fa fa-hdd-o" aria-hidden="true"> | Academics Drive</i></a></li> </li>
                            <li><a href="https://drive.google.com/drive/folders/0B68AOLn8QOqdWnVnYzlHZEc4a1k?usp=sharing" target="_blank"><i class="fa fa-hdd-o" aria-hidden="true"> | Activities Drive</i></a></li> </li>
                            <li><a href="https://www.youtube.com/channel/UCKWA1XquBIFwnzybZamXrzA?view_as=subscriber" target="_blank"><i class="fa fa-youtube-play" aria-hidden="true"> | Youtube Channel</i></a></li> </li>
                            <li><a href="https://groups.google.com/a/iacademy.edu.ph/forum/?hl=en#!forum/seal" target="_blank"><i class="fa fa-users" aria-hidden="true"> | Google Groups</i></a></li> </li>
                          </ul>
                      </li>
                      <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                <i class="fa fa-envelope" style="font-size:30px" aria-hidden="true"></i><br/>MAIL*<span class="caret"></span>
                          </a>
                          <ul class="dropdown-menu" role="menu">
                            <li><a href="#"><i class="fa fa-plus" aria-hidden="true"> | New Mail</i></a></li>
                            <li><a href="https://groups.google.com/a/iacademy.edu.ph/forum/?hl=en#!forum/seal"><i class="fa fa-google" aria-hidden="true"> | Google Groups</i></a></li> </li>
                          </ul>
                      </li>
                      <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                <i class="fa fa-mobile" style="font-size:30px" aria-hidden="true"></i><br/>SMS<span class="caret"></span>
                          </a>
                          <ul class="dropdown-menu" role="menu">
                            <li><a href="{{route('sms-store')}}"><i class="fa fa-plus" aria-hidden="true"> | New SMS</i></a></li>
                            <li><a href="{{route('sms-info')}}"><i class="fa fa-check-circle" aria-hidden="true"> | Check Account</i></a></li>
                          </ul>
                      </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                  <i style="font-size:30px" class="fa fa-user-circle" aria-hidden="true">
                                  </i><br>{{ Auth::user()->name }}<span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
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
        </nav>

        <div class="col-md-12">
          <div class="alert alert-warning">
            <strong>Alpha Mode: </strong> Some features may be working or incomplete.
          </div>

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
