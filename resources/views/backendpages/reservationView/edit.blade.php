@extends('frontendpages.homepage.app')

@section('title')
Update Booking
@endsection

@section('content')

  <!-- Register Section -->
 <section class="service-detail-wrapper">
            	<div class="container">
                
                	<div class="top-desc text-center">
                        <h2>Edit YOUR Booking</h2>
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
                            
                        	<form action="{{ route('reservation_update') }}" method="post">
                                @csrf
                            <div class="row">
                                	<div class="col-sm-6">
                                    	<div class="form-group">
                                        	<select class="selectpicker" name="service">
                                                <option>{{ $single_reservation->service }}</option>
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
                                                <option>{{ $single_reservation->sub_service }}</option>
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
                                            <input class="form-control" type="date" name="service_date" value="{{ $single_reservation->service_date }}">
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <input class="form-control" type="time" name="service_time" value="{{ $single_reservation->service_time }}">
                                        </div>
                                    </div>
                                </div>
<br>

                            	<div class="row">
                                	<div class="col-sm-6">
                                    	<div class="form-group">
                                        	<input type="text" class="form-control" name="first_name" placeholder="First Name" value="{{ $single_reservation->first_name }}"/>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                    	<div class="form-group">
                                        	<input type="text" class="form-control" name="last_name" placeholder="Last Name" Value="{{ $single_reservation->last_name }}"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                	<div class="col-sm-6">
                                    	<div class="form-group">
                                        	<input type="email" class="form-control" name="client_email" value="{{ $single_reservation->client_email }}" />
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                    	<div class="form-group">
                                        	<input type="text" class="form-control" name="phone_number" value="{{ $single_reservation->phone_number }}"/>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                	<div class="col-sm-12">
                                    	<div class="form-group">
                                        	<input type="text" class="form-control" name="client_address" value="{{ $single_reservation->client_address }}" />
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                	<div class="col-sm-6">
                                    	<div class="form-group">
                                        	<input type="text" class="form-control" name="client_sub_district" value="{{ $single_reservation->client_sub_district }}" />
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                    	<div class="form-group">
                                        	<input type="text" class="form-control" name="client_district" value="{{ $single_reservation->client_district }}"/>
                                        </div>
                                    </div>
                                </div>


                                <div class="form-group text-center">
                                	<div class="group-btn">
                                    	<input type="submit" value="Update" class="btn btn-info">
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
@include('sweetalert::alert')
        <!-- Banner Section End-->
@endsection