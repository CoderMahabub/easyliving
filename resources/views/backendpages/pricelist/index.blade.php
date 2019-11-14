@extends('backendpages.dashboardhome.app')
@section('title')
Service Price List
@endsection
@section('content')
    <div class="container">
        <div class="row">
                            <div class="col-8 offset-2">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="mt-0 header-title">Service Price Create</h4>

                                        <!-- =========//error========= -->
                                    @if ($errors->any())
                                        <ul>
                                        @foreach ($errors->all() as $error)
                                        <div class="alert alert-warning">
                                        <li>{{ $error }}</li>
                                        </div>
                                        @endforeach
                                        </ul>
                                    @endif


                                <form action="{{ route('price_create')}}" method="post">
                                    @csrf
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-sm-2 col-form-label">Sub Service Name</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" type="text" name="sub_service_name" placeholder="Sub Service Name">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-sm-2 col-form-label">Sub Service Price</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" type="number" name="sub_service_price" placeholder="Sub Service Price">
                                            </div>
                                        </div>

                                    <button type="submit" class="btn btn-primary">Add Service Price</button>
                                </form>
                                    </div>
                                </div>
                            </div><!-- end col -->
                        </div><!-- end row -->
                    </div>


                    <hr>
                    <hr>
                <!-- ========== PRICE VIEW TABLE STARTS FROM HERE =========== -->  
<div class="container">
                <!-- end row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="mt-0 header-title">Available Service Price List</h4>
                                    <p class="text-muted m-b-30">********************************</p>
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-striped table-dark mb-0">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Sub-Service Name</th>
                                                    <th>Sub-Service Price</th>
                                                    <th>Created At</th>
                                                    <th>Updated At</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            
                                            <tbody>

                                            @foreach ( $price_lists as $price_list)
                                                <tr>
                                                    <th scope="row">{{ $price_list->id }}</th>
                                                    <td>{{ $price_list->sub_service_name }}</td>
                                                    <td>{{ $price_list->sub_service_price }}</td>
                                                    <td>{{ $price_list->created_at }}</td>
                                                    <td>{{ $price_list->updated_at }}</td>
                                                    <td> 
                                                        <a class="btn btn-warning" href="{{ url('/admin/service-price/edit') }}/{{ $price_list->id }}"> Edit </a>
                                                        <a class="btn btn-danger" href="#"> Delete </a>
                                                    </td>
                                                </trle-striped>
                                                @endforeach

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                        </div>
                        <!-- View Table Ends from here -->
  
@endsection