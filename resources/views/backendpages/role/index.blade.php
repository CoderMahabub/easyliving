@extends('backendpages.dashboardhome.app')
@section('title')
Add New Role
@endsection
@section('content')
    <div class="container">
        <div class="row">
                            <div class="col-8 offset-2">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="mt-0 header-title">Add New Role</h4>
                                 <br>

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


                                <form action="{{ route('role_create')}}" method="post">
                                    @csrf
                                        <div class="form-group row"><label for="example-text-input"
                                                class="col-sm-2 col-form-label">Role Name</label>
                                            <div class="col-sm-10">
                                            <input class="form-control" type="text" name="role_name" placeholder="Status Name">
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Store Role</button>
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
                                    <h4 class="mt-0 header-title">Available Roles</h4>
                                    <p class="text-muted m-b-30">These roles are already exits.</p>
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-striped table-dark mb-0">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Role Name</th>
                                                    <th>Created at</th>
                                                    <th>Updated at</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>

                                            <tbody>

                                            @foreach ( $roles as $role)
                                                <tr>
                                                    <th scope="row">{{ $role->id }}</th>
                                                    <td>{{ $role->role_name }}</td>
                                                    <td>{{ $role->created_at }}</td>
                                                    <td>{{ $role->updated_at }}</td>
                                                    <td> <a class="btn btn-warning"href="#">Delete</a></td>
                                                </tr>
                                            @endforeach

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                        <!-- View Table Ends from here -->

@endsection
