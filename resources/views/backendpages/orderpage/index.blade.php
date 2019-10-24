@extends('backendpages.dashboardhome.app')
@section('title')
Order
@endsection
@section('content')
            <!-- Start content -->
            <div class="content">
                <div class="container-fluid">
                    <div class="page-title-box">
                        <div class="row align-items-center">
                            <div class="col-sm-6">
                                <h4 class="page-title">Total Orders</h4>
                                
                            </div>
                            <div class="col-sm-6">

                            </div>
                        </div>
                    </div>
                    <!-- end row -->
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="mt-0 header-title">Orders</h4>
                                    <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                        <tr>
                                                <th>Order ID</th>
                                                <th>Name</th>
                                                <th>E-Mail</th>
                                                <th>Phone Number</th>
                                                <th>Service Date</th>
                                                <th>Service Time</th>
                                                <th>Main Service</th>
                                                <th>Specific Service</th>
                                                <th>Service Address</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            
                                        <tr style="background-color:#a29bfe;">
                                                <td>Timothy Mooney</td>
                                                <td>Office Manager</td>
                                                <td>London</td>
                                                <td>London</td>
                                                <td>London</td>
                                                <td>London</td>
                                                <td>London</td>
                                                <td>37</td>
                                                <td>2008/12/11</td>
                                                <td>Pending</td>
                                            </tr>

                                            <tr style="background-color:#f9ca24;">
                                                <td>Timothy Mooney</td>
                                                <td>Office Manager</td>
                                                <td>London</td>
                                                <td>London</td>
                                                <td>London</td>
                                                <td>London</td>
                                                <td>London</td>
                                                <td>37</td>
                                                <td>2008/12/11</td>
                                                <td>Working</td>
                                            </tr>
                                            <tr style="background-color:#2ecc71;">
                                                <td>Timothy Mooney</td>
                                                <td>Office Manager</td>
                                                <td>London</td>
                                                <td>London</td>
                                                <td>London</td>
                                                <td>London</td>
                                                <td>London</td>
                                                <td>37</td>
                                                <td>2008/12/11</td>
                                                <td>Completed</td>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="mt-0 header-title">Trash Orders</h4>
                                    <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                        <thead>
                                            <tr>
                                                <th>Order ID</th>
                                                <th>Name</th>
                                                <th>E-Mail</th>
                                                <th>Phone Number</th>
                                                <th>Service Date</th>
                                                <th>Service Time</th>
                                                <th>Main Service</th>
                                                <th>Specific Service</th>
                                                <th>Service Address</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            
                                        <tr style="background-color:#a29bfe;">
                                                <td>Timothy Mooney</td>
                                                <td>Office Manager</td>
                                                <td>London</td>
                                                <td>London</td>
                                                <td>London</td>
                                                <td>London</td>
                                                <td>London</td>
                                                <td>37</td>
                                                <td>2008/12/11</td>
                                                <td>Pending</td>
                                            </tr>

                                            <tr style="background-color:#f9ca24;">
                                                <td>Timothy Mooney</td>
                                                <td>Office Manager</td>
                                                <td>London</td>
                                                <td>London</td>
                                                <td>London</td>
                                                <td>London</td>
                                                <td>London</td>
                                                <td>37</td>
                                                <td>2008/12/11</td>
                                                <td>Working</td>
                                            </tr>
                                            <tr style="background-color:#2ecc71;">
                                                <td>Timothy Mooney</td>
                                                <td>Office Manager</td>
                                                <td>London</td>
                                                <td>London</td>
                                                <td>London</td>
                                                <td>London</td>
                                                <td>London</td>
                                                <td>37</td>
                                                <td>2008/12/11</td>
                                                <td>Completed</td>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- end col -->
                    </div>
                    <!-- end row -->
                </div>
                <!-- container-fluid -->
            </div>

@endsection