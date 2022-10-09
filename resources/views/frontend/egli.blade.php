@extends('layouts.frontend')
@section('content')
    <div class="main-wrapper">
        <!-- <section class="inner-hero bg_img overlay--one" style="background-image: url({{asset('assets/images/frontend/breadcrumb/61023f89990b81627537289.jpg')}});">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 text-center">
                        <h2 class="page-title text-white">Contact Us</h2>
                        <ul class="page-breadcrumb justify-content-center">
                            <li><a href="{{route('front.index')}}">Home</a></li>
                            <li>Contact Us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section> -->
        <section class="pt-100 pb-100 position-relative z-index shade--bg">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="section-header text-center">
                            <h2 className="text-4xl font-bold text-black pb-2 pr-1 my-10">
                                Who can donate blood?
                            </h2>
                            <h3 className="text-3xl font-semibold pb-2 mb-5">
                                A person must have :{" "}
                            </h3>
                            <p>
                                {" "}
                                <span className="font-bold text-xl ">Health : </span>good health
                                and physically fit
                            </p>
                            <p>
                                {" "}
                                <span className="font-bold text-xl ">Age : </span>18years - 60
                                years
                            </p>
                            <p>
                                {" "}
                                <span className="font-bold text-xl">Hemoglobin : </span>not less
                                then 12.5 g/dl
                            </p>
                            <p>
                                {" "}
                                <span className="font-bold text-xl ">Blood Pressure : </span>
                                systolic 100-180 mm Hg and Diastolic 50-100 mm Hg
                            </p>
                            <p>
                                {" "}
                                <span className="font-bold text-xl ">Pulse : </span>between 50 and
                                100/minute with no irregularities.
                            </p>
                            <p>
                                {" "}
                                <span className="font-bold text-xl">Temperature : </span>normal
                            </p>
                            <p>
                                {" "}
                                <span className="font-bold text-xl">Body Weight : </span> greater
                                then 45 kg
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </section>
    </div>


@endsection
