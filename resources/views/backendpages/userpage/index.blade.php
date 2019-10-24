@extends('backendpages.dashboardhome.app')
@section('title')
User
@endsection
@section('content')

            <div class="container">
                <!-- end row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="mt-0 header-title">Register Users</h4>
                                    <p class="text-muted m-b-30">Here are the users who are registered at Easyliving.</p>
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-striped table-dark mb-0">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Name</th>
                                                    <th>Email</th>
                                                    <th>Role</th>
                                                    <th>District</th>
                                                    <th>Thana</th>
                                                    <th>Created at</th>
                                                    <th>Updated at</th>
                                                </tr>
                                            </thead>
                                            
                                            <tbody>

                                            @foreach ($users as $user)
                                                <tr>
                                                    <th scope="row">{{ $user->id }}</th>
                                                    <td>{{ $user->name }}</td>
                                                    <td>{{ $user->email }}</td>
                                                    <td>{{ $user->role_id }}</td>
                                                    <td>{{ $user->district }}</td>
                                                    <td>{{ $user->thana }}</td>
                                                    <td>{{ $user->created_at }}</td>
                                                    <td>{{ $user->updated_at }}</td>
                                                </trle-striped>
                                                @endforeach

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>

                        @endsection