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
                                                    <th>Service Name</th>
                                                    <th>Sub Service</th>
                                                    <th>Service Date</th>
                                                    <th>Service TIme</th>
                                                    <th>CLient Name</th>
                                                    <th>Clint Phone</th>
                                                    <th>Client Email</th>
                                                    <th>Password</th>
                                                    <th>Client Address</th>
                                                    <th>Created at</th>
                                                    <th>Updated at</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            @forelse ($reservations as $reservation)
                                                <tr>
                                                    <th scope="row">{{ $reservation->id }}</th>
                                                    <td>{{ $reservation->service }}</td>
                                                    <td>{{ $reservation->sub_service }}</td>
                                                    <td>{{ $reservation->service_date }}</td>
                                                    <td>{{ $reservation->service_time }}</td>
                                                    <td>{{ $reservation->client_name }}</td>
                                                    <td>{{ $reservation->client_phone }}</td>
                                                    <td>{{ $reservation->client_email }}</td>
                                                    <td>{{ $reservation->password }}</td>
                                                    <td>{{ $reservation->client_address }}</td>
                                                    <td>{{ $reservation->created_at }}</td>
                                                    <td>{{ $reservation->updated_at }}</td>
                                                    <td><a class="btn btn-danger" href="#">Remove To Trash</a></td>
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

            @endsection