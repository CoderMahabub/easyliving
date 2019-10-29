@extends('backendpages.dashboardhome.app')
@section('title')
About Us
@endsection
@section('content')
    <div class="container">
        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="mt-0 header-title">About Us</h4>



                                        @if (session('success'))
                                        <div class="alert alert-success">
                                            {{ session('success') }}
                                        </div>
                                        @endif





                                <form action="{{ route('create')}}" method="post">
                                    @csrf
                                        <div class="form-group row"><label for="example-text-input"
                                                class="col-sm-2 col-form-label">Title</label>
                                            <div class="col-sm-10"><input class="form-control" type="text"
                                                    name="title" placeholder="Type Title Here"></div>
                                        </div>
                                        <div class="form-group row"><label for="example-text-input"
                                                class="col-sm-2 col-form-label">Sub Title</label>
                                            <div class="col-sm-10"><input class="form-control" type="text" name="subtitle" placeholder="Type Sub Title Here" id="example-text-input"></div>
                                        </div>
                                        <div class="form-group row"><label for="example-text-input"
                                                class="col-sm-2 col-form-label">Description</label>
                                            <div class="col-sm-10"> <textarea class="form-control" name="description" placeholder="Type Description Here" cols="20" rows="10"></textarea> </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Send Dat</button>
                                </form>
                                    </div>
                                </div>
                            </div><!-- end col -->
                        </div><!-- end row -->
                    </div><!-- container-fluid -->


                    <!-- end row -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="mt-0 header-title">About Us Files</h4>
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-striped table-dark mb-0">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Title</th>
                                                    <th>SubTitle's Name</th>
                                                    <th>Description</th>
                                                    <th>Created at</th>
                                                    <th>Updated at</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>

                                            <tbody>

                                            @foreach ( $aboutuses as $aboutus)
                                                <tr>
                                                    <th>{{ $aboutus->id }}</th>
                                                    <th>{{ $aboutus->title }}</th>
                                                    <th>{{ $aboutus->subtitle }}</th>
                                                    <th>{{ Str::limit($aboutus->description,20) }}</th>
                                                    <td>{{ $aboutus->created_at }}</td>
                                                    <td>{{ $aboutus->updated_at }}</td>
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