<!DOCTYPE html>
<html lang="en">
<head>
<title>BookShop On9</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="{{asset('assets/bootstrap2/css/bootstrap.min.css')}}" type="text/css">

    <!-- Custom Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="{{asset('assets/bootstrap2/font-awesome/css/font-awesome.min.css')}}" type="text/css">

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="{{asset('assets/bootstrap2/css/animate.min.css')}}" type="text/css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{asset('assets/bootstrap2/css/creative.css')}}" type="text/css">


</head>
<body id="app-layout">
    <nav class="navbar navbar">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    BookShop On9
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                      @if (!Auth::guest())
                        <li><a href="{{ url('/accountuser') }}">Account</a></li>
                       
                 	@else 
                 		<li><a href="{{ url('/') }}"></a></li>
                    @endif
                    </ul>
                     <ul class="nav navbar-nav">
                    @if (!Auth::guest() && Auth::user()->admin)
                            	<li><a href="{{ url('/home') }}">Home</a></li>
                            	
                     @else
                     	<li><a href="{{ url('/') }}"></a></li>
                     @endif
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Register</a></li>
                    @else
                       <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                              Hi Bookworm Buddies , {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                            	<li><a href="{{ url('/accountuser') }}"><i class="fa fa-btn fa-user-secret"></i>Account</a></li>
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')

    <!-- JavaScripts -->
    <!-- jQuery 2.1.4 -->
    <script src="{{asset('assets/bootstrap2/js/jquery.js')}}"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{asset('assets/bootstrap2/js/bootstrap.min.js')}}"></script>

    <!-- Plugin JavaScript -->
    <script src="{{asset('assets/bootstrap2/js/jquery.easing.min.js')}}"></script>
    <script src="{{asset('assets/bootstrap2/js/jquery.fittext.js')}}"></script>
    <script src="{{asset('assets/bootstrap2/js/wow.min.js')}}"></script>

    <!-- Custom Theme JavaScript -->
    <script src="{{asset('assets/bootstrap2/js/creative.js')}}"></script>

</body>

</html>