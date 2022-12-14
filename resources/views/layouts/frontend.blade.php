<!DOCTYPE html>
<html lang="en">

<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8"/><!-- /Added by HTTrack -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blood Donation System</title>
    <meta name="title" Content="BloodLab - Home">
    <meta name="description"
          content="Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit">
    <meta name="keywords" content="BloodLab,Blood Donation,Blood Donation Platform">
    <!-- <link rel="shortcut icon" href="{{asset('Untitled-1.png')}}" type="image/x-icon"> -->
    <!-- MAIN CSS -->
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/color_skins.css') }}">
    <link rel="stylesheet" href="{{ asset('css/toastr.min.css') }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>


    <link rel="apple-touch-icon" href="{{asset('Untitled-1.png')}}">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="BloodLab - Home">

    <meta itemprop="name" content="BloodLab - Home">
    <meta itemprop="description" content="">
    <meta itemprop="image" content="assets/images/seo/61093a8563ade1627994757.jpg">

    <meta property="og:type" content="website">
    <meta property="og:title" content="BloodLab - Blood Donation Platform">
    <meta property="og:description"
          content="Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit ff">
    <meta property="og:image" content="{{asset('front/assets/images/seo/61093a8563ade1627994757.jpg')}}"/>
    <meta property="og:image:type" content="image/jpg"/>
    <meta property="og:image:width" content="600"/>
    <meta property="og:image:height" content="315"/>
    <meta property="og:url" content="">

    <meta name="twitter:card" content="summary_large_image">
    <link rel="icon" type="image/png" href="{{asset('front/assets/images/logoIcon/favicon1.png')}}" sizes="16x16">
    <link rel="stylesheet" href="{{asset('front/assets/templates/basic/frontend/css/lib/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('front/assets/templates/basic/frontend/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('front/assets/templates/basic/frontend/css/line-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('front/assets/templates/basic/frontend/css/lightcase.css')}}">
    <link rel="stylesheet" href="{{asset('front/assets/templates/basic/frontend/css/lib/slick.css')}}">
    <link rel="stylesheet" href="{{asset('front/assets/templates/basic/frontend/css/main.css')}}">
    <link rel="stylesheet" href="{{asset('front/assets/templates/basic/css/custom.css')}}">
    <link
        href="{{asset('front/assets/templates/basic/frontend/css/colore4b4.css?color=FB3640&amp;secondColor=17173A')}}"
        rel="stylesheet"/>
    <style>
        [class*="btn"].btn-md {
            padding: 10px;
            font-size: 1rem;
            width: 100%;
        }

        [class*="btn"].btn-md {
            padding: 10px;
            padding-right: 1rem;
            font-size: 1rem;
            width: 100%;
        }

        .form--control {
            padding: 0.625rem 1.25rem;
            border: 1px solid lightgray;
            width: 100%;
            background-color: #fff;
            border-radius: 3px;
            -webkit-border-radius: 3px;
            -moz-border-radius: 3px;
            -ms-border-radius: 3px;
            -o-border-radius: 3px;
            color: #000;
            height: 3.125rem;
        }

        .nav-pills .nav-link {
            background: 0 0;
            border: 0;
            border-radius: 0.25rem;
            text-align: left;
        }

        .donor-item__thumb {
            width: 35%;
            height: auto;
            overflow: hidden;
        }
        .footer_heading {
            color: black;
        }
    </style>
</head>
<body>
<!-- <div class="scroll-to-top">
            <span class="scroll-icon">
                <i class="las la-arrow-up"></i>
            </span>
</div> -->
<div class="preloader-holder">
    <div class="preloader">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
    </div>
</div>
<header class="header">
    <!-- <div class="header__top">
        <div class="container">
            <div class="row align-items-center gy-2">
                <div class="col-lg-6 col-md-8 col-sm-9">
                    <ul class="header__info-list d-flex flex-wrap align-items-center justify-content-sm-start justify-content-center">
                        <li><a href="tel:92354637389"><i class="las la-phone"></i> +92346537992</a></li>
                        <li><a href=""><i class="las la-envelope"></i> <span class="__cf_email__"
                                                                             data-cfemail="fd99989092bd9a909c9491d39e9290">info@gmail.com</span></a>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </div> -->

    <div class="header__bottom">
        <div class="container">
            <nav class="navbar navbar-expand-xl p-0 align-items-center">
                <a class="site-logo site-title" href="{{route('front.index')}}">
                    <img src="{{asset('Untitled-1.png')}}" alt="logo">
                </a>
                <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <span class="menu-toggle"></span>
                </button>
                <div class="collapse navbar-collapse mt-lg-0 mt-3" id="navbarSupportedContent">
                    <ul class="navbar-nav main-menu ms-auto">
                        <li><a href="{{route('front.index')}}">Home</a></li>
                        <li><a href="{{route('all.donor')}}">Available Donors</a></li>
                        @auth
                            @if(Auth::user()->role == 1)
                                <li><a href="{{route('front.map')}}">Map</a></li>
                            @endif

                        @endauth

                            <li><a href="{{route('eligibility')}}">Eligibility</a></li>

                        <li><a href="{{route('contact')}}">Contact</a></li>
                    </ul>
                    @auth
                        <div style="padding-left: 1.125rem;" class="nav-right">
{{--                            <a href="{{route('user.dashboard')}}"--}}
{{--                               class="btn btn-md btn--base d-flex align-items-center"><i--}}
{{--                                    class="las la-user fs--18px me-2"></i> Dashboard</a>--}}
                            <!-- Example single danger button -->
                            <div class="btn-group">
                                <button type="button" class="btn btn-md btn--base d-flex align-items-center dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <img src="{{asset(Auth::user()->img)}}" style="width:35px; border-radius: 48px;">
                                    <b style="padding: 0px 10px;">My Account</b>
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="{{route('user.dashboard')}}">My Profile</a>
                                    <a class="dropdown-item" href="{{route('logout')}}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><p>Logout</p>
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                          style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </div>
                        </div>
                    @else
                        <div class="nav-right">
                            <a href="{{route('login')}}" class="btn btn-md btn--base d-flex align-items-center"><i
                                    class="fs--18px me-2"></i> Login</a>
                            <!-- <a href="{{route('login')}}" class="btn btn-md btn--base d-flex align-items-center"><i
                                    class="las la-user fs--18px me-2"></i> Login</a> -->
                        </div>
                        <div style="padding-left: 1.125rem;" class="nav-right">
                            <a href="{{route('register')}}" class="btn btn-md btn--base d-flex align-items-center"><i
                                    class="fs--18px me-2"></i> Register</a>
                        </div>

                    @endauth
                </div>
            </nav>
        </div>
    </div>
</header>

@yield('content')


<footer class="">
<!-- <footer class="footer img-overlay bg_img"
        style="background-image: url({{asset('front/assets/images/frontend/footer/61023b2b0ac1b1627536171.jpg')}});"> -->
    <div class="footer__top bg-dark">
        <div class="container">
            <!-- <div class="footer-info-area">
                <div class="row align-items-center gy-4">
                    <div class="col-lg-9">
                        <ul class="footer-contact-list justify-content-lg-start justify-content-center">
                            <li>
                                <div class="icon">
                                    <i class="las la-phone-volume"></i>
                                </div>
                                <div class="content">
                                    <a href="tel:44983456780">44983456780</a>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <i class="las la-envelope"></i>
                                </div>
                                <div class="content">
                                    <a href="#"><span class="__cf_email__"
                                                      data-cfemail="5135343c3e11363c30383d7f323e3c">info@gmail.com</span></a>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-3 text-lg-end text-center">
                        <a href="#top-donors" class="btn btn--base">Blood Donors</a>
                    </div>
                </div>
            </div> -->

            <div class="row gy-5 justify-content-between">
                <div class="col-xl-4 col-lg-4 col-sm-8 order-lg-1 order-1">
                    <div class="footer-widget">
                        <a href="" class="footer-logo"><img src="{{asset('Untitled-1.png')}}"
                                                            alt="logo"></a>
                        <p class="mt-3 text-light">Blood Donation System is a website where you can easily find blood 
                            donors which are near you. You can also get registered as a donor to help peoples.
                        </p>
                        <!-- <form class="subscribe-form mt-4">
                            <input type="email" name="email" id="emailSub" class="form--control"
                                   placeholder="Enter email address">
                            <button type="button" class="subscribe-btn"><i class="lab la-telegram-plane"></i></button>
                        </form> -->
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-sm-6 order-lg-2 order-3">
                    <div class="footer-widget">
                        <h4 class="footer-widget__title">Short Links</h4>
                        <ul class="footer-links-list">
                            <li><a href="#top-donors">Available Donors</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-sm-6 order-lg-3 order-4">
                    <div class="footer-widget">
                        <h4 class="footer-widget__title">Support</h4>
                        <ul class="footer-links-list">
                            <li><a href="#">Support Center</a></li>
                            <li><a href="#">Apply as a Donor</a></li>
                            <li><a href="#">Terms of Service</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                        </ul>
                    </div>
                </div>
                @php
                    $users = \App\Models\User::all();
                @endphp
                <div class="col-xl-2 col-lg-2 col-sm-4 order-lg-4 order-2">
                    <div class="footer-widget">
                        <ul class="footer-overview-list text-end">
                            <li class="footer-overview">
                                <h4 class="footer-overview__number">{{$users->where('role', 2)->count()}}</h4>
                                <p class="footer-overview__caption text-light">Donors</p>
                            </li>
                            <li class="footer-overview">
                                <h4 class="footer-overview__number">{{$users->where('role', 1)->count()}}</h4>
                                <p class="footer-overview__caption text-light">Donee</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer__bottom bg-dark">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center text-light">
                    <p>Copyright ?? 2022 <a href="" class="text--base"> Blood Donation System </a> All Right Reserved</p>
                </div>
            </div>
        </div>
    </div>
</footer>

<script src="{{asset('front/assets/templates/basic/frontend/js/lib/jquery-3.6.0.min.js')}}"></script>
<script src="{{asset('front/assets/templates/basic/frontend/js/lib/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('front/assets/templates/basic/frontend/js/lib/slick.min.js')}}"></script>
<script src="{{asset('front/assets/templates/basic/frontend/js/lib/wow.min.js')}}"></script>
<script src="{{asset('front/assets/templates/basic/frontend/js/lib/lightcase.js')}}"></script>
<script src="{{asset('front/assets/templates/basic/frontend/js/app.js')}}"></script>
<script>
    (function () {
        'use strict';
        $(document).on('click', '.subscribe-btn', function () {
            var email = $("#emailSub").val();
            if (email) {
                $.ajax({
                    headers: {"X-CSRF-TOKEN": "PLTOfZRSQfCu1VAToz4GCiQl3Q6t6BcqyOgvP8wx",},
                    url: "/subscribe",
                    method: "POST",
                    data: {email: email},
                    success: function (response) {
                        if (response.success) {
                            notify('success', response.success);
                            $("#emailSub").val('');
                        } else {
                            $.each(response, function (i, val) {
                                notify('error', val);
                            });
                        }
                    }
                });
            } else {
                notify('error', "Please Input Your Email");
            }
        });

        $('.policy').on('click', function () {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $.get('cookie/accept.json', function (response) {
                $('.cookie__wrapper').addClass('d-none');
                notify('success', response);
            });
        });
    })();
</script>
<link rel="stylesheet" href="{{asset('front/assets/global/css/iziToast.min.css')}}">
<script src="{{asset('front/assets/global/js/iziToast.min.js')}}"></script>

<script>
    "use strict";

    function notify(status, message) {
        iziToast[status]({
            message: message,
            position: "topRight"
        });
    }
</script>
<script>
    (function ($) {
        "use strict";
        $(".langSel").on("change", function () {
            window.location.href = "/change/" + $(this).val();
        });
    })(jQuery);
</script>


<script>
    var Tawk_API = Tawk_API || {}, Tawk_LoadStart = new Date();
    (function () {
        var s1 = document.createElement("script"), s0 = document.getElementsByTagName("script")[0];
        s1.async = true;
        s1.src = 'https://embed.tawk.to/5fe0b9b2a8a254155ab5421d/1eq2tap1m';
        s1.charset = 'UTF-8';
        s1.setAttribute('crossorigin', '*');
        s0.parentNode.insertBefore(s1, s0);
    })();
</script>

<script>
    adroll_adv_id = "YXRNNTO7ZBAMFBH67UUE5M";
    adroll_pix_id = "MMQQDWGN25EXPHGRPA3NLR";
    adroll_version = "2.0";
    (function (w, d, e, o, a) {
        w.__adroll_loaded = true;
        w.adroll = w.adroll || [];
        w.adroll.f = ['setProperties', 'identify', 'track'];
        var roundtripUrl = "https://s.adroll.com/j/" + adroll_adv_id
            + "/roundtrip.js";
        for (a = 0; a < w.adroll.f.length; a++) {
            w.adroll[w.adroll.f[a]] = w.adroll[w.adroll.f[a]] || (function (n) {
                return function () {
                    w.adroll.push([n, arguments])
                }
            })(w.adroll.f[a])
        }
        e = d.createElement('script');
        o = d.getElementsByTagName('script')[0];
        e.async = 1;
        e.src = roundtripUrl;
        o.parentNode.insertBefore(e, o);
    })(window, document);
    adroll.track("pageView");
</script>
<script src="{{asset('js/toastr.js')}}"></script>
@stack('script')
<script>
    @if(Session::has('messege'))
    var type = "{{Session::get('alert-type','info')}}"
    switch (type) {
        case 'info':
            toastr.info("{{ Session::get('messege') }}");
            break;
        case 'success':
            toastr.success("{{ Session::get('messege') }}");
            break;
        case 'warning':
            toastr.warning("{{ Session::get('messege') }}");
            break;
        case 'error':
            toastr.error("{{ Session::get('messege') }}");
            break;
    }
    @endif
</script>
@yield('scripts')
</body>

</html>
