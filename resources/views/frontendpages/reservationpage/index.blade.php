@extends('frontendpages.homepage.app')
@section('title')
Reservation
@endsection

@section('content')

 <!-- Register Section -->
 <section class="service-detail-wrapper">
            	<div class="container">
                	<div class="top-desc text-center">
                        <h2>BOOK YOUR SERVICE</h2>
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
                                    <input class="form-control" type="date" value="2011-08-19">
                                    </div>
                                    </div>
                                    <div class="col-sm-6">
                                    <div class="form-group">
                                    <input class="form-control" type="time" value="13:45:00">
                                    </div>
                                    </div>
                                    </div>

<br>

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
                                    	<a href="#" class="btn btn-info">BooK</a>
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