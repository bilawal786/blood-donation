@extends('layouts.app')

@section('content')
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="m-t-30"><img src="{{asset('images/icon-light.svg')}}" width="48" height="48" alt="HexaBit">
            </div>
            <p>Please wait...</p>
        </div>
    </div>
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <div id="wrapper">
        @include('backend.includes.navigation')
        @include('backend.includes.leftsidebar')
        <div id="main-content">
            <div class="block-header">
                <div class="row clearfix">
                    <div class="col-md-6 col-sm-12">
                        <h2>Dashboard</h2>
                    </div>
                    <div class="col-md-6 col-sm-12 text-right">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('dashboard.index')}}"><i class="icon-home"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                <div class="row clearfix">
                    <div class="col-12">
                        <div class="card top_report">
                            <div class="row clearfix">
                                <div class="col-lg-3 col-md-6 col-sm-6">
                                    <div class="body">
                                        <div class="clearfix">
                                            <div class="float-left">
                                                <i class="fa fa-2x fa-dollar text-col-blue"></i>
                                            </div>

                                            <div class="number float-right text-right">
                                                <h6>No of Donor</h6>
                                                <span class="font700">{{\App\Models\User::where('status')->where('role','=',2)->count()}}</span>
                                            </div>
                                        </div>
                                        <div class="progress progress-xs progress-transparent custom-color-blue mb-0 mt-3">
                                            <div class="progress-bar" data-transitiongoal="87" aria-valuenow="87" style="width: 87%;"></div>
                                        </div>
                                        <small class="text-muted">Active </small>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6">
                                    <div class="body">
                                        <div class="clearfix">
                                            <div class="float-left">
                                                <i class="fa fa-2x fa-bar-chart-o text-col-green"></i>
                                            </div>
                                            <div class="number float-right text-right">
                                                <h6>Donee</h6>
                                                <span class="font700">{{\App\Models\User::where('status')->where('role','=',1)->count()}}</span>
                                            </div>
                                        </div>
                                        <div class="progress progress-xs progress-transparent custom-color-green mb-0 mt-3">
                                            <div class="progress-bar" data-transitiongoal="28" aria-valuenow="28" style="width: 28%;"></div>
                                        </div>
                                        <small class="text-muted">Active</small>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection
