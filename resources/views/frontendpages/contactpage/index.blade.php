@extends('frontendpages.homepage.app')
@section('title')
Contact Us
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
        @extends ('frontendpages.homepage.banner')
        @section('banner-title')
        Contact Us
        @endsection










        <!-- Content Start -->
        <div id="content">
        	<!-- Contact Us Section -->
            <section id="contact-us" class="section-block"> 
            	<div class="container">
                	<div class="top-desc text-center">
                        <h2>Contact Us</h2>
                    </div>
                    <div class="row">
                    	<div class="col-sm-8">
                        	<h3>Write Us</h3>
                        	<form id="contact_form">
                            	<div class="row">
                                	<div class="col-md-6">
                                    	<div class="form-group">
                                        	<label>First Name</label>
                                            <input type="text" name="fname" class="form-control" data-validation="required" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                    	<div class="form-group">
                                        	<label>Last Name</label>
                                            <input type="text" name="lname" class="form-control" data-validation="required"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                	<div class="col-md-6">
                                    	<div class="form-group">
                                        	<label>Email</label>
                                            <input type="text" name="email" class="form-control" data-validation="email"  data-validation-error-msg="Invalid e-mail address"/>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                    	<div class="form-group">
                                        	<label>Phone Number</label>
                                            <input type="text" name="phno" class="form-control" data-validation="required"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Message</label>
                                    <textarea name="msg" class="form-control" ></textarea>
                                </div>
                                <div class="form-group">
                                	<input type="submit" class="btn btn-info" value="SEND" id="attending_btn"/>
                                </div>
                            </form>
                        </div>
                        <div class="col-sm-4">
                        	<h3>Our Office Address</h3>
                            <address>
                            	<p><i class="fa fa-map-marker" aria-hidden="true"></i>House No. 65(1st Floor), Road No. 12, Sector No. 10, Uttara Model Town, Dhaka 1230</p>
                                <p><i class="fa fa-phone" aria-hidden="true"></i>+880 1737766950</p>
                                <p><i class="fa fa-envelope-o" aria-hidden="true"></i><a href="mailto:info@yourwebsite.com">info@easyliving.com</a></p>
                                <p><i class="fa fa-map" aria-hidden="true"></i><a href="https://www.mahabubazam.me">www.mahabubazam.me</a></p>
                            </address>
                        </div>
                	</div>
                </div>
            </section>
             <!-- Contact Map -->
            <!-- <div class="contact-map">
                <div id="map" class="map inside-full-height"></div>
            </div> -->
        </div>
@endsection