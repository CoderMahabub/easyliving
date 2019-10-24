@extends('frontendpages.homepage.app')
@section('title')
FAQs
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
        Frequently Ask Question
        @endsection






        
        <!-- Content Start -->
        <div id="content">
        	<!-- FAQ's Section -->
            <section id="faq" class="section-block">
            	<div class="container">
                	<div class="top-desc text-center">
                        <h2>faq</h2>
                    </div>
                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                        <div class="panel panel-default">
                        	<div class="panel-heading" role="tab" id="headingOne">
                                <h4 class="panel-title">
                                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    	Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                    </a>
                                </h4>
                            </div>
                        	<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                <div class="panel-body">
                                	<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingTwo">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    	Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                <div class="panel-body">
                                	<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingThree">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    	Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's...
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                <div class="panel-body">
                                	<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                        	<div class="panel-heading" role="tab" id="headingFour">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                                    	Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                    </a>
                                </h4>
                            </div>
                        	<div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                                <div class="panel-body">
                                	<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                </div>
                            </div>
                        </div> 
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingFive">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    	Lorem Ipsum is simply dummy text of the printing and typesetting industry. 
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
                                <div class="panel-body">
                                	<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingSix">
                                <h4 class="panel-title">
                                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                    	Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's...
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix">
                                <div class="panel-body">
                                	<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                	 
                </div>
            </section>
      	</div>
@endsection