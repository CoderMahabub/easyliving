@extends('frontendpages.homepage.app')
    @section('title')
    Easy Living
    @endsection
    @section('content')

         <!-- Register Section -->            
 <section class="register-user">
        	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                    	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><em class="fa fa-close" aria-hidden="true"></em></span></button>
                       	<div class="row-height">
                            <div class="col-sm-height left-part">
                                <div class="service-intro-slider">
                                    <div>
                                        <div class="icon-box"><i class="icon icon-verifiedprofessionals" aria-hidden="true"></i></div>
                                        <div class="name">Verified Professionals</div>
                                        <p>Lorem Ipsum is simply dummy text the printing and typesetting industry.</p>
                                    </div>
                                    <div>
                                        <div class="icon-box"><i class="icon icon-insuredwork" aria-hidden="true"></i></div>
                                        <div class="name">Insured Work</div>
                                        <p>Lorem Ipsum is simply dummy text the printing and typesetting industry.</p>
                                    </div>
                                    <div>
                                        <div class="icon-box"><i class="icon icon-satisfactionguaranteed" aria-hidden="true"></i></div>
                                        <div class="name">Satisfaction Guaranteed</div>
                                        <p>Lorem Ipsum is simply dummy text the printing and typesetting industry.</p>
                                    </div>
                                    <div>
                                        <div class="icon-box"><i class="icon icon-easypayment" aria-hidden="true"></i></div>
                                        <div class="name">Easy Payment</div>
                                        <p>Lorem Ipsum is simply dummy text the printing and typesetting industry.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-height">
                                <div class="right-part">
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-tabs" role="tablist">
                                        <li role="presentation" class="active"><a href="#login" aria-controls="login" role="tab" data-toggle="tab">Login</a></li>
                                        <li role="presentation"><a href="#signup" aria-controls="signup" role="tab" data-toggle="tab">Sign up</a></li>
                                    </ul>
                                    <!-- Tab panes -->
                                    <div class="tab-content">
                                        <div role="tabpanel" class="tab-pane active" id="login">
                                            <form>
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="Enter your Mobile or Email"/>
                                                </div>
                                                
                                                <div class="form-group">
                                                    <input type="password" class="form-control" placeholder="Password"/>
                                                    <p class="help-block text-right"><a href="#">Trouble logging in?</a></p>
                                                </div>
                                                
                                                <div class="form-group">
                                                    <a href="#" class="btn btn-info btn-block">Secure Login</a>
                                                    <p class="help-block text-center">By Logging in you agree to our <a href="#">T&C </a> and <a href="#">Privacy Policy</a>. </p>
                                                </div>
                                            </form>
                                        </div>
                                        <div role="tabpanel" class="tab-pane" id="signup">
                                            <form>
                                                <div class="form-group">
                                                    <input type="text" class="form-control" placeholder="Mobile Number"/>
                                                </div>
                                                <div class="form-group">
                                                    <input type="email" class="form-control" placeholder="Email ID"/>
                                                </div>
                                                <div class="form-group">
                                                    <input type="password" class="form-control" placeholder="Password"/>
                                                </div>
                                                <div class="form-group">
                                                    <label class="label_check" for="checkbox-01"><INPUT name="sample-checkbox-01" id="checkbox-01" value="1" type="checkbox" checked="">I hereby certify that I am 18 years of age.</label>
                                                </div>
                                                <div class="form-group">
                                                    <a href="#" class="btn btn-info btn-block">Create Account</a>
                                                    <p class="help-block text-center">By Signing Up you agree to our <a href="#">T&C </a> and <a href="#">Privacy Policy</a>. </p>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div> 
                            </div>
                       	</div>
                        
                    </div>
                </div>
            </div>
        </section>

        
        <!-- Banner Section --> 
        <section id="banner" class="banner-slider">
			<div class="banner-img-slider">
                <!--<div id="slide-video">
                    <video autoplay loop width="900px" controls>
                        <source src="assets/video/Video.mp4" />
                    </video>
                </div>
                <div id="slide-video">
                    <video autoplay loop width="900px" controls>
                        <source src="assets/video/Video.mp4" />
                    </video>
                </div>-->
                <div>
					<div class="banner-thumb"><img src="{{asset('frontend/assets/images/banner-img/banner-img.png')}}" alt="" class="hide" /></div>
                </div>
                <div>
					<div class="banner-thumb"><img src="{{asset('frontend/assets/images/banner-img/team-banner.jpg')}}" alt="" class="hide" /></div>
                </div>
                <div>
					<div class="banner-thumb"><img src="http://www.alanyaeasyhome.com/files/easyhome-cleaning-services-home-service.jpg" alt="" class="hide" /></div>
                </div>
			</div>
			<div class="blue-overlay"></div>
			<div class="banner-text-wrapper">
                <div class="container">
                    <div class="banner-text">
                        <div class="row">
                        	<div class="col-lg-6 col-lg-offset-3 col-md-offset-2 col-md-8">
                            	<h1>Make Life Easy</h1>
                        		<div class="search-wrapper">
                                	<div class="row">
                                    	<div class="col-sm-4">
                                        	<select class="selectpicker">
                                                <option>Select City</option>
                                                <option>Dhaka</option>
                                                <option>Uttara</option>
                                                <option>Mirpur</option>
                                                <option>Gulshan</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-8">
                                        	<div class="service-list">
                                                <form name="myform" id="myform"  action="http://design.dev.drcsystems.ooo:8084/themeforest/easyliving/getvalue.php" enctype="multipart/form-data" method="post">
                                                    <select class="mydds" name="myimge">
                                                        <option value="" selected="selected" title="">What service do you need?</option>
                                                        <option value="electrical" title="icon icon-electrical" class="service1">Electrical</option>
                                                        <option value="security" title="icon icon-home">Home Security</option>
                                                        <option value="pestcontrol" title="icon icon-pestcontrol">Pest Control</option>
                                                        <option value="computerrepair" title="icon icon-computerrepair">Computer Repair</option>
                                                        <option value="cleaning" title="icon icon-cleaning">Cleaning</option>
                                                        <option value="plumber" title="icon icon-plumber">Plumbing</option>
                                                        <option value="appliances" title="icon icon-appliances">Appliances</option>
                                                        <option value="geyser" title="icon icon-geyser">Geyser</option>
                                                        <option value="painting" title="icon icon-painting">Painting</option>
                                                        <option value="vehiclecare" title="icon icon-vehiclecare">Vehicle Care</option>
                                                        <option value="carpentry" title="icon icon-carpentry">Carpentry</option>
                                                    </select>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
			</div>
		</section>
        
        <!-- Content Start -->
        <div id="content">
        	<!-- Our services Section -->
            <section id="services" class="section-block">
            	<div class="container">
                	<div class="top-desc text-center">
                        <h2>our Services</h2>
                        <p class="sub-heading">You’re in the right place!</p> 
                    </div>
                    <div class="service-slider">
                        <div class="col-md-3 col-sm-6">
                        	<a href="{{ route('serviceinteriorpage') }}">
                                <div class="img"><img src="{{asset('frontend/assets/images/service-img/service-img1.jpg')}}" alt="" /></div>
                                <span class="name">Electrical</span>
                            </a>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <a href="{{ route('serviceinteriorpage') }}">
                                <div class="img"><img src="{{asset('frontend/assets/images/service-img/service-img2.jpg')}}" alt="" /></div>
                                <span class="name">Plumbing</span>
                            </a>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <a href="{{ route('serviceinteriorpage') }}">
                                <div class="img"><img src="{{asset('frontend/assets/images/service-img/service-img3.jpg')}}" alt="" /></div>
                                <span class="name">Pest Control</span>
                            </a>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <a href="{{ route('serviceinteriorpage') }}">
                                <div class="img"><img src="{{asset('frontend/assets/images/service-img/service-img4.jpg')}}" alt="" /></div>
                                <span class="name">Painting</span>
                            </a>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <a href="{{ route('serviceinteriorpage') }}">
                                <div class="img"><img src="{{asset('frontend/assets/images/service-img/service-img5.jpg')}}" alt="" /></div>
                                <span class="name">Cleaning</span>
                            </a>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <a href="{{ route('serviceinteriorpage') }}">
                                <div class="img"><img src="{{asset('frontend/assets/images/service-img/service-img6.jpg')}}" alt="" /></div>
                                <span class="name">Appliances</span>
                            </a>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <a href="{{ route('serviceinteriorpage') }}">
                                <div class="img"><img src="{{asset('frontend/assets/images/service-img/service-img7.jpg')}}" alt="" /></div>
                                <span class="name">Carpentry</span>
                            </a>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <a href="{{ route('serviceinteriorpage') }}">
                                <div class="img"><img src="{{asset('frontend/assets/images/service-img/service-img8.jpg')}}" alt="" /></div>
                                <span class="name">Computer Repair</span>
                            </a>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <a href="{{ route('serviceinteriorpage') }}">
                                <div class="img"><img src="{{asset('frontend/assets/images/service-img/service-img9.jpg')}}" alt="" /></div>
                                <span class="name">Home Security</span>
                            </a>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <a href="{{ route('serviceinteriorpage') }}">
                                <div class="img"><img src="{{asset('frontend/assets/images/service-img/service-img10.jpg')}}" alt="" /></div>
                                <span class="name">Geyser</span>
                            </a>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <a href="{{ route('serviceinteriorpage') }}">
                                <div class="img"><img src="{{asset('frontend/assets/images/service-img/service-img11.jpg')}}" alt="" /></div>
                                <span class="name">Vehicle Care</span>
                            </a>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <a href="{{ route('serviceinteriorpage') }}">
                                <div class="img"><img src="{{asset('frontend/assets/images/service-img/service-img12.jpg')}}" alt="" /></div>
                                <span class="name">Spa</span>
                            </a>
                        </div>
                    </div>  
                </div>
            </section> 
            <!-- Service Provider Section --> 
            <section id="service-provider">
                <div class="row-height">
                    <div class="col-lg-4 col-sm-height">
                        <div class="inside-full-height left-part">
                            <h2>largest home Service Provider</h2>
                        </div>
                    </div>
                    <div class="col-lg-8 col-sm-height right-part">
                        <div class="inside-full-height">
                            <div class="row">
                                <div class="col-lg-5 col-sm-6">
                                    <div class="row-height">
                                        <div class="col-sm-height icon"><span><i class="fa fa-support" aria-hidden="true"></i></span></div>
                                        <div class="col-sm-height support">
                                            <span class="time">24/7</span>
                                            <span class="text">online<br>support</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-5 col-sm-6">
                                    <div class="row-height">
                                        <div class="col-sm-height icon"><span><i class="fa fa-phone" aria-hidden="true"></i></span></div>
                                        <div class="col-sm-height call-us">
                                            <span class="text">Call us toll free:</span>
                                            <span class="num">1 800 123 4567</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>  
        	<!-- How it works Section -->
            <section id="how-works" class="section-block">
            	<div class="container">
                	<div class="top-desc">
                        <h2>How it works</h2>
                        <p class="sub-heading">You’re in the right place!</p>
                    </div>
                    <div class="row">
                    	<div class="col-md-3 col-sm-6">
                        	<div class="icon"><i class="fa fa-search" aria-hidden="true"></i></div>
                        	<div class="name">Browse Services</div>
                            <p>Lorem Ipsum is simply dummy text the printing and typesetting industry. </p> 
                        </div>
                        <div class="col-md-3 col-sm-6">
                        	<div class="icon"><i class="fa fa-calendar-check-o" aria-hidden="true"></i></div>
                        	<div class="name">Schedule Service</div>
                            <p>Lorem Ipsum is simply dummy text the printing and typesetting industry. </p>
                        </div>
                        <div class="col-md-3 col-sm-6">
                        	<div class="icon"><i class="fa fa-list-alt" aria-hidden="true"></i></div>
                        	<div class="name">Book Service</div>
                            <p>Lorem Ipsum is simply dummy text the printing and typesetting industry. </p>
                        </div>
                        <div class="col-md-3 col-sm-6">
                        	<div class="icon"><i class="fa fa-gear" aria-hidden="true"></i></div>
                        	<div class="name">Resolves Issues</div>
                            <p>Lorem Ipsum is simply dummy text the printing and typesetting industry. </p>
                        </div>
                    </div>
                </div>
            </section>
        	<!-- Exceptional Quality Section -->
            <section id="exceptional-quality" class="section-block">
            	<div class="blue-overlay"></div>
               	<div class="container">
                    <div class="h1">Exceptional quality</div>
                    <div class="h1">Make Life Easy</div>
                    <a href="#" class="btn btn-info">Read More</a> 
                </div>
            </section>
            <!-- Our services Section -->
            <section id="our-services" class="section-block">
            	<div class="container">
                    <div class="row">
                    	<div class="col-md-3 col-sm-6">
                            <div class="icon-box"><i class="icon icon-verifiedprofessionals" aria-hidden="true"></i></div>
                            <div class="name">Verified Professionals</div>
                            <p>Lorem Ipsum is simply dummy text the printing and typesetting industry.</p>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="icon-box"><i class="icon icon-insuredwork" aria-hidden="true"></i></div>
                            <div class="name">Insured Work</div>
                            <p>Lorem Ipsum is simply dummy text the printing and typesetting industry.</p>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="icon-box"><i class="icon icon-satisfactionguaranteed" aria-hidden="true"></i></div>
                            <div class="name">Satisfaction Guaranteed</div>
                            <p>Lorem Ipsum is simply dummy text the printing and typesetting industry.</p>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="icon-box"><i class="icon icon-easypayment" aria-hidden="true"></i></div>
                            <div class="name">Easy Payment</div>
                            <p>Lorem Ipsum is simply dummy text the printing and typesetting industry.</p>
                        </div>
                    </div>
                </div>
            </section>
                    	<!-- Our Customers Section -->
                        <section id="our-customers" class="section-block">
            	<div class="container">
                	<div class="top-desc">
                        <h2>Our Happy Customers</h2>
                        <p class="sub-heading">You’re in the right place!</p>
                    </div>
                    <div class="row">
                    	<div class="col-md-3 col-sm-6">
                            <div class="img"><img src="{{asset('frontend/assets/images/customers-img/cust-img1.jpg')}}" alt="" /></div>
                            <div class="name">Pick a Services</div>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry lorem Ipsum has been the industry's standard  text specimen book.</p>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="img"><img src="{{asset('frontend/assets/images/customers-img/cust-img2.jpg')}}" alt="" /></div>
                            <div class="name">Pick a Services</div>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry lorem Ipsum has been the industry's standard  text specimen book.</p>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="img"><img src="{{asset('frontend/assets/images/customers-img/cust-img3.jpg')}}" alt="" /></div>
                            <div class="name">Pick a Services</div>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry lorem Ipsum has been the industry's standard  text specimen book.</p>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="img"><img src="{{asset('frontend/assets/images/customers-img/cust-img4.jpg')}}" alt="" /></div>
                            <div class="name">Pick a Services</div>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry lorem Ipsum has been the industry's standard  text specimen book.</p>
                        </div>
                    </div>
                </div>
            </section>

      	</div>
        
    @endsection