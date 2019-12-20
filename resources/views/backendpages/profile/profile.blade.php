@extends('backendpages.dashboardhome.app')
@section('title')
User
@endsection
@section('content')

            <div class="container">
                <!-- end row -->
                    <div class="row">
                        <div class="col-lg-6 offset-md-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-striped table-dark mb-0">
                                            <thead>
                                                    <th>User Profile of {{ Auth::user()->name }}</th>
                                                
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    
                                                    <td><img src="{{ asset('uploads/users') }}/{{ Auth::user()->user_photo }}"></td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Name    : </strong>{{ Auth::user()->name }}</td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Role Name    : </strong>{{ Auth::user()->relationshipBetweenRole->role_name }}</td>
                                                </tr>
                                                <tr>
                                                    <td><strong> Email    : </strong>{{ Auth::user()->email }}</td>
                                                </tr>
                                                <tr>
                                                    <td> <strong>Contact Number    : </strong>{{ Auth::user()->telephone_number }}</td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Address     : </strong>{{ Auth::user()->address }}</td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Account Created At     : </strong>{{ Auth::user()->created_at }}</td>
                                                </tr>
                                                <tr>
                                                    <td> <strong>Account Verified At     : </strong>{{ Auth::user()->created_at }}</td>
                                                </tr>
                                                <tr> 
                                                <td> 
                                                <button class="btn btn-info bg-dark"> <a href="{{route('dashboard')}}">Goto Dashboard</a></button> 
                                                <button class="btn btn-info bg-dark"> <a href="{{route('dashboard')}}">Goto Homepage</a></button>
                                                </td>
                                                </tr>
                                            </tbody>
                                        </table>





                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>

                        @endsection
