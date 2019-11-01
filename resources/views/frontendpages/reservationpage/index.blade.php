@extends('frontendpages.homepage.app')
@section('title')
Book Services
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


                         @if ($errors->any())
                                <ul>
                                @foreach ($errors->all() as $error)
                                <div class="alert alert-danger">
                                <li>{{ $error }}</li>
                                </div>
                                @endforeach
                                </ul>
                            @endif
                            
                        	<form action="{{ route('reservation_create') }}" method="post">
                                @csrf
                            <div class="row">
                                	<div class="col-sm-6">
                                    	<div class="form-group">
                                        	<select class="selectpicker" name="service">
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
                                        	<select class="selectpicker" name="sub_service">
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
                                            <input class="form-control" type="date" name="service_date" value="2019-08-19">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input class="form-control" type="time" name="service_time" value="13:45:00">
                                        </div>
                                    </div>
                                </div>
<br>

                            	<div class="row">
                                	<div class="col-sm-6">
                                    	<div class="form-group">
                                        	<input type="text" class="form-control" name="client_name" placeholder="Your Name" />
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                    	<div class="form-group">
                                        	<input type="text" class="form-control" name="client_phone" placeholder="Mobile Number"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                	<div class="col-sm-6">
                                    	<div class="form-group">
                                        	<input type="email" class="form-control" name="client_email" placeholder="Email" />
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                    	<div class="form-group">
                                        	<input type="password" class="form-control" name="password" placeholder="Password"/>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                	<div class="col-sm-12">
                                    	<div class="form-group">
                                        	<textarea class="form-control" name="client_address"  placeholder="Address" ></textarea>
                                        </div>
                                    </div>
                                </div>


                                <div class="form-group text-center">
                                	<div class="group-btn">
                                    	<input type="submit" value="BooK" class="btn btn-info">
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