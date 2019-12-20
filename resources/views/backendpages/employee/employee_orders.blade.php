@extends('backendpages.dashboardhome.app')
@section('title')
My Orders To Serve
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
                                                    <th>TOTAL PRICE</th>
                                                    <th>DELEVERY DATE & Time</th>
                                                    <th>CUSTOMER NAME</th>
                                                    <th>PHONE & EMAIL</th>
                                                    <th>DELEVERY ADDRESS</th>
                                                    <th>Employee Name</th>
                                                    <th>STATUS</th>
                                                    <th>ACTION</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @forelse ( App\Reservation::where('employee_id',Auth::user()->id)->get() as $reservation)
                                                <tr>
                                                    <th scope="row">{{ $reservation->id }}</th>
                                                    <td>{{ $reservation->service }}</td>
                                                    <td>{{ $reservation->relationBetweenPrice->sub_service_name }}</td>
                                                    <td>{{ $reservation->relationBetweenPrice->sub_service_price }}</td>
                                                    <td>{{ $reservation->service_date }} at {{ $reservation->service_time }}</td>
                                                    <td>{{ $reservation->first_name }} {{ $reservation->last_name }}</td>
                                                    <td>{{ $reservation->phone_number }}, {{ Str::limit($reservation->client_email,15) }}</td>
                                                    <td>{{ $reservation->client_address}}, {{ $reservation->client_sub_district}}, {{ Str::limit( $reservation->client_district,10)}}</td>
                                                    <td class="text-primary">{{ Auth::user()->name }}</td>
                                                    <td class="text-info">{{ $reservation->status }}</td>
                                                    <td> 
                                                        <a class="btn btn-warning" href="{{ url('/admin/reservation/edit') }}/{{ $reservation->id }}">Update Status</a>
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
                                                    <th>TOTAL PRICE</th>
                                                    <th>DELEVERY DATE & Time</th>
                                                    <th>CUSTOMER NAME</th>
                                                    <th>PHONE & EMAIL</th>
                                                    <th>DELEVERY ADDRESS</th>
                                                    <th>ACTION</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @forelse($deleted_reservations as $deleted_reservation)
                                                <tr>
                                                    <th scope="row">{{ $deleted_reservation->id }}</th>
                                                    <td>{{ $deleted_reservation->service }}</td>
                                                    <td>{{ $deleted_reservation->relationBetweenPrice->sub_service_name }}</td>
                                                    <td>{{ $deleted_reservation->relationBetweenPrice->sub_service_price }}</td>
                                                    <td>{{ $deleted_reservation->service_date }} at {{ $deleted_reservation->service_time }}</td>
                                                    <td>{{ $deleted_reservation->first_name }} {{ $deleted_reservation->last_name }}</td>
                                                    <td>{{ $deleted_reservation->phone_number }}, {{ Str::limit($deleted_reservation->client_email,15) }}</td>
                                                    <td>{{ $deleted_reservation->client_address}}, {{ $deleted_reservation->client_sub_district}}, {{ Str::limit( $deleted_reservation->client_district,9)}}</td>
                                                    
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
            