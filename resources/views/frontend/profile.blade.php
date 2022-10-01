@extends('layouts.frontend')
@section('content')
    <div class="main-wrapper">
        <div class="profile-header dark--overlay bg_img"
             style="background-image: url({{asset('assets/images/frontend/breadcrumb/61023f89990b81627537289.jpg')}});">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="donor-profile">
                            <div class="donor-profile__thumb">
                                <img onerror="this.src='{{asset('assets/images/donor/6105373ee389c1627731774.jpg')}}'"
                                     src="{{asset($profile->img)}}" alt="image">
                            </div>
                            <div class="donor-profile__content">
                                <h3 class="donor-profile__name">{{$profile->name}}</h3>
                                <p><i class="las la-map-marker-alt mt-2"></i> Location : {{$profile->address}}</p>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="blood-donor-info-area">
                    <div class="row justify-content-center">
                        <div class="col-xl-3 col-lg-4">
                            <div class="dono-info-item d-flex align-items-center justify-content-center">
                                <h5 class="text-white me-3"><i class="las la-tint"></i> Blood Group : </h5>
                                <p class="text--base">{{$profile->blood_group}}</p>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 mt-lg-0 mt-3">
                            <div class="dono-info-item d-flex align-items-center justify-content-center">
                                <h5 class="text-white me-3"><i class="las la-calendar-check"></i> Last Donate : </h5>
                                <p class="text--base">
                                    @if($profile->date==0)
                                        No Donate
                                    @else
                                        {{date('d-M-Y', strtotime($profile->date))}}
                                    @endif
                                </p>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 mt-lg-0 mt-3">
                            <div class="dono-info-item d-flex align-items-center justify-content-center">
                                <h5 class="text-white me-3"><i class="las la-clipboard-list"></i> Total Donate : </h5>
                                <p class="text--base">{{$count}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section class="pt-100 pb-50 shade--bg">
            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-8 pe-lg-5">
                        <h3>Donor Details</h3>
                        <p class="mt-2">  {{$profile->about}}</p>
                        <ul class="caption-list-two mt-4">
                            <li>
                                <span class="caption">Name</span>
                                <span class="value">{{$profile->name}}</span>
                            </li>
                            <li>
                                <span class="caption">Gender</span>
                                <span class="value">
                                    @if($profile->gender==1)
                                        Male
                                    @else
                                        Female
                                    @endif
                                </span>
                            </li>
                            <li>
                                <span class="caption">Available Time</span>
                                <span class="value">{{$profile->s_time .'  -  '. $profile->e_time}}</span>
                            </li>
                            <li>
                                <span class="caption">Date of Birth</span>
                                <span class="value">{{date('d-M-Y', strtotime($profile->dob))}}</span>
                            </li>
                            <li>
                                <span class="caption">Age</span>
                                <span class="value"> {{\Carbon\Carbon::parse($profile->dob)->diff(\Carbon\Carbon::now())->format('%y years, %m months and %d days')}} Years</span>
                            </li>
                            <li>
                                <span class="caption">Religion</span>
                                <span class="value">islam</span>
                            </li>
                            <li>
                                <span class="caption">Email</span>
                                <span class="value"><a href="#" class="__cf_email__"
                                                       data-cfemail="2863494a415a684f45494144064b4745">{{$profile->email}}</a></span>
                            </li>
                            <li>
                                <span class="caption">Phone</span>
                                <span class="value">{{$profile->phone}}</span>
                            </li>
                            <li>
                                <span class="caption">Weight</span>
                                <span class="value">{{$profile->weight}}KG</span>
                            </li>
                            <li>
                                <span class="caption">City</span>
                                <span class="value">{{$profile->city}}</span>
                            </li>
                            <li>
                                <span class="caption">Address</span>
                                <span class="value">{{$profile->address}}</span>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-4">
                        <div class="custom--card section--bg2">
                            <div class="card-header">
                                <h5 class="text-white">Contact with Donor</h5>
                            </div>
                            <div class="card-body">
                                <form method="POST" action="{{route('send.request')}}" class="contact-donor-form">
                                    @csrf
                                    @if($currentDate >= $date)
                                        <input type="hidden" name="donor_id" value="{{$profile->id}}">
                                        <div class="form-group">
                                            <textarea name="message" class="form--control" placeholder="Message"
                                                      maxlength="500" required=""></textarea>
                                        </div>
                                        <button type="submit" class="btn btn--base w-100">Send Request</button>
                                    @else
                                        <p style="text-align: center;color: red">This User is Not Available right now</p>
                                    @endif
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
