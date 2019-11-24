@extends('backendpages.dashboardhome.app')
@section('title')
Total Reservations
@endsection
@section('content')
<div class="container">
                <!-- end row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="mt-0 header-title">Total Reserved</h4>
                                    <p class="text-muted m-b-30">Here are the clients who are reserved at Easyliving.</p>
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-striped table-dark mb-0">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>SERVICE NAME</th>
                                                    <th>SUB-SERVICE</th>
                                                    <th>DELEVERY DATE & Time</th>
                                                    <th>CUSTOMER NAME</th>
                                                    <th>PHONE NUMBER</th>
                                                    <th>EMAIL ADDRESS</th>
                                                    <th>DELEVERY ADDRESS</th>
                                                    <th>THANA</th>
                                                    <th>DISTRICT</th>
                                                    <th>CREATED AT</th>
                                                    <th>UPDATED AT</th>
                                                    <th>ACTION</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @forelse ($reservations as $reservation)
                                                <tr>
                                                    <th scope="row">{{ $reservation->id }}</th>
                                                    <td>{{ $reservation->service }}</td>
                                                    <td>{{ $reservation->sub_service }}</td>
                                                    <td>{{ $reservation->service_date }} at {{ $reservation->service_time }}</td>
                                                    <td>{{ $reservation->first_name }} {{ $reservation->last_name }}</td>
                                                    <td>{{ $reservation->phone_number }}</td>
                                                    <td>{{ Str::limit($reservation->client_email,8) }}</td>
                                                    <td>{{ Str::limit( $reservation->client_address,10)}}</td>
                                                    <td>{{ Str::limit( $reservation->client_sub_district,10)}}</td>
                                                    <td>{{ Str::limit( $reservation->client_district,10)}}</td>
                                                    <td>{{ $reservation->created_at }}</td>
                                                    <td>{{ $reservation->updated_at }}</td>
                                                    <td> 
                                                        <a class="btn btn-warning" href="{{ url('/admin/reservation/edit') }}/{{ $reservation->id }}">Edit</a>
                                                        <a class="btn btn-danger" href="{{ url('/admin/reservation/delete') }}/{{ $reservation->id }}">Move To Trash</a>
                                                    </td>
                                                </tr table-striped>
                                                @empty
                                                    <td>No Data</td>
                                                @endforelse
                                        </tbody>
                                    </table>
                                </div>
                            {{ $reservations->links() }}
                            </div>
                        </div>
                    </div>
                </div>







                <div class="container">
                <!-- end row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="mt-0 header-title">Deleted Reservation</h4>
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-striped table-dark mb-0">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>SERVICE NAME</th>
                                                    <th>SUB-SERVICE</th>
                                                    <th>DELEVERY DATE & Time</th>
                                                    <th>CUSTOMER NAME</th>
                                                    <th>PHONE NUMBER</th>
                                                    <th>EMAIL ADDRESS</th>
                                                    <th>DELEVERY ADDRESS</th>
                                                    <th>THANA</th>
                                                    <th>DISTRICT</th>
                                                    <th>CREATED AT</th>
                                                    <th>UPDATED AT</th>
                                                    <th>ACTION</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @forelse($deleted_reservations as $deleted_reservation)
                                                <tr>
                                                    <th scope="row">{{ $deleted_reservation->id }}</th>
                                                    <td>{{ $deleted_reservation->service }}</td>
                                                    <td>{{ $deleted_reservation->sub_service }}</td>
                                                    <td>{{ $deleted_reservation->service_date }} at {{ $deleted_reservation->service_time }}</td>
                                                    <td>{{ $deleted_reservation->first_name }} {{ $deleted_reservation->last_name }}</td>
                                                    <td>{{ $deleted_reservation->phone_number }}</td>
                                                    <td>{{ Str::limit($deleted_reservation->client_email,8) }}</td>
                                                    <td>{{ Str::limit( $deleted_reservation->client_address,10)}}</td>
                                                    <td>{{ Str::limit( $deleted_reservation->client_sub_district,10)}}</td>
                                                    <td>{{ Str::limit( $deleted_reservation->client_district,10)}}</td>
                                                    <td>{{ $deleted_reservation->created_at }}</td>
                                                    <td>{{ $deleted_reservation->updated_at }}</td>
                                                    <td> 
                                                        <a class="btn btn-success" href="{{ url('/admin/reservation/restore') }}/{{ $deleted_reservation->id}}">Restore</a>
                                                    </td>
                                                </tr table-striped>
                                                @empty
                                                <td>No Data</td>
                                               @endforelse
                                        </tbody>
                                    </table>
                                </div>
                            {{ $deleted_reservations->links() }}
                            </div>
                        </div>
                    </div>
                </div>

@endsection
            