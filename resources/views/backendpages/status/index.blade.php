@extends('backendpages.dashboardhome.app')
@section('title')
Status Name
@endsection
@section('content')
    <div class="container">
        <div class="row">
                            <div class="col-8 offset-2">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="mt-0 header-title">Status Create</h4>

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
                                                    name="status_name" placeholder="Status Name"></div>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Add Status</button>
                                </form>
                                    </div>
                                </div>
                            </div><!-- end col -->
                        </div><!-- end row -->
                    </div><!-- container-fluid -->

                    <!-- View Table Starts from here -->
                    <div class="container">
                <!-- end row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="mt-0 header-title">Available Status</h4>
                                    <p class="text-muted m-b-30">These Statuses are already exits.</p>
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-striped table-dark mb-0">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Status Name</th>
                                                    <th>Created At</th>
                                                    <th>Updated At</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            
                                            <tbody>

                                            @foreach ( $statuses as $status)
                                                <tr>
                                                    <th scope="row">{{ $status->id }}</th>
                                                    <td>{{ $status->status_name }}</td>
                                                    <td>{{ $status->created_at }}</td>
                                                    <td>{{ $status->updated_at }}</td>
                                                    <td> 
                                                        <a class="btn btn-primary" href="{{ route('status_index') }}">View</a>
                                                        <a class="btn btn-warning" href="{{ url('/admin/status') }}/{{ $status->id }}">Edit</a>
                                                        <a class="btn btn-danger" href="{{ url('/admin/status/delete') }}/{{ $status->id }}">Delete</a>
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







<hr>
<hr>




<div class="container">
                <!-- end row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="mt-0 header-title">Deleted Status</h4>
                                    <p class="text-muted m-b-30">These Statuses are already DELETED.</p>
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-striped table-dark mb-0">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Status Name</th>
                                                    <th>Created At</th>
                                                    <th>Updated At</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            
                                            <tbody>

                                            @foreach ( $deleted_statuses as $deleted_status)
                                                <tr>
                                                    <th scope="row">{{ $deleted_status->id }}</th>
                                                    <th scope="row">{{ $deleted_status->status_name }}</th>
                                                    <th scope="row">{{ $deleted_status->created_at }}</th>
                                                    <th scope="row">{{ $deleted_status->updated_at }}</th>
                                                    <td> 
                                                        <a class="btn btn-success" href="{{ url('/admin/status/restore') }}/{{ $deleted_status->id }}">Restore</a>
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