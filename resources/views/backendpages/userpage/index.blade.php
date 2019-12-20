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
                                                <tr class="bg-success">
                                                    <th>ID</th>
                                                    
                                                    <th>User's Photo</th>
                                                    <th>User's Name</th>
                                                    <th>User's Email</th>
                                                    <th>User's Role</th>
                                                    <th>Users Address</th>
                                                    <th>Registered at</th>
                                                    <th>Verified at</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @forelse ($users as $user)
                                                <tr>
                                                    <th scope="row">{{ $user->id }}</th>
                                                    <td class="img-thumbnail rounded"> <img src="{{ asset('uploads/users') }}/{{ $user->user_photo }}" ></td>
                                                    <td>{{ $user->name }}</td>
                                                    <td>{{ $user->email }}</td>
                                                    <td>{{ $user->relationshipBetweenRole->role_name }}</td>
                                                    <td>{{ $user->address }}</td>
                                                    <td>{{ $user->created_at }}</td>
                                                    <td>{{ $user->updated_at }}</td>
                                                    <td><a class="btn btn-danger" href="{{ url('/users/delete') }}/{{ $user->id }}">Delete User</a></td>
                                                    @empty
                                                    <td>No Data</td>
                                                </trle-striped>
                                                @endforelse
                                            </tbody>
                                        </table>
                                        {{ $users->links() }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>

                        @endsection
