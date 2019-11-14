
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0,minimal-ui">
    <title>Registration</title>
    <meta content="Admin Dashboard" name="description">
    <meta content="Themesbrand" name="author">
    <link rel="icon" href="{{ asset('frontend/assets/images/favicon.ico')}}">
    <link href="{{ asset('backend/assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('backend/assets/css/metismenu.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('backend//plugins/select2/css/select2.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('backend//plugins/bootstrap-touchspin/css/jquery.bootstrap-touchspin.min.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/assets/css/icons.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('backend/assets/css/style.css') }}" rel="stylesheet" type="text/css">
    <style media="screen">
      .accountbg {
            background-repeat: no-repeat;
            background-size: cover;
            background-image: url( {{ asset('backend/assets/images/gallery/undraw_authentication_fsn5.png') }} );
            }
    </style>
</head>

<body>
<div class="container">
<div class="home-btn d-none d-sm-block"><a href="{{ route('homepage') }}" class="text-dark"> <b>Goto Homepage </b><i class="fa fa-home h2"></i></a></div>    <!-- Begin page -->
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h3 class="text-center"><a href="{{ route('homepage') }}" class="logo"><img src="{{ asset('frontend/assets/images/favicon.ico') }}" height="25" alt="logo"></a></h3>
                    <div>
                    <!-- //alert message -->

                        <div class="m-t-10 text-center">
                         <p>Already have an account ? <a href="{{route('customer_login')}}" class="font-500 text-primary">Login</a></p>
                        </div>


                        <!--========= //alert message========= -->
                        @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                        @endif


                        @include('sweetalert::alert')

                        <!-- =========//error========= -->
                    @if ($errors->any())
                        <ul>
                        @foreach ($errors->all() as $error)
                        <div class="alert alert-warning">
                        <li>{{ $error }}</li>
                        </div>
                        @endforeach
                        </ul>
                    @endif

                        <form class="form-horizontal m-t-30" action="{{route('registration_create')}}" method="post" enctype="multipart/form-data">
                          @csrf
                            <div class="form-group">
                                    <!-- name -->
                                <label for="useremail">Name</label>
                                <input type="text" class="form-control" maxlength="25" name="name" id="alloptions" placeholder="Enter Your Name"> </div>
                            <div class="form-group">
                                <div class="row">
                                    <!-- Email -->
                                    <div class="col-md-6">
                                        <label for="useremail">Email</label>
                                        <input name="email" type="email" class="form-control" parsley-type="email" placeholder="Enter a valid e-mail"> </div>
                                    <!-- Telephone Number -->
                                    <div class="col-md-6">
                                        <label for="username">Telephone Number</label>
                                        <input data-parsley-type="number" type="text" class="form-control" placeholder="Enter only numbers" name="telephone_number"> </div>
                                </div>
                            </div>
                            <!-- Address -->
                            <div class="form-group">
                                <label for="username">Address</label>
                                <textarea id="textarea" class="form-control" name="address" maxlength="100" rows="2" placeholder="This textarea has a limit of 100 chars."></textarea>
                            </div>
                            <div class="form-group">
                                <div class="row">
                                  <!-- District -->
                                    <div class="col-md-6">
                                        <label>District</label>
                                        <select class="form-control" name="district" id="district">
                                            <option value="">Dhaka</option>
                                            <option value="">Khulna</option>
                                        </select>
                                    </div>
                                    <!-- Thana -->
                                    <div class="col-md-6">
                                        <label>Thana</label>
                                        <select class="form-control" name="thana" id="thana">
                                            <option value="">Tejgaon</option>
                                            <option value="">Uttara</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="row">
                            <label>Select Photo</label>
                            <div class="col-md-12">
                                <input class="form-control" type="file" name="user_photo">
                            </div>
                                </div>
                            </div>

                                        
                            <div class="form-group">
                                <div class="row">
                                  <!-- Password -->
                                    <div class="col-md-6">
                                        <label for="useremail">Password</label>
                                        <input type="text" class="form-control" maxlength="8" name="password" id="alloptions" placeholder="Enter Your Password Max 8 Chars."> </div>
                                  <!-- Confirm Password -->
                                    <div class="col-md-6">
                                        <label for="useremail">Confirm Password</label>
                                        <input type="text" class="form-control" maxlength="8" name="confirm_password" id="alloptions" placeholder="Enter Your Password"> </div>
                                </div>
                            </div>
                            <div class="form-group row m-t-20">
                                <div class="col-12 text-right">
                                  <!-- Submit button -->
                                    <button class="btn btn-primary w-md waves-effect waves-light" type="submit">Register</button>
                                </div>
                            </div>
                            <div class="form-group m-t-10 mb-0 row">
                                <div class="col-12 m-t-20">
                                    <p class="mb-0">By registering you agree to EasyLiving Service Conditions <a href="#" class="text-primary">Terms of Use</a></p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="m-t-40 text-center">
                <p>Already have an account ? <a href="{{route('customer_login')}}" class="font-500 text-primary">Login</a></p>
                <p>© 2019 EasyLiving</p>
            </div>
        </div>
        <div class="col-md-8">
            <div class="accountbg"></div>
        </div>
    </div>
    
    <!-- end wrapper-page -->
    <!-- jQuery  -->
    <script src="{{ asset('backend/assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/metisMenu.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/jquery.slimscroll.js') }}"></script>
    <script src="{{ asset('backend/assets/js/waves.min.js') }}"></script>
    <!-- plugins -->
    <script src="{{ asset('backend/plugins/select2/js/select2.min.js') }}"></script>
    <script src="{{ asset('backend/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js') }}"></script>
    <script src="{{ asset('backend/plugins/bootstrap-filestyle/js/bootstrap-filestyle.min.js') }}"></script>
    <script src="{{ asset('backend/plugins/bootstrap-touchspin/js/jquery.bootstrap-touchspin.min.js') }}"></script>
    <!-- Parsley js -->
    <script src="{{ asset('backend/plugins/parsleyjs/parsley.min.js') }}"></script>
    <!-- Plugins Init js -->
    <script src="{{ asset('backend/assets/pages/form-advanced.js') }}"></script>
    <!-- App js -->
    <script src="{{ asset('backend/assets/js/app.js') }}"></script>
    <script>
        $(document).ready(function () {
            $('form').parsley();
        });
    </script>
    <script>
        @include('sweetalert::alert')
    </script>
</body>

</html>