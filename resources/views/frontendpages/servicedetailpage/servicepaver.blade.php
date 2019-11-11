@extends ('frontendpages.homepage.app')
@section('title')
Paving & Walking Service 
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
       
        <!-- Content Start -->
        <div id="content">
        	<!-- Service Overview -->
            <section class="service-overview section-block">
            	<div class="container">
                    <div class="row">
                    	<div class="col-md-3 col-sm-4">
                            <ul class="vertical-menu">
                                <li>
                                    <a href="service-interior">Interior Renovation<i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                </li>
                                <li>
                                    <a href="service-design">Design and Build<i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                </li>
                                <li>
                                    <a href="service-tiling">Tiling and Painting<i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                </li>
                                <li  class="selected">
                                    <a href="service-paver">Paver Walkways<i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                </li>
                                <li>
                                    <a href="service-household">Household Repair<i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                </li>
                                <li>
                                    <a href="service-solar">Solar Systems<i class="fa fa-angle-right" aria-hidden="true"></i></a>
                                </li>
                            </ul> 
                        </div>

                        <!-- Banner Section -->
        @extends ('frontendpages.homepage.banner')
        @section('banner-title')
        <div class="top-desc text-center">
            <h2>PAVING & WALKING SERVICE</h2>
        </div>
        @endsection
                        <div class="col-md-9 col-sm-8">
                        	<div class="row">
                            	<div class="col-md-6">
                                	<div class="img"><a href="#"><img src="{{asset('frontend/assets/images/service-img/service-img4.jpg')}}" alt="" /></a></div>
                                </div>
                                <div class="col-md-6"> 
                                	<div class="img"><a href="#"><img src="{{asset('frontend/assets/images/service-img/service-img7.jpg')}}" alt="" /></a></div>
                                </div>
                            </div>
                            <div class="service-info">
                                <div class="top-desc">
                                    <h3>Service Overview</h3>
                                </div>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry lorem Ipsum has been the industry's standard text specimen book.</p>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry lorem Ipsum has been the industry's standard text specimen book.</p>
                                <div class="top-desc">
                                    <h3>PLAN AND DETAILS</h3> 
                                </div>
                                <table>
                                    <tbody>
                                        <tr>
                                            <td>Prepare Home Remodeling Ideas</td>
                                            <td>৳600 - ৳1150</td>
                                        </tr>
                                        <tr>
                                            <td>Specify Materials</td>
                                            <td>৳250 - ৳350</td>
                                        </tr>
                                        <tr>
                                            <td>Paint Rooms</td>
                                            <td>৳2.50 - ৳3.50 Per Square Feet</td>
                                        </tr>
                                        <tr>
                                            <td>Install Interior Door</td>
                                            <td>৳150 - ৳$350 Per Door</td>
                                        </tr>
                                        <tr>
                                            <td>Install Light Switch</td>
                                            <td>৳100</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="row">
                                    <div class="col-md-6">
                                        <h4>WHY CHOOSE US</h4>
                                        <p>With over 15 years experience and a real focus on customer satisfaction, you can rely on us for your next project.
                            We provide a professional renovation and installation services with a real focus on customer satisfaction.</p>
                                        <ul class="list">
                                            <li>Financial Responsibility to Our Clients</li>
                                            <li>Superior Quality and Craftsmanship</li>
                                            <li>Quality and Value to the <a href="#">Projects We Deliver</a></li>
                                            <li>Highest Standards in <a href="#">Cost Control</a></li>
                                            <li>On Time and on Budget</li>
                                            <li>Real Focus on Customer Satisfaction</li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6">
                                        <h4>POPULAR QUESTIONS</h4>
                                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                            <div class="panel panel-default">
                                            	<div class="panel-heading" role="tab" id="headingOne">
                                                    <h4 class="panel-title">
                                                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Why does a renovation project cost so much?</a>
                                                    </h4>
                                                </div>
                                                <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                                    <div class="panel-body">
                                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry lorem Ipsum has been the industry's standard text specimen book.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                            	<div class="panel-heading" role="tab" id="headingTwo">
                                                    <h4 class="panel-title">
                                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">What is the timeline for the project?</a>
                                                    </h4>
                                                </div>
                                            	<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                                    <div class="panel-body">
                                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry lorem Ipsum has been the industry's standard text specimen book.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading" role="tab" id="headingThree">
                                                    <h4 class="panel-title">
                                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">What is the total budget for construction?</a>
                                                    </h4>
                                                </div> 
                                                <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                                    <div class="panel-body">
                                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry lorem Ipsum has been the industry's standard text specimen book.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading" role="tab" id="headingFour">
                                                    <h4 class="panel-title">
                                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">How is renovation project initiated?</a>
                                                    </h4>
                                                </div> 
                                                <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                                                    <div class="panel-body">
                                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry lorem Ipsum has been the industry's standard text specimen book.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center"><a href="{{ route('reservation') }}" class="btn btn-info">Book Your Service</a></div>
                            </div>
                        </div>
                   </div>
                </div>
            </section>
        	
        	
@endsection
