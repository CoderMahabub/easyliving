@extends('backendpages.dashboardhome.app')
@section('title')
Status Name
@endsection
@section('content')
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
                                                    <th>Name</th>
                                                    <th>Email</th>
                                                    <th>Phpne Number</th>
                                                    <th>Subject</th>
                                                    <th>Message</th>
                                                    <th>Send At</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            
                                            <tbody>

                                            @foreach ( $contactuses  as $contactus)
                                                <tr>
                                                    <th scope="row">{{ $contactus->id }}</th>
                                                    <td>{{ $contactus->name }}</td>
                                                    <td>{{ $contactus->email }}</td>
                                                    <td>{{ $contactus->phno }}</td>
                                                    <td>{{ $contactus->subject }}</td>
                                                    <td>{{ Str::limit($contactus->message,15) }}</td>
                                                    <td>{{ $contactus->created_at }}</td>
                                                    <td>{{ $contactus->updated_at }}</td>
                                                    <td> 
                                                        <a class="btn btn-primary" href="#">View View</a>
                                                        <a class="btn btn-danger" href="#">Delete Message</a>
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
                        @endsection