
<!DOCTYPE html>
<html lang="en"> 
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" >
       
    <!-- Title -->
    <title>
    @yield('title')
    </title> 
    
    <!-- favicon icon -->
    <link rel="icon" href="{{ asset('frontend/assets/images/favicon.ico')}}">
    
    <!-- Icons -->
    <!-- Icons -->
    <link href="{{ asset('frontend/assets/css/font-awesome.min.css')}}" rel="stylesheet"><!-- font-awesome.min css -->
    <link href="{{ asset('frontend/assets/css/custom-icons.css')}}" rel="stylesheet"><!-- custom-icons css -->


    <!-- CSS Stylesheet -->
    <link href="{{ asset('frontend/assets/css/bootstrap.css') }}" rel="stylesheet"><!-- bootstrap.min css -->
    <link href="{{ asset('frontend/assets/css/slick.css')}}" rel="stylesheet"><!-- slick css -->
    <link href="{{ asset('frontend/assets/css/slick-theme.css') }}" rel="stylesheet"><!-- slick-theme css -->
    <link href="{{ asset('frontend/assets/css/bootstrap-select.css') }}" rel="stylesheet"><!-- bootstrap selectbox css -->
    
    <link href="{{ asset('frontend/assets/css/style.css') }}" rel="stylesheet"><!-- style css --> 
	<link href="{{ asset('frontend/assets/css/css3.css') }}" rel="stylesheet">
	<link href="{{ asset('frontend/assets/css/theme/theme-1.css') }}" rel="stylesheet" id="switch_style">
    <!-- style css --> 
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	<!--[if gte IE 9]>
		<style type="text/css">
			.thumb-hover,
			.contact{filter: none;}
		</style>
	<![endif]-->
</head> 

<body>
	        <!-- Header Start -->
        <header id="header">
        	<div class="container"> 
            	<div class="row">
                	<div class="col-lg-4 col-md-3 col-sm-2">
                    	<div class="navbar-header">
                            <a class="navbar-brand" href="{{route('homepage')}}">
                                <img src="{{ asset('frontend/assets/images/logo.png') }}" alt="Logo" class="img-responsive" />
                            </a>
                            <button type="button" class="navbar-toggle">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button> 
                        </div> 
                    </div>
                    <div class="col-lg-8 col-md-9 col-sm-10">
                    	<div class="right-header clearfix">
                            <nav class="navigation">
                            	<div class="close-menu"><i class="fa fa-close" aria-hidden="true"></i></div>
                                <div class="navbar-collapse">
                                    <ul class="nav navbar-nav">
                                        <li class="active"><a href="{{route('homepage')}}">Home</a></li>
                                        <li><a href="{{route('aboutpage') }}">About</a></li>
                                        <li><a href="{{route('teampage')}}">Team</a></li>
                                        <li><a href="{{route('servicepage')}}">Services</a></li>
                                        <li><a href="{{route('reservation')}}">Reservation</a></li>
                                        <li><a href="{{route('contactpage')}}">Contact</a></li>
                                        <li><a href="{{route('faqpage')}}">FAQ’s</a></li>                                        
                                        <li><a href="#">LogIn/Register<em class="fa fa-angle-down" aria-hidden="true"></em></a>
                                        	<ul class="dropdown-menu"> 
                                                <li><a href="{{route('customer_login')}}">LogIn</a></li>
                                            	<li><a href="{{route('customer_registration')}}">Register</a></li>
                                            </ul> 
                                        </li>
                                         
                                    </ul>
                                </div>
                            </nav> 
                        </div>
                    </div>
                </div>
            </div>
        </header>




<!-- Banner and Content Area using Yield-->
@yield('banner')
@yield('content')
@include('sweetalert::alert')










        <!-- Footer Start -->
        <footer id="footer">
        	<div class="top-footer">
            	<div class="container">
                	<div class="row">
                        <div class="col-md-4 col-sm-6">
                            <h3>Quick Links</h3>
                            <div class="row">
                            	<div class="col-xs-6">
                                	<ul class="links">
                                        <li><a href="{{ route('home') }}">Home</a></li>
                                        <li><a href="about-us.html">About</a></li>
                                        <li><a href="#">Blog</a></li>
                                        <li><a href="#">For Corporates</a></li>
                                        <li><a href="#">Careers</a></li>
                                        <li><a href="contact-us.html">Contact</a></li>
                                    </ul>
                                </div>
                                <div class="col-xs-6">
                                	<ul class="links">
                                        <li><a href="#">Terms of Service</a></li>
                                        <li><a href="#">Privacy Policy</a></li>
                                        <li><a href="#">Unsubscribe</a></li>
                                        <li><a href="#">Download Apps</a></li>
                                        <li><a href="#">Partner With Us</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div> 
                        <div class="col-md-4 col-sm-6">
                            <h3>Our Services</h3>
                            <div class="row">
                            	<div class="col-xs-6">
                                	<ul class="links">
                                        <li><a href="#">Cleaning</a></li>
                                        <li><a href="#">Pest Control</a></li>
                                        <li><a href="#">Electrical</a></li>
                                        <li><a href="#">Plumbing</a></li>
                                        <li><a href="#">Appliance  Services</a></li>
                                        <li><a href="#">Carpentry</a></li>
                                    </ul>
                                </div>
                                <div class="col-xs-6">
                                	<ul class="links">
                                        <li><a href="#">Geyser</a></li>
                                        <li><a href="#">Vehicle Care</a></li>
                                        <li><a href="#">Painting</a></li>
                                        <li><a href="#">Home Security</a></li>
                                        <li><a href="#">Computer Repair</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12">
                            <h3>Follow us</h3>
                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                            <div class="contact-us">
                            <form action="#" method="post">
                            	<input type="email" placeholder="Enter email address" name=subscribe/>
                                <input type="submit" class="btn btn-primary" value="Subscribe" />
                            </form>
                            </div>
                            <ul class="list-inline social-links">
                                <li><a href="#"><i aria-hidden="true" class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i aria-hidden="true" class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i aria-hidden="true" class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i aria-hidden="true" class="fa fa-pinterest"></i></a></li>
                                <li><a href="#"><i aria-hidden="true" class="fa fa-youtube"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="quick-links">
                        <ul class="list-inline">
                            <li><a href="{{route('aboutpage') }}">About us</a></li>
                            <li><a href="#">Privacy</a></li>
                            <li><a href="{{route('faqpage')}}">FAQ</a></li>
                            <li><a href="#">Terms of Use</a></li>
                            <li><a href="{{route('contactpage')}}">Contact Us</a></li>
                            <li><a href="blog.html">Blog</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="copyright">
            	<div class="container">Copyright © 2019-2020 Easy Living. All Rights Reserved || Developed By <a target="_blank" href="http://mahabubazam.me/">Mahabub Azam</a> </div>
            </div>
        </footer> 
    </div>
    <!-- JavaScript files -->
    <script src="{{asset('frontend/assets/js/jquery-1.12.4.min.js')}}"></script><!-- jquery-1.12.4.min js-->
    <script src="{{asset('frontend/assets/js/bootstrap.min.js')}}"></script><!-- bootstrap.min js-->
    <script src="{{asset('frontend/assets/js/slick.min.js')}}"></script><!-- slick js-->
    <script src="{{asset('frontend/assets/js/bootstrap-select.min.js')}}"></script><!-- Bootstrap selectbox js-->
    <script src="{{asset('frontend/assets/js/custom.js')}}"></script><!-- custom js--> 
    <script type="text/javascript" src="{{asset('frontend/assets/js/jquery-1.6.1.min.js')}}"></script>
    <script src="{{asset('frontend/assets/js/jquery.dd.js')}}"></script><!-- selectbox js-->
    <script language="javascript" type="text/javascript">
		function showvalue(arg) {
			alert(arg);
		}
		$(document).ready(function() {
		try {
				oHandler = $(".mydds").msDropDown().data("dd");
				$("#ver").html($.msDropDown.version);
				} catch(e) {
					alert("Error: "+e.message);
				}
		})
    </script>
    <script>
        @include('sweetalert::alert')
    </script>
</body>

</html>
