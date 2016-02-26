@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">

<html lang="en">

<head>

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

    <section class="bg-primary" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-1 text-center">
                     <div class="header-content">
                        <div class="header-content-inner">
                        <h1><b>JUST BUY ONLINE YOUR FAVOURITE BOOK NOW!</b></h1>
                    <hr class="light">
                    <p class="text-faded">Start BookShopOn9 now!<BR> It has everything you need to get your favourite books fast to you!</p>
                 <a href="#services" class="btn btn-default btn-xl wow tada">Find out more!</a>
                </div>
            </div>
                </div>
            </div>
        </div>
    </section>

    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 text-center">
                    <h2 class="section-heading">At Your Service</h2>
                    <hr class="primary">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-4 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-desktop wow bounceIn text-primary"></i>
                        <h3>Simple</h3>
                        <p class="text-muted">Just login and get your account instantly!</p>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-shopping-cart wow bounceIn text-primary" data-wow-delay=".1s"></i>
                        <h3>Easy</h3>
                        <p class="text-muted">Easy to use, just shopping now!</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-newspaper-o wow bounceIn text-primary" data-wow-delay=".2s"></i>
                        <h3>Up-to-date</h3>
                        <p class="text-muted">We update the book that fresh from the oven.</p>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-calendar wow bounceIn text-primary" data-wow-delay=".3s"></i>
                        <h3>Manageable</h3>
                        <p class="text-muted">Your account is manageable without reading the manual!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <aside class="bg-dark">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 text-center">
            <div class="call-to-action">
                <center><h2><br> Don't Just Wait, Start Register now!!</h2></center>
                   <a href="\register" class="btn btn-default btn-xl">Register now!</a>
                <center><h2><br> Already have Account? Login Here </h2></center>
                    <a href="\login" class="btn btn-default btn-xl">Login</a> 
            </div>
        </div>
         </div>
            </div>
    </aside>

    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-1 text-center">
                    <h2 class="section-heading">Let's Get In Touch!</h2>
                    <hr class="primary">
                    <p>Ready to start your shopping with us? That's great! Give us a call or send us an email for any comment!</p>
                </div>
                <div class="col-lg-3 col-lg-offset-2 text-center">
                    <i class="fa fa-phone fa-3x wow bounceIn"></i>
                    <p>123-456-4589</p>
                </div>
                <div class="col-lg-3 text-center">
                    <i class="fa fa-envelope-o fa-3x wow bounceIn" data-wow-delay=".1s"></i>
                    <p><a href="mailto:your-email@your-domain.com">feedback@bookshop.evernue.com</a></p>
                </div>
            </div>
        </div>
    </section>

    <!-- jQuery -->
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

        </div>
    </div>
</div>
@endsection