@extends('backendpages.dashboardhome.app')
@section('title')
Team Member Add
@endsection
@section('content')
    <div class="container">
        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="mt-0 header-title">Add Your New Team Member</h4>


                                        
                                        @if ($errors->any())
                                        <ul>
                                        @foreach ($errors->all() as $error)
                                        <div class="alert alert-danger">
                                        <li>{{ $error }}</li>
                                        </div>
                                        @endforeach
                                        </ul>
                                         @endif


                                <form action="{{route('team_member_create')}}" method="post" enctype="multipart/form-data">
                                    @csrf

                                    <div class="form-group row"><label for="example-text-input"
                                                class="col-sm-2 col-form-label">Member's Photo</label>
                                            <div class="col-sm-10"><input class="form-control" type="file"
                                                    name="member_photo"></div>
                                        </div>

                                        <div class="form-group row"><label for="example-text-input"
                                                class="col-sm-2 col-form-label">Member Name</label>
                                            <div class="col-sm-10"><input class="form-control" type="text"
                                                    name="member_name" placeholder="Type Team Member Name Here"></div>
                                        </div>
                                        <div class="form-group row"><label for="example-text-input"
                                                class="col-sm-2 col-form-label">Designation</label>
                                            <div class="col-sm-10"><input class="form-control" type="text" name="designation" placeholder="Type Designation Here" id="example-text-input"></div>
                                        </div>
                                        <div class="form-group row"><label for="example-text-input"
                                                class="col-sm-2 col-form-label">Details</label>
                                            <div class="col-sm-10"> <textarea class="form-control" name="detail" placeholder="Type Detail Here" cols="10" rows="5"></textarea> </div>
                                        </div>
                                        <div class="form-group row"><label for="example-text-input"
                                                class="col-sm-2 col-form-label">Facebook Link</label>
                                            <div class="col-sm-10"><input class="form-control" type="text" name="facebook_link" placeholder="Type Facebook Link Here" id="example-text-input"></div>
                                        </div>
                                        <div class="form-group row"><label for="example-text-input"
                                                class="col-sm-2 col-form-label">Twitter Link</label>
                                            <div class="col-sm-10"><input class="form-control" type="text" name="twitter_link" placeholder="Type Twitter Linkn Here" id="example-text-input"></div>
                                        </div>
                                        <div class="form-group row"><label for="example-text-input"
                                                class="col-sm-2 col-form-label">LinkedIn Link</label>
                                            <div class="col-sm-10"><input class="form-control" type="text" name="linkedin_link" placeholder="Type LinkedIn Link Here" id="example-text-input"></div>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Send Dat</button>
                                </form>
                                    </div>
                                </div>
                            </div><!-- end col -->
                        </div><!-- end row -->
                    </div><!-- container-fluid -->

@endsection