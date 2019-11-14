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


                                <form action="{{ route('price_update') }}" method="post">
                                    @csrf
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-sm-2 col-form-label">Sub Service Name</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" type="text" name="sub_service_name" value="{{ $single_price->sub_service_name }}">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="example-text-input" class="col-sm-2 col-form-label">Sub Service Price</label>
                                            <div class="col-sm-10">
                                                <input class="form-control" type="number" name="sub_service_price" value="{{ $single_price->sub_service_price }}">
                                                <input  type="hidden" name="price_id" value={{ $single_price->id }}>
                                            </div>
                                        </div>

                                    <button type="submit" class="btn btn-primary">Update Service Price</button>
                                </form>
                                    </div>
                                </div>
                            </div><!-- end col -->
                        </div><!-- end row -->
                    </div>
  
@endsection