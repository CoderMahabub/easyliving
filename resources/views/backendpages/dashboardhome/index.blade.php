@extends('backendpages.dashboardhome.app')
@section('title')
 EasyLiving Admin DashBoard
@endsection
@section('content')
                    <div class="page-title-box">
                        <div class="row align-items-center">
                            <div class="col-sm-6">
                                <h4 class="page-title">Dashboard</h4>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item active">Welcome to Easyliving Dashboard</li>
                                </ol>
                            </div>
                            <div class="col-sm-6">
                                <div class="float-right d-none d-md-block">
                                    <div class="dropdown">
                                        <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item"
                                                href="#">Action</a> <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                            <div class="dropdown-divider"></div><a class="dropdown-item"
                                                href="#">Separated link</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- end row -->
                    <div class="row">
                    @if(Auth::user()->role_id == 3)
                        <div class="col-xl-3 col-md-6">
                            <div class="card mini-stat bg-primary text-white">
                                <div class="card-body">
                                    <div class="mb-4">
                                        <div class="float-left mini-stat-img mr-4"><img
                                                src="{{asset('backend/assets/images/services-icon/04.png')}}" alt=""></div>
                                        <h5 class="font-16 text-uppercase mt-0 text-white-50">Your Pending Orders</h5>
                                        <h4 class="font-500">{{ App\Reservation::where('employee_id',Auth::user()->id)->get()->count()}}<i class="mdi mdi-arrow-up text-success ml-2"></i>
                                        </h4>
                                    </div>
                                    <div class="pt-2">
                                        <div class="float-right"><a href="#" class="text-white-50"><i
                                                    class="mdi mdi-arrow-right h5"></i></a></div>
                                        <p class="text-white-50 mb-0">Deliver this order ASAP</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card mini-stat bg-primary text-white">
                                <div class="card-body">
                                    <div class="mb-4">
                                        <div class="float-left mini-stat-img mr-4"><img
                                                src="{{asset('backend/assets/images/services-icon/04.png')}}" alt=""></div>
                                        <h5 class="font-16 text-uppercase mt-0 text-white-50">Total Pending Orders</h5>
                                        <h4 class="font-500">{{(App\Reservation::all()->count())}}<i class="mdi mdi-arrow-up text-success ml-2"></i>
                                        </h4>
                                    </div>
                                    <div class="pt-2">
                                        <div class="float-right"><a href="#" class="text-white-50"><i
                                                    class="mdi mdi-arrow-right h5"></i></a></div>
                                        <p class="text-white-50 mb-0">Eployeers are Working</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-md-6">
                            <div class="card mini-stat bg-primary text-white">
                                <div class="card-body">
                                    <div class="mb-4">
                                        <div class="float-left mini-stat-img mr-4"><img
                                                src="{{asset('backend/assets/images/services-icon/04.png')}}" alt=""></div>
                                        <h5 class="font-16 text-uppercase mt-0 text-white-50">Order Delivered</h5>
                                        <h4 class="font-500">{{(App\Reservation::onlyTrashed()->count())}}<i class="mdi mdi-arrow-up text-success ml-2"></i>
                                        </h4>
                                    </div>
                                    <div class="pt-2">
                                        <div class="float-right"><a href="#" class="text-white-50"><i
                                                    class="mdi mdi-arrow-right h5"></i></a></div>
                                        <p class="text-white-50 mb-0">Successfully Delivered</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-md-6">
                            <div class="card mini-stat bg-primary text-white">
                                <div class="card-body">
                                    <div class="mb-4">
                                        <div class="float-left mini-stat-img mr-4"><img
                                                src="{{asset('backend/assets/images/services-icon/02.png')}}" alt=""></div>
                                        <h5 class="font-16 text-uppercase mt-0 text-white-50">Team Members</h5>
                                        <h4 class="font-500">{{(App\TeamMember::all()->count())}}<i class="mdi mdi-arrow-down text-danger ml-2"></i>
                                        </h4>
                                    </div>
                                    <div class="pt-2">
                                        <div class="float-right"><a href="#" class="text-white-50"><i
                                                    class="mdi mdi-arrow-right h5"></i></a></div>
                                        <p class="text-white-50 mb-0"> You are also a part of Team</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        @endif
                        @if(Auth::user()->role_id == 1)
                        <div class="col-xl-3 col-md-6">
                            <div class="card mini-stat bg-primary text-white">
                                <div class="card-body">
                                    <div class="mb-4">
                                        <div class="float-left mini-stat-img mr-4"><img
                                                src="{{asset('backend/assets/images/services-icon/01.png')}}" alt=""></div>
                                        <h5 class="font-16 text-uppercase mt-0 text-white-50">Registered Users</h5>
                                        <h4 class="font-500">{{ (App\User::all()->count()) }} <i class="mdi mdi-arrow-up text-success ml-2"></i>
                                        </h4>
                                    </div>
                                    <div class="pt-2">
                                        <div class="float-right"><a href="#" class="text-white-50"><i
                                                    class="mdi mdi-arrow-right h5"></i></a></div>
                                        <p class="text-white-50 mb-0">So far in Total</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-md-6">
                            <div class="card mini-stat bg-primary text-white">
                                <div class="card-body">
                                    <div class="mb-4">
                                        <div class="float-left mini-stat-img mr-4"><img
                                                src="{{asset('backend/assets/images/services-icon/02.png')}}" alt=""></div>
                                        <h5 class="font-16 text-uppercase mt-0 text-white-50">Team Members</h5>
                                        <h4 class="font-500">{{(App\TeamMember::all()->count())}}<i class="mdi mdi-arrow-down text-danger ml-2"></i>
                                        </h4>
                                    </div>
                                    <div class="pt-2">
                                        <div class="float-right"><a href="#" class="text-white-50"><i
                                                    class="mdi mdi-arrow-right h5"></i></a></div>
                                        <p class="text-white-50 mb-0"> Person Are Available</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-xl-3 col-md-6">
                            <div class="card mini-stat bg-primary text-white">
                                <div class="card-body">
                                    <div class="mb-4">
                                        <div class="float-left mini-stat-img mr-4"><img
                                                src="{{asset('backend/assets/images/services-icon/03.png')}}" alt=""></div>
                                        <h5 class="font-16 text-uppercase mt-0 text-white-50">New Messages</h5>
                                        <h4 class="font-500">{{(App\Contactus::all()->count())}}<i class="mdi mdi-arrow-up text-success ml-2"></i>
                                        </h4>
                                    </div>
                                    <div class="pt-2">
                                        <div class="float-right"><a href="#" class="text-white-50"><i
                                                    class="mdi mdi-arrow-right h5"></i></a></div>
                                        <p class="text-white-50 mb-0">From Customers & Employees</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card mini-stat bg-primary text-white">
                                <div class="card-body">
                                    <div class="mb-4">
                                        <div class="float-left mini-stat-img mr-4"><img
                                                src="{{asset('backend/assets/images/services-icon/04.png')}}" alt=""></div>
                                        <h5 class="font-16 text-uppercase mt-0 text-white-50">Types of Employee</h5>
                                        <h4 class="font-500">{{(App\Role::all()->count())}} <i class="mdi mdi-arrow-up text-success ml-2"></i>
                                        </h4>
                                    </div>
                                    <div class="pt-2">
                                        <div class="float-right"><a href="#" class="text-white-50"><i
                                                    class="mdi mdi-arrow-right h5"></i></a></div>
                                        <p class="text-white-50 mb-0">Since last month</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card mini-stat bg-primary text-white">
                                <div class="card-body">
                                    <div class="mb-4">
                                        <div class="float-left mini-stat-img mr-4"><img
                                                src="{{asset('backend/assets/images/services-icon/04.png')}}" alt=""></div>
                                        <h5 class="font-16 text-uppercase mt-0 text-white-50">Total Reservation</h5>
                                        <h4 class="font-500">{{(App\Reservation::all()->count())}}<i class="mdi mdi-arrow-up text-success ml-2"></i>
                                        </h4>
                                    </div>
                                    <div class="pt-2">
                                        <div class="float-right"><a href="#" class="text-white-50"><i
                                                    class="mdi mdi-arrow-right h5"></i></a></div>
                                        <p class="text-white-50 mb-0">Customers Ordered in Total</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card mini-stat bg-primary text-white">
                                <div class="card-body">
                                    <div class="mb-4">
                                        <div class="float-left mini-stat-img mr-4"><img
                                                src="{{asset('backend/assets/images/services-icon/04.png')}}" alt=""></div>
                                        <h5 class="font-16 text-uppercase mt-0 text-white-50">Delivered Orders</h5>
                                        <h4 class="font-500">{{(App\Reservation::onlyTrashed()->count())}}<i class="mdi mdi-arrow-up text-success ml-2"></i>
                                        </h4>
                                    </div>
                                    <div class="pt-2">
                                        <div class="float-right"><a href="#" class="text-white-50"><i
                                                    class="mdi mdi-arrow-right h5"></i></a></div>
                                        <p class="text-white-50 mb-0">Successfully Delivered Orders</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card mini-stat bg-primary text-white">
                                <div class="card-body">
                                    <div class="mb-4">
                                        <div class="float-left mini-stat-img mr-4"><img
                                                src="{{asset('backend/assets/images/services-icon/04.png')}}" alt=""></div>
                                        <h5 class="font-16 text-uppercase mt-0 text-white-50">Service Catagories</h5>
                                        <h4 class="font-500">{{(App\Pricelist::all()->count())}}<i class="mdi mdi-arrow-up text-success ml-2"></i>
                                        </h4>
                                    </div>
                                    <div class="pt-2">
                                        <div class="float-right"><a href="#" class="text-white-50"><i
                                                    class="mdi mdi-arrow-right h5"></i></a></div>
                                        <p class="text-white-50 mb-0">Since last month</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card mini-stat bg-primary text-white">
                                <div class="card-body">
                                    <div class="mb-4">
                                        <div class="float-left mini-stat-img mr-4"><img
                                                src="{{asset('backend/assets/images/services-icon/04.png')}}" alt=""></div>
                                        <h5 class="font-16 text-uppercase mt-0 text-white-50">Types of Status </h5>
                                        <h4 class="font-500">{{(App\Status::all()->count())}}<i class="mdi mdi-arrow-up text-success ml-2"></i>
                                        </h4>
                                    </div>
                                    <div class="pt-2">
                                        <div class="float-right"><a href="#" class="text-white-50"><i
                                                    class="mdi mdi-arrow-right h5"></i></a></div>
                                        <p class="text-white-50 mb-0">There three no blocked user</p>
                                    </div>
                                </div>
                            </div>
                        </div>


                        @endif
                        @if(Auth::user()->role_id == 2) 
                        <div class="col-xl-3 col-md-6">
                            <div class="card mini-stat bg-primary text-white">
                                <div class="card-body">
                                    <div class="mb-4">
                                        <div class="float-left mini-stat-img mr-4"><img
                                                src="{{asset('backend/assets/images/services-icon/04.png')}}" alt=""></div>
                                        <h5 class="font-16 text-uppercase mt-0 text-white-50">Your New Orders</h5>
                                    <h4 class="font-500">{{ App\Reservation::where('client_id',Auth::user()->id)->get()->count()}}<i class="mdi mdi-arrow-up text-success ml-2"></i></h4>
                                    </div>
                                    <div class="pt-2">
                                        <div class="float-right"><a href="#" class="text-white-50"><i
                                                    class="mdi mdi-arrow-right h5"></i></a></div>
                                        <p class="text-white-50 mb-0">You have Ordered</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-md-6">
                            <div class="card mini-stat bg-primary text-white">
                                <div class="card-body">
                                    <div class="mb-4">
                                        <div class="float-left mini-stat-img mr-4"><img
                                                src="{{asset('backend/assets/images/services-icon/04.png')}}" alt=""></div>
                                        <h5 class="font-16 text-uppercase mt-0 text-white-50">Your Delivered Orders</h5>
                                    <h4 class="font-500">{{ App\Reservation::where('client_id',Auth::user()->id)->onlyTrashed()->count()}}<i class="mdi mdi-arrow-up text-success ml-2"></i></h4>
                                    </div>
                                    <div class="pt-2">
                                        <div class="float-right"><a href="#" class="text-white-50"><i
                                                    class="mdi mdi-arrow-right h5"></i></a></div>
                                        <p class="text-white-50 mb-0">You have Received</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        
                        <div class="col-xl-3 col-md-6">
                            <div class="card mini-stat bg-primary text-white">
                                <div class="card-body">
                                    <div class="mb-4">
                                        <div class="float-left mini-stat-img mr-4"><img
                                                src="{{asset('backend/assets/images/services-icon/04.png')}}" alt=""></div>
                                        <h5 class="font-16 text-uppercase mt-0 text-white-50">Successfully Delivered</h5>
                                        <h4 class="font-500">{{(App\Reservation::onlyTrashed()->count())}}<i class="mdi mdi-arrow-up text-success ml-2"></i>
                                        </h4>
                                    </div>
                                    <div class="pt-2">
                                        <div class="float-right"><a href="#" class="text-white-50"><i
                                                    class="mdi mdi-arrow-right h5"></i></a></div>
                                        <p class="text-white-50 mb-0">By EasyLiving Online Service</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-md-6">
                            <div class="card mini-stat bg-primary text-white">
                                <div class="card-body">
                                    <div class="mb-4">
                                        <div class="float-left mini-stat-img mr-4"><img
                                                src="{{asset('backend/assets/images/services-icon/04.png')}}" alt=""></div>
                                        <h5 class="font-16 text-uppercase mt-0 text-white-50">We Have More then</h5>
                                        <h4 class="font-500">{{(App\TeamMember::all()->count())}}<i class="mdi mdi-arrow-up text-success ml-2"></i>
                                        </h4>
                                    </div>
                                    <div class="pt-2">
                                        <div class="float-right"><a href="#" class="text-white-50"><i
                                                    class="mdi mdi-arrow-right h5"></i></a></div>
                                        <p class="text-white-50 mb-0">Employees to Provice Service</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        
                        @endif
                    </div><!-- end row -->
                   
@endsection
