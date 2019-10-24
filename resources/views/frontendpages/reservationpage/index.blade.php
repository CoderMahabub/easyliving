@extends('frontendpages.homepage.app')
@section('title')
Reservation
@endsection

@section('content')

 <!-- Register Section -->
 <section class="service-detail-wrapper">
            	<div class="container">
                	<div class="top-desc text-center">
                        <h2>Service Detail</h2>
                    </div>
                    <div class="row">
                    	<div class="col-md-8 col-md-offset-2">
                        	<form action="#" method="post">
                                
                            <div class="row">
                                	<div class="col-sm-6">
                                    	<div class="form-group">
                                        	<select class="selectpicker">
                                                <option>Select Service</option>
                                                <option>Electrical</option>
                                                <option>Security</option>
                                                <option>Pest Control</option>
                                                <option>Computer Repair</option>
                                                <option>Cleaning</option>
                                                <option>Plumber</option>
                                                <option>Appliances</option>
                                                <option>Geyser</option>
                                                <option>Painting</option>
                                                <option>Vehicle Care</option>
                                                <option>Carpentry</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                    	<div class="form-group">
                                        	<select class="selectpicker">
                                                <option>Select Sub Service</option>
                                                <option>Installation, Repair or Replacement:</option>
                                                <option>Drain Cleaning and Sewers</option>
                                                <option>Maintenance, Repair and Care</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                	<div class="col-sm-6">
                                        <div class="form-group">
                                            <div class="input-group date form_date" data-date="" data-date-format="dd MM yyyy" data-link-field="dtp_input2" data-link-format="yyyy-mm-dd">
                                                <input class="form-control" size="16" type="text" value="" readonly>
                                                <span class="input-group-addon"><span class="fa fa-calendar"></span></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="input-group date form_time" data-date="" data-date-format="hh:ii" data-link-field="dtp_input3" data-link-format="hh:ii">
                                            <input class="form-control" size="16" type="text" value="" readonly>
                                            <span class="input-group-addon"><span class="fa fa-clock-o"></span></span>
                                        </div>
                                    </div>
                                    </div>
                                </div>

                                <div class="top-desc text-center">
                        <h2>Personal Detail</h2>
                    </div>


                            	<div class="row">
                                	<div class="col-sm-6">
                                    	<div class="form-group">
                                        	<input type="text" class="form-control" placeholder="Your Name" />
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                    	<div class="form-group">
                                        	<input type="text" class="form-control" placeholder="Mobile Number"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                	<div class="col-sm-6">
                                    	<div class="form-group">
                                        	<input type="email" class="form-control" placeholder="Email" />
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                    	<div class="form-group">
                                        	<input type="password" class="form-control" placeholder="Password"/>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                	<div class="col-sm-12">
                                    	<div class="form-group">
                                        	<textarea class="form-control" placeholder="Address" ></textarea>
                                        </div>
                                    </div>
                                </div>


                                <div class="form-group text-center">
                                	<div class="group-btn">
                                    	<a href="#" class="btn btn-info">Submit</a>
                                    </div>
                                </div>
                                
                            </form>
                        </div>
                    </div>
                </div>
            </section> 


        
        <!-- Banner Section -->
        @extends ('frontendpages.homepage.banner')
        @section('banner-title')
        Reserve Your Need
        @endsection

        <!-- Banner Section End-->
@endsection