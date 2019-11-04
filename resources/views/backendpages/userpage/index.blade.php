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
                                                    <th>Photo</th>
                                                    <th>Created at</th>
                                                    <th>Updated at</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @forelse ($users as $user)
                                                <tr>
                                                    <th scope="row">{{ $user->id }}</th>
                                                    <td>{{ $user->name }}</td>
                                                    <td>{{ $user->email }}</td>
                                                    <td>{{ $user->relationshipBetweenRole->role_name }}</td>
                                                    <td>{{ $user->district }}</td>
                                                    <td>{{ $user->thana }}</td>
                                                    <td> <img src="{{ asset('uploads/users') }}/{{ $user->user_photo }}" ></td>
                                                    <td>{{ $user->created_at }}</td>
                                                    <td>{{ $user->updated_at }}</td>
                                                    <td><a class="btn btn-danger" href="#">Remove To Trash</a></td>
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
