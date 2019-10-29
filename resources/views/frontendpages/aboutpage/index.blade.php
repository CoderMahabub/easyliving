@extends('frontendpages.homepage.app')
@section('title')
About Us
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





        @extends ('frontendpages.homepage.banner')
        @section('banner-title')
        About Us
        @endsection


        
        
        <!-- Content Start -->
        <div id="content">
        	<!-- Our Story -->
            <section id="our-story" class="section-block">
            	<div class="container">
                @forelse ($aboutuses as $value)
                	<div class="top-desc text-center">
                        <h2> {{ $value->title}} </h2>
                        <p class="sub-heading">{{ $value->subtitle}}</p>
                    </div>
                    <div class="our-detail">
                        <p>{{ $value->description}}</p>
                    </div>
                    @empty
                No Data
               @endforelse
                	<div class="row">
                    	<div class="col-sm-4">
                        	<h3>Vision</h3>
                        	<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry lorem Ipsum has been the industry's standard dummy text .</p>
                        </div>
                        <div class="col-sm-4">
                        	<h3>Mission</h3>
                        	<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry lorem Ipsum has been the industry's standard dummy text .</p>
                        </div>
                        <div class="col-sm-4">
                        	<h3>Our Values</h3>
                        	<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry lorem Ipsum has been the industry's standard dummy text .</p>
                        </div>
                    </div> 
                </div>
                
            </section>
            <!-- Our info section -->
            <section id="our-info" class="section-block">
            	<div class="blue-overlay"></div>
            	<div class="container">
                	<div class="row">
                    	<div class="col-sm-4">
                        	<i class="icon icon-empowered" aria-hidden="true"></i>
                            <h3><span class="counter">150,000</span>+</h3>
                            <p>Empowered</p>
                        </div>
                        <div class="col-sm-4">
                        	<i class="icon icon-borrowed" aria-hidden="true"></i>
                            <h3>$<span class="counter">5</span> billion+</h3>
                            <p>Borrowed</p>
                        </div>
                        <div class="col-sm-4">
                        	<i class="icon icon-rating" aria-hidden="true"></i>
                            <h3>Customer</h3>
                            <p>Rating</p>
                        </div>
                    </div>
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
      	</div>

@endsection