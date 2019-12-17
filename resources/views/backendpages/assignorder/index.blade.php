@extends('backendpages.dashboardhome.app')
@section('title')
 EasyLiving DashBoard
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-8 offset-2">
                <div class="card">
                    <div class="card-body">
                        <h4 class="mt-0 header-title">Assign Order</h4>

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
                        <form action="{{ route('status_create')}}" method="post">
                            @csrf
                                <div class="form-group row"><label for="example-text-input"
                                        class="col-sm-2 col-form-label">Status Name</label>
                                    <div class="col-sm-10"><input class="form-control" type="text"
                                    name="" placeholder="Status Name"></div>
                                </div>
                                <button type="submit" class="btn btn-primary">Complete Assign</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection