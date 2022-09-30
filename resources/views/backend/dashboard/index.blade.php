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
                                                <h6>Earnings</h6>
                                                <span class="font700">$22,500</span>
                                            </div>
                                        </div>
                                        <div class="progress progress-xs progress-transparent custom-color-blue mb-0 mt-3">
                                            <div class="progress-bar" data-transitiongoal="87" aria-valuenow="87" style="width: 87%;"></div>
                                        </div>
                                        <small class="text-muted">19% compared to last week</small>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6">
                                    <div class="body">
                                        <div class="clearfix">
                                            <div class="float-left">
                                                <i class="fa fa-2x fa-bar-chart-o text-col-green"></i>
                                            </div>
                                            <div class="number float-right text-right">
                                                <h6>Sales</h6>
                                                <span class="font700">$500</span>
                                            </div>
                                        </div>
                                        <div class="progress progress-xs progress-transparent custom-color-green mb-0 mt-3">
                                            <div class="progress-bar" data-transitiongoal="28" aria-valuenow="28" style="width: 28%;"></div>
                                        </div>
                                        <small class="text-muted">19% compared to last week</small>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6">
                                    <div class="body">
                                        <div class="clearfix">
                                            <div class="float-left">
                                                <i class="fa fa-2x fa-shopping-cart text-col-red"></i>
                                            </div>
                                            <div class="number float-right text-right">
                                                <h6>Orders</h6>
                                                <span class="font700">215</span>
                                            </div>
                                        </div>
                                        <div class="progress progress-xs progress-transparent custom-color-red mb-0 mt-3">
                                            <div class="progress-bar" data-transitiongoal="41" aria-valuenow="41" style="width: 41%;"></div>
                                        </div>
                                        <small class="text-muted">19% compared to last week</small>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6 col-sm-6">
                                    <div class="body">
                                        <div class="clearfix">
                                            <div class="float-left">
                                                <i class="fa fa-2x fa-thumbs-up text-col-yellow"></i>
                                            </div>
                                            <div class="number float-right text-right">
                                                <h6>Likes</h6>
                                                <span class="font700">21,215</span>
                                            </div>
                                        </div>
                                        <div class="progress progress-xs progress-transparent custom-color-yellow mb-0 mt-3">
                                            <div class="progress-bar" data-transitiongoal="75" aria-valuenow="75" style="width: 75%;"></div>
                                        </div>
                                        <small class="text-muted">19% compared to last week</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <div class="card">
                            <div class="header">
                                <h2>Active Order</h2>
                                <ul class="header-dropdown dropdown dropdown-animated scale-left">
                                    <li> <a href="javascript:void(0);" data-toggle="cardloading" data-loading-effect="pulse"><i class="icon-refresh"></i></a></li>
                                    <li><a href="javascript:void(0);" class="full-screen"><i class="icon-size-fullscreen"></i></a></li>
                                </ul>
                            </div>
                            <div class="body">
                                <div class="table-responsive">
                                    <table class="table table-hover js-basic-example dataTable table-custom mb-0">
                                        <thead class="thead-dark">
                                        <tr>
                                            <th>Date</th>
                                            <th>Type</th>
                                            <th>Amount BTC</th>
                                            <th>BTC Remaining</th>
                                            <th>Price</th>
                                            <th>USD</th>
                                            <th>Fee (%)</th>
                                            <th>Status</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>28-July-2018 06:51:51</td>
                                            <td>Buy</td>
                                            <td>
                                                0.58647</td>
                                            <td>
                                                0.58647</td>
                                            <td>11900.12</td>
                                            <td>$ 1597.78</td>
                                            <td>0.023</td>
                                            <td>
                                                <button class="btn btn-sm round btn-outline-success">Accept</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>28-July-2018 06:50:50</td>
                                            <td>Sell</td>
                                            <td>
                                                1.38647</td>
                                            <td>
                                                0.38647</td>
                                            <td>11905.09</td>
                                            <td>$ 2496.36</td>
                                            <td>0.017</td>
                                            <td>
                                                <button class="btn btn-sm round btn-outline-success">Accept</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>28-July-2018 06:49:51</td>
                                            <td>Buy</td>
                                            <td>
                                                0.45879</td>
                                            <td>
                                                0.45879</td>
                                            <td>11901.85</td>
                                            <td>$ 3165.44</td>
                                            <td>0.013</td>
                                            <td>
                                                <button class="btn btn-sm round btn-outline-success"> Accept</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>28-July-2018 06:51:51</td>
                                            <td>Buy</td>
                                            <td>
                                                0.89877</td>
                                            <td>
                                                0.89877</td>
                                            <td>11899.28</td>
                                            <td>$ 25830.6</td>
                                            <td>0.011</td>
                                            <td>
                                                <button class="btn btn-sm round btn-outline-success">Accept</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>28-July-2018 06:51:51</td>
                                            <td>Sell</td>
                                            <td>
                                                0.45712</td>
                                            <td>
                                                0.45712</td>
                                            <td>11908.19</td>
                                            <td>$ 2586.34</td>
                                            <td>0.024</td>
                                            <td>
                                                <button class="btn btn-sm round btn-outline-danger"> Cancel</button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>28-July-2018 06:51:51</td>
                                            <td>Buy</td>
                                            <td>
                                                0.58647</td>
                                            <td>
                                                0.58647</td>
                                            <td>11900.12</td>
                                            <td>$ 1597.78</td>
                                            <td>0.023</td>
                                            <td>
                                                <button class="btn btn-sm round btn-outline-success">Accept</button>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
