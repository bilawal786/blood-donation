@extends('layouts.frontend')
@section('content')
<div class="main-wrapper">

    <section class="hero bg_img"
             style="background-image: url({{asset('front/assets/images/frontend/banner/60fffe430ffba1627389507.jpg')}});">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xxl-6 col-xl-7 col-lg-8 text-center">
                    <h2 class="hero__title">A lot of things hurt. Saving lives doesn&#039;t have to</h2>
                </div>
            </div>
            <div class="row justify-content-center mt-4">
                <div class="col-xxl-7 col-xl-8 col-lg-10">
                    <form method="GET" action="/donor/search" class="hero__blood-search-form">
                        <div class="input-field">
                            <i class="las la-tint"></i>
                            <select name="blood_id">
                                <option value="" selected="" disabled="">Select Blood Group</option>
                                <option value="1">B+</option>
                                <option value="2">A+</option>
                                <option value="3">AB+</option>
                                <option value="4">O+</option>
                                <option value="5">A-</option>
                                <option value="6">B-</option>
                                <option value="7">AB-</option>
                                <option value="8">O-</option>
                            </select>
                        </div>
                        <div class="input-field">
                            <i class="las la-city"></i>
                            <select name="city_id">
                                <option value="" selected="" disabled="">Select City</option>
                                <option value="1">London</option>
                                <option value="2">Manchester</option>
                                <option value="3">Birmingham</option>
                                <option value="4">Bristol</option>
                                <option value="5">Cambridge</option>
                                <option value="6">Canterbury</option>
                                <option value="7">Carlisle</option>
                                <option value="8">Chelmsford</option>
                                <option value="9">Derby1</option>
                            </select>
                        </div>
                        <div class="btn-area">
                            <button type="submit" class="btn btn-md btn--base"><i class="las la-search"></i> Search
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section class="pt-80 pb-80 position-relative z-index-2 overflow-hidden">
        <div class="top-el-bg">
            <img src="{{asset('front/assets/images/frontend/blood/60fff77d8bf601627387773.png')}}" alt="image">
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 text-center">
                    <div class="section-header mb-5">
                        <h2 class="section-title">Avaiable Blood Donors</h2>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center gy-4">
                <div class="col-lg-3 col-sm-4 col-6">
                    <div class="avaiable-blood-single has--link">
                        <a href="{{route('all.donor',['blod'=>'B+'])}}"
                           class="item--link"></a>
                        <h6 class="avaiable-blood-single__name"><i class="las la-tint"></i>B+</h6>
                        <span class="avaiable-blood-single__amount">{{$users->where('blood_group','=','B+')->count()}}</span>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-4 col-6">
                    <div class="avaiable-blood-single has--link">
                        <a href="{{route('all.donor',['blod'=>'A+'])}}"
                           class="item--link"></a>
                        <h6 class="avaiable-blood-single__name"><i class="las la-tint"></i>A+</h6>
                        <span class="avaiable-blood-single__amount">{{$users->where('blood_group','=','A+')->count()}}</span>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-4 col-6">
                    <div class="avaiable-blood-single has--link">
                        <a href="{{route('all.donor',['blod'=>'AB+'])}}"
                           class="item--link"></a>
                        <h6 class="avaiable-blood-single__name"><i class="las la-tint"></i>AB+</h6>
                        <span class="avaiable-blood-single__amount">{{$users->where('blood_group','=','AB+')->count()}}</span>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-4 col-6">
                    <div class="avaiable-blood-single has--link">
                        <a href="{{route('all.donor',['blod'=>'O+'])}}"
                           class="item--link"></a>
                        <h6 class="avaiable-blood-single__name"><i class="las la-tint"></i>O+</h6>
                        <span class="avaiable-blood-single__amount">{{$users->where('blood_group','=','O+')->count()}}</span>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-4 col-6">
                    <div class="avaiable-blood-single has--link">
                        <a href="{{route('all.donor',['blod'=>'A-'])}}"
                           class="item--link"></a>
                        <h6 class="avaiable-blood-single__name"><i class="las la-tint"></i>A-</h6>
                        <span class="avaiable-blood-single__amount">{{$users->where('blood_group','=','A-')->count()}}</span>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-4 col-6">
                    <div class="avaiable-blood-single has--link">
                        <a href="{{route('all.donor',['blod'=>'B-'])}}"
                           class="item--link"></a>
                        <h6 class="avaiable-blood-single__name"><i class="las la-tint"></i>B-</h6>
                        <span class="avaiable-blood-single__amount">{{$users->where('blood_group','=','B-')->count()}}</span>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-4 col-6">
                    <div class="avaiable-blood-single has--link">
                        <a href="{{route('all.donor',['blod'=>'AB-'])}}"
                           class="item--link"></a>
                        <h6 class="avaiable-blood-single__name"><i class="las la-tint"></i>AB-</h6>
                        <span class="avaiable-blood-single__amount">{{$users->where('blood_group','=','AB-')->count()}}</span>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-4 col-6">
                    <div class="avaiable-blood-single has--link">
                        <a href="{{route('all.donor',['blod'=>'O-'])}}"
                           class="item--link"></a>
                        <h6 class="avaiable-blood-single__name"><i class="las la-tint"></i>O-</h6>
                        <span class="avaiable-blood-single__amount">{{$users->where('blood_group','=','O-')->count()}}</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="pt-100 pb-100 shade--bg">
        <div class="container">
            <div class="row gy-5">
                <div class="col-lg-6">
                    <div class="about-thumb">
                        <a class="play-btn" href="https://www.youtube.com/embed/WOb4cj7izpE"
                           data-rel="lightcase:myCollection"><i class="las la-play"></i></a>
                        <img src="{{asset('front/assets/images/frontend/about/60fff7dc7c1141627387868.jpg')}}"
                             alt="image" class="w-100 h-100">
                    </div>
                </div>

                <div class="col-lg-6 ps-lg-5">
                    <div class="section-header mb-5 text-sm-start text-center">
                        <h2 class="section-title">Why BloodLab</h2>
                        <p>Omnis harum qui vel repudiandae officiis nemo perferendis libero soluta consequuntur culpa,
                            laborum facere, fugiat totam ratione.</p>
                    </div>
                    <div class="row gy-4">
                        <div class="col-lg-12">
                            <div class="about-item">
                                <div class="about-item__icon">
                                    <i class="las la-shield-alt"></i></div>
                                <div class="about-item__content">
                                    <h4 class="about-item__title">All Data is Secured</h4>
                                    <p>Aamet consectetur adipisicing elit. Est voluptatibus accusamus nam labore, quam a
                                        quo. Quibusdam est voluptatibus animi quia.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="about-item">
                                <div class="about-item__icon">
                                    <i class="las la-compass"></i></div>
                                <div class="about-item__content">
                                    <h4 class="about-item__title">Always Free</h4>
                                    <p>Aamet consectetur adipisicing elit. Est voluptatibus accusamus nam labore, quam a
                                        quo. Quibusdam est voluptatibus animi quia.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="about-item">
                                <div class="about-item__icon">
                                    <i class="las la-magic"></i></div>
                                <div class="about-item__content">
                                    <h4 class="about-item__title">100% Automated</h4>
                                    <p>Aamet consectetur adipisicing elit. Est voluptatibus accusamus nam labore, quam a
                                        quo. Quibusdam est voluptatibus animi quia</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="pt-100 pb-100 border-top  position-relative z-index-2 overflow-hidden" id="top-donors">
        <div class="bottom-el-bg">
            <img src="{{asset('front/assets/images/frontend/donor/60fff8a0c56951627388064.png')}}" alt="image">
        </div>

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-header text-center">
                        <h2 class="section-title">Top Donors</h2>
                        <p class="mt-2">Dolor sit amet, consectetur adipisicing elit. Dignissimos soluta est qui totam
                            expedita eaque, deleniti quidem sequi magni iure nulla corporis.</p>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center gy-4">
                @foreach($donnars as $row)
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6">
                    <div class="donor-card style--two has--link section--bg2">
                        <a href="{{route('profile.user',['id'=>$row->id])}}"
                           class="item--link"></a>
                        <div class="donor-card__thumb">

                            <img onerror="this.src='{{asset('front/assets/images/donor/6108d83ae02901627969594.jpg')}}'"
                                 src="{{asset($row->img)}}" alt="image">
                        </div>
                        <div class="donor-card__content">
                            <h6 class="donor-card__name">{{$row->name}}</h6>
                            <p class="fs--14px text-white">Blood Group : <span class="text--base">({{$row->blood_group}})</span></p>

                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </section>
    <section class="pt-100 pb-100 bg_img dark--overlay overflow-hidden"
             style="background-image: url({{asset('front/assets/images/frontend/testimonial/60fffa7b16d461627388539.jpg')}});">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-5">
                    <div class="section-header text-center">
                        <h2 class="section-title  text-white">What Blood Donors say</h2>
                        <p class="mt-2 text-white">Architecto corporis voluptate ut iure veritatis tempore vitae. Minima
                            ea provident eaque.</p>
                    </div>
                </div>
            </div>

            <div class="testimonial-slider">
                <div class="single-slide">
                    <div class="testimonial-card">
                        <div class="testimonial-card__content">
                            <div class="ratings mb-2">
                                <i class="las la-star"></i>
                                <i class="las la-star"></i>
                                <i class="las la-star"></i>
                                <i class="las la-star"></i>
                                <i class="las la-star"></i>

                            </div>
                            <p>Repellat, laudantium soluta laborum distinctio iste modi consectetur, atque, consequatur
                                facere quidem hic unde harum alias molestias eveniet accusantium. Quasi natus aut minima
                                modi saepe beatae reprehenderit illum</p>
                            <div class="d-flex align-items-center mt-3">
                                <h5 class="name me-2">Demo7</h5>
                                <span class="caption fs--14px text--base">(55 times donor)</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-slide">
                    <div class="testimonial-card">
                        <div class="testimonial-card__content">
                            <div class="ratings mb-2">
                                <i class="las la-star"></i>
                                <i class="las la-star"></i>
                                <i class="las la-star"></i>
                                <i class="las la-star"></i>
                                <i class="las la-star"></i>

                            </div>
                            <p>Repellat, laudantium soluta laborum distinctio iste modi consectetur, atque, consequatur
                                facere quidem hic unde harum alias molestias eveniet accusantium. Quasi natus aut minima
                                modi saepe beatae reprehenderit illum</p>
                            <div class="d-flex align-items-center mt-3">
                                <h5 class="name me-2">Demo6</h5>
                                <span class="caption fs--14px text--base">(54 times donor)</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-slide">
                    <div class="testimonial-card">
                        <div class="testimonial-card__content">
                            <div class="ratings mb-2">
                                <i class="las la-star"></i>
                                <i class="las la-star"></i>
                                <i class="las la-star"></i>
                                <i class="las la-star"></i>
                                <i class="las la-star"></i>

                            </div>
                            <p>Repellat, laudantium soluta laborum distinctio iste modi consectetur, atque, consequatur
                                facere quidem hic unde harum alias molestias eveniet accusantium. Quasi natus aut minima
                                modi saepe beatae reprehenderit illum</p>
                            <div class="d-flex align-items-center mt-3">
                                <h5 class="name me-2">Demo6</h5>
                                <span class="caption fs--14px text--base">(23 times donor)</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-slide">
                    <div class="testimonial-card">
                        <div class="testimonial-card__content">
                            <div class="ratings mb-2">
                                <i class="las la-star"></i>
                                <i class="las la-star"></i>
                                <i class="las la-star"></i>
                                <i class="las la-star"></i>
                                <i class="las la-star"></i>

                            </div>
                            <p>Repellat, laudantium soluta laborum distinctio iste modi consectetur, atque, consequatur
                                facere quidem hic unde harum alias molestias eveniet accusantium. Quasi natus aut minima
                                modi saepe beatae reprehenderit illum</p>
                            <div class="d-flex align-items-center mt-3">
                                <h5 class="name me-2">Demo2</h5>
                                <span class="caption fs--14px text--base">(5 times donor)</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-slide">
                    <div class="testimonial-card">
                        <div class="testimonial-card__content">
                            <div class="ratings mb-2">
                                <i class="las la-star"></i>
                                <i class="las la-star"></i>
                                <i class="las la-star"></i>

                            </div>
                            <p>Repellat, laudantium soluta laborum distinctio iste modi consectetur, atque, consequatur
                                facere quidem hic unde harum alias molestias eveniet accusantium. Quasi natus aut minima
                                modi saepe beatae reprehenderit illum</p>
                            <div class="d-flex align-items-center mt-3">
                                <h5 class="name me-2">Demo1</h5>
                                <span class="caption fs--14px text--base">(3 times donor)</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="pt-100 pb-100 border-top  position-relative z-index-2 overflow-hidden">
        <div class="bottom-el-bg">
            <img src="{{asset('front/assets/images/frontend/latest_donor/6107e3696253d1627906921.png')}}" alt="image">
        </div>

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-header text-center">
                        <h2 class="section-title">Latest Donor</h2>
                        <p class="mt-2">Dolor sit amet, consectetur adipisicing elit. Dignissimos soluta est qui totam
                            expedita eaque, deleniti quidem sequi magni iure nulla corporis.</p>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center gy-4">
                @foreach($donnars as $row )
                <div class="col-100-5 col-lg-3 col-md-4 col-sm-6 col-xs-6">
                    <div class="donor-card style--three has--link">
                        <a href="{{route('profile.user',['id'=>$row->id])}}"
                           class="item--link"></a>
                        <div class="donor-card__thumb">
                            <img  onerror="this.src='{{asset('front/assets/images/donor/6108d83ae02901627969594.jpg')}}'"
                                src="{{asset($row->img)}}" alt="image">
                        </div>
                        <div class="donor-card__content">
                            <h6 class="donor-card__name">{{$row->name}}</h6>
                            <p class="text-white fs--14px">Blood Group : ({{$row->blood_group}})</p>
                            <span class="donor-card__amount mt-1"><i class="las la-tint"></i> 64 Times</span>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </section>

</div>
@endsection
