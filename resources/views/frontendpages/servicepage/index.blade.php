@extends('frontendpages.homepage.app')
@section('title')
Services
@endsection
@section('content')
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
        Service Page
        @endsection










        <!-- Content Start -->
        <div id="content">
        	<div class="container">
                <div class="big-demo go-wide" data-js="filtering-demo">
                    <br>
                    <br>
                    <div class="grid">
                        <div class="col-lg-4 col-md-6 col-sm-12 element-item electrical" data-category="electrical">
                            <div class="gallery-item">
                            <h3>Electrical</h3>
                                <div class="item-media">
                                    <img src="{{asset('frontend/assets/images/service-img/service-img1.jpg')}}" alt="" />
                                    <div class="media-links">
                                    	<div class="links-wrap">
                                        	<a class="p-view prettyPhoto " title="" href="service-overview.html">
                                            	<i class="fa fa-search" aria-hidden="true"></i>
                                            </a> 
                                        	<a href="{{asset('frontend/assets/images/service-img/service-img1.jpg')}}" class="p-link example-image-link" data-lightbox="example-set" data-title="Electrical">
                                            	<i class="fa fa-expand" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="item-content">
                                    <h6 class="item-meta greylinks">
                                    	<a href="gallery-single.html">Interior Renovation</a>
                                    </h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 element-item plumbing " data-category="plumbing">
                            <div class="gallery-item">
                            <h3>Electrical</h3>
                                <div class="item-media">
                                    <img src="{{asset('frontend/assets/images/service-img/service-img2.jpg')}}" alt="" />
                                    <div class="media-links">
                                    	<div class="links-wrap">
                                        	<a class="p-view prettyPhoto " title="" href="service-overview.html">
                                            	<i class="fa fa-search" aria-hidden="true"></i>
                                            </a>
                                        	<a href="{{asset('frontend/assets/images/service-img/service-img2.jpg')}}" class="p-link example-image-link" data-lightbox="example-set" data-title="Plumbing">
                                            	<i class="fa fa-expand" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="item-content">
                                    <h6 class="item-meta greylinks">
                                    	<a href="gallery-single.html">Design and Build</a>
                                    </h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 element-item pestcontrol " data-category="pestcontrol">
                            <div class="gallery-item">
                            <h3>Electrical</h3>
                                <div class="item-media">
                                    <img src="{{asset('frontend/assets/images/service-img/service-img3.jpg')}}" alt="" />
                                    <div class="media-links">
                                    	<div class="links-wrap">
                                        	<a class="p-view prettyPhoto " title="" href="service-overview.html">
                                            	<i class="fa fa-search" aria-hidden="true"></i>
                                            </a>
                                        	<a href="{{asset('frontend/ssets/images/service-img/service-img3.jpg')}}" class="p-link example-image-link" data-lightbox="example-set" data-title="Pest Control">
                                            	<i class="fa fa-expand" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="item-content">
                                    <h6 class="item-meta greylinks">
                                    	<a href="gallery-single.html">Tiling and Painting</a>
                                    </h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 element-item painting" data-category="painting">
                            <div class="gallery-item">
                            <h3>Electrical</h3>
                                <div class="item-media">
                                    <img src="{{asset('frontend/assets/images/service-img/service-img4.jpg')}}" alt="" />
                                    <div class="media-links">
                                    	<div class="links-wrap">
                                        	<a class="p-view prettyPhoto " title="" href="service-overview.html">
                                            	<i class="fa fa-search" aria-hidden="true"></i>
                                            </a>
                                        	<a href="{{asset('frontend/assets/images/service-img/service-img4.jpg')}}" class="p-link example-image-link" data-lightbox="example-set" data-title="Painting">
                                            	<i class="fa fa-expand" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="item-content">
                                    <h6 class="item-meta greylinks">
                                    	<a href="gallery-single.html">Paver Wlakways</a>
                                    </h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 element-item cleaning" data-category="cleaning">
                            <div class="gallery-item">
                            <h3>Electrical</h3>
                                <div class="item-media">
                                    <img src="{{asset('frontend/assets/images/service-img/service-img5.jpg')}}" alt="" />
                                    <div class="media-links">
                                    	<div class="links-wrap">
                                        	<a class="p-view prettyPhoto " title="" href="service-household">
                                            	<i class="fa fa-search" aria-hidden="true"></i>
                                            </a>
                                        	<a href="{{asset('frontend/assets/images/service-img/service-img5.jpg')}}" class="p-link example-image-link" data-lightbox="example-set" data-title="Cleaning">
                                            	<i class="fa fa-expand" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="item-content">
                                    <h6 class="item-meta greylinks">
                                    	<a href="gallery-single.html">Household Rapair</a>
                                    </h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 element-item appliance " data-category="appliance">
                            <div class="gallery-item">
                            <h3>Electrical</h3>
                                <div class="item-media">
                                    <img src="{{asset('frontend/assets/images/service-img/service-img6.jpg')}}" alt="" />
                                    <div class="media-links">
                                    	<div class="links-wrap">
                                        	<a class="p-view prettyPhoto " title="" href="service-overview.html">
                                            	<i class="fa fa-search" aria-hidden="true"></i>
                                            </a>
                                        	<a href="{{asset('frontend/assets/images/service-img/service-img6.jpg')}}" class="p-link example-image-link" data-lightbox="example-set" data-title="Appliances">
                                            	<i class="fa fa-expand" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="item-content">
                                    <h6 class="item-meta greylinks">
                                    	<a href="gallery-single.html">Solar Systems</a>
                                    </h6>
                                </div>
                            </div>
                        </div>

                        

                    </div>
                </div>
			</div>
       	</div>      
            
           
            
@endsection