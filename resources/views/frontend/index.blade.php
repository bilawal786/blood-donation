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
                        <a href="blood/donor/b/eyJpdiI6Ind0N2tpMnYrVmlEZENKSzgrczBGV2c9PSIsInZhbHVlIjoid2Z6d3cza0t4MCtEMTloNDk5V1RGUT09IiwibWFjIjoiNGUzOWZmMDlhOTQxMjlkMWQwZmExYTNlZjRlYzRjN2I2YzBkM2ViYjliMGM3Yzg5NGEzMzQ0"
                           class="item--link"></a>
                        <h6 class="avaiable-blood-single__name"><i class="las la-tint"></i>B+</h6>
                        <span class="avaiable-blood-single__amount">20</span>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-4 col-6">
                    <div class="avaiable-blood-single has--link">
                        <a href="blood/donor/a/eyJpdiI6IkxCUjdZaW8xcjBCOEpUdVdwWStPRFE9PSIsInZhbHVlIjoiWWlTaXBUdTRPSC93cUZIT00ySWkxdz09IiwibWFjIjoiMWFiY2IxN2Q3ZTY3N2QxNWFjNDU1NzIzYzdmZDcwMTJmMWIyNDA2Y2NhYmY3MWIwNWM1NGUw"
                           class="item--link"></a>
                        <h6 class="avaiable-blood-single__name"><i class="las la-tint"></i>A+</h6>
                        <span class="avaiable-blood-single__amount">13</span>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-4 col-6">
                    <div class="avaiable-blood-single has--link">
                        <a href="blood/donor/ab/eyJpdiI6IkRhS2ErYTV6VW91UmRjcUFKMFB4Nmc9PSIsInZhbHVlIjoiVWNmc0QyZ2RRQWV0WjN6cm03WEx2QT09IiwibWFjIjoiZWVlYjkyM2Y2YzRlZWVmYmNiZDRjN2JlZDQzMzU1NzgyOTFiY2ZkOTk0MTg3NGU4NTRhOWY"
                           class="item--link"></a>
                        <h6 class="avaiable-blood-single__name"><i class="las la-tint"></i>AB+</h6>
                        <span class="avaiable-blood-single__amount">17</span>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-4 col-6">
                    <div class="avaiable-blood-single has--link">
                        <a href="blood/donor/o/eyJpdiI6ImhTYldJcytic1d1ZXZFTEdzZHczNEE9PSIsInZhbHVlIjoiNnlweFVVNHl6ckxDajZmY1VQZ0xjQT09IiwibWFjIjoiOTdhYmY4ZDZhZmM0Y2IxZjZiMzI1YjYzMjFiYzgzZmEyYWY5ODVlZmU4MGQxNTMyYjRjNjdm"
                           class="item--link"></a>
                        <h6 class="avaiable-blood-single__name"><i class="las la-tint"></i>O+</h6>
                        <span class="avaiable-blood-single__amount">11</span>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-4 col-6">
                    <div class="avaiable-blood-single has--link">
                        <a href="blood/donor/a/eyJpdiI6Im5jbjlwWjB5VVlDaG82ZjlXcjRNSFE9PSIsInZhbHVlIjoiRDJwZEErcDQ0QTFtK0VwK2tVS0ZZZz09IiwibWFjIjoiNTMxOGY2YTZhZTY4M2IwMjc1MGE2ZDFhOGY3NDZlM2JlN2E3NzU5NTEzN2VjODJjOGZiNDMx"
                           class="item--link"></a>
                        <h6 class="avaiable-blood-single__name"><i class="las la-tint"></i>A-</h6>
                        <span class="avaiable-blood-single__amount">0</span>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-4 col-6">
                    <div class="avaiable-blood-single has--link">
                        <a href="blood/donor/b/eyJpdiI6InU4WkwzcGhJWGhZZkhkNERVa0FPR1E9PSIsInZhbHVlIjoiRTNUU1IrMVRqL3c2Ti9wY0N2cHE3UT09IiwibWFjIjoiMzhiMGMyODMwYmQ2MDQwNWJmMTUyODhhMDBhNTQ0MDMwYjA1NTkzZGM5NDAwMTVhYTc2YzI3"
                           class="item--link"></a>
                        <h6 class="avaiable-blood-single__name"><i class="las la-tint"></i>B-</h6>
                        <span class="avaiable-blood-single__amount">0</span>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-4 col-6">
                    <div class="avaiable-blood-single has--link">
                        <a href="blood/donor/ab/eyJpdiI6IitjL2pLYU5kZXBvVW5ncEpncytJN2c9PSIsInZhbHVlIjoiRVMvNXMrZlVTSTJKOW5DaE8yMGxDZz09IiwibWFjIjoiNTk3Yzc5MzI1ZjM3MWExOWE3YTk2ZDA5NTc5YTljYjY4ZTdlMWNiNzU0YTlkM2YwMzBkNjQ"
                           class="item--link"></a>
                        <h6 class="avaiable-blood-single__name"><i class="las la-tint"></i>AB-</h6>
                        <span class="avaiable-blood-single__amount">0</span>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-4 col-6">
                    <div class="avaiable-blood-single has--link">
                        <a href="blood/donor/o/eyJpdiI6InBrWWcvWmJFYmtBU1l3TXNUZTZZUkE9PSIsInZhbHVlIjoiSW9RenU1KzV0eEFya3NpN2JEbFd3dz09IiwibWFjIjoiZDM2MWU0Mzg5ZDM3MjMzZGEwM2M4NzAxNzM2ODVmOGE5NDY1Y2RkMTYxODA3MWM3OWYxYjg3"
                           class="item--link"></a>
                        <h6 class="avaiable-blood-single__name"><i class="las la-tint"></i>O-</h6>
                        <span class="avaiable-blood-single__amount">0</span>
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
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6">
                    <div class="donor-card style--two has--link section--bg2">
                        <a href="donor/md-hasan/eyJpdiI6IjFSYyt5QTZSaUREMVg1OW5PaGhqVlE9PSIsInZhbHVlIjoia0pJOUxCYnRkNnAyK1ZVWjlYN3FlQT09IiwibWFjIjoiZTBhZjRiMGU3NjU4Nzc2YTUzOWI0YmMxZjg1NmYxNzZhMWI3MzI5Y2NkYWI2MTUxZTgzNzR"
                           class="item--link"></a>
                        <div class="donor-card__thumb">
                            <img src="{{asset('front/assets/images/donor/6108d83ae02901627969594.jpg')}}" alt="image">
                        </div>
                        <div class="donor-card__content">
                            <h6 class="donor-card__name">Md Hasan</h6>
                            <p class="fs--14px text-white">Blood Group : <span class="text--base">(AB+)</span></p>
                            <ul class="d-flex flex-wrap align-items-center justify-content-center donor-card__social mt-1">
                                <li><a href="https://www.facebook.com/" target="_blank"><i
                                            class="lab la-facebook-f"></i></a></li>
                                <li><a href="https://www.facebook.com/fasdfasdf" target="_blank"><i
                                            class="lab la-twitter"></i></a></li>
                                <li><a href="https://www.facebook.com/" target="_blank"><i
                                            class="lab la-linkedin-in"></i></a></li>
                                <li><a href="https://www.facebook.com/" target="_blank"><i class="lab la-instagram"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6">
                    <div class="donor-card style--two has--link section--bg2">
                        <a href="donor/saria-janim/eyJpdiI6IlRaVTJuV2ZIMEEyZ240djhxa1dCemc9PSIsInZhbHVlIjoib1lna0MzakF5L0FYbStQSFdlQzZOZz09IiwibWFjIjoiYmE0MDQ4YTI5OGJiOTUzMmYwOGI4NzY4MDYzMzJkYjdlZWMzZDFmN2Y1OTc5OWY3OTg4"
                           class="item--link"></a>
                        <div class="donor-card__thumb">
                            <img src="{{asset('front/assets/images/donor/610537267a1891627731750.jpg')}}" alt="image">
                        </div>
                        <div class="donor-card__content">
                            <h6 class="donor-card__name">Saria Janim</h6>
                            <p class="fs--14px text-white">Blood Group : <span class="text--base">(A+)</span></p>
                            <ul class="d-flex flex-wrap align-items-center justify-content-center donor-card__social mt-1">
                                <li><a href="https://www.facebook.com/" target="_blank"><i
                                            class="lab la-facebook-f"></i></a></li>
                                <li><a href="https://www.facebook.com/" target="_blank"><i
                                            class="lab la-twitter"></i></a></li>
                                <li><a href="https://www.facebook.com/" target="_blank"><i
                                            class="lab la-linkedin-in"></i></a></li>
                                <li><a href="https://www.facebook.com/" target="_blank"><i class="lab la-instagram"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6">
                    <div class="donor-card style--two has--link section--bg2">
                        <a href="donor/taira-kabir/eyJpdiI6InFsNXltZW9KODhyUWFwMTZmeFowRVE9PSIsInZhbHVlIjoiWWdrQWhkMVZoTDU4OXlFeUlBcGlqQT09IiwibWFjIjoiODZjMzZhNzE4NmI1ODRhZDcwMGFiNWQ3ODc0OTAyMGViMTEyNjdmYTQ3YjYyMjNmMWIy"
                           class="item--link"></a>
                        <div class="donor-card__thumb">
                            <img src="{{asset('front/assets/images/donor/6105373ee389c1627731774.jpg')}}" alt="image">
                        </div>
                        <div class="donor-card__content">
                            <h6 class="donor-card__name">Taira Kabir</h6>
                            <p class="fs--14px text-white">Blood Group : <span class="text--base">(A+)</span></p>
                            <ul class="d-flex flex-wrap align-items-center justify-content-center donor-card__social mt-1">
                                <li><a href="#" target="_blank"><i class="lab la-facebook-f"></i></a></li>
                                <li><a href="#" target="_blank"><i class="lab la-twitter"></i></a></li>
                                <li><a href="#" target="_blank"><i class="lab la-linkedin-in"></i></a></li>
                                <li><a href="#" target="_blank"><i class="lab la-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6">
                    <div class="donor-card style--two has--link section--bg2">
                        <a href="donor/saleha-begum/eyJpdiI6Im1ZcDJvckpyNFgzTEYwbkV0VCs0Nnc9PSIsInZhbHVlIjoibDZkN2hxZTJjeUs5YjBCMVFqelJDdz09IiwibWFjIjoiODY5ODBjMTFkZGY5NjkyMThjZTM1YjUzZGViMWE4MzQ2N2IzZTBkODBmNjVlYzQyMTh"
                           class="item--link"></a>
                        <div class="donor-card__thumb">
                            <img src="{{asset('front/assets/images/donor/610d0899227dd1628244121.jpg')}}" alt="image">
                        </div>
                        <div class="donor-card__content">
                            <h6 class="donor-card__name">Saleha Begum</h6>
                            <p class="fs--14px text-white">Blood Group : <span class="text--base">(AB+)</span></p>
                            <ul class="d-flex flex-wrap align-items-center justify-content-center donor-card__social mt-1">
                                <li><a href="#" target="_blank"><i class="lab la-facebook-f"></i></a></li>
                                <li><a href="#" target="_blank"><i class="lab la-twitter"></i></a></li>
                                <li><a href="#" target="_blank"><i class="lab la-linkedin-in"></i></a></li>
                                <li><a href="#" target="_blank"><i class="lab la-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6">
                    <div class="donor-card style--two has--link section--bg2">
                        <a href="donor/jane-dae/eyJpdiI6ImJlQnhvN2l6U08zanlydG8rcFU4Unc9PSIsInZhbHVlIjoiRW0yOTZBUUltbnN6TVZiaTQrd3I0UT09IiwibWFjIjoiMTRhMmIwZjU1YmEyYWU2OWZmYTFjZjMyM2IzMjE3ODQxZjRiZmQwNDRlMzNhODIzZjZhNDM"
                           class="item--link"></a>
                        <div class="donor-card__thumb">
                            <img src="{{asset('front/assets/images/donor/610d08784c1e51628244088.jpg')}}" alt="image">
                        </div>
                        <div class="donor-card__content">
                            <h6 class="donor-card__name">Jane Dae</h6>
                            <p class="fs--14px text-white">Blood Group : <span class="text--base">(AB+)</span></p>
                            <ul class="d-flex flex-wrap align-items-center justify-content-center donor-card__social mt-1">
                                <li><a href="#" target="_blank"><i class="lab la-facebook-f"></i></a></li>
                                <li><a href="#" target="_blank"><i class="lab la-twitter"></i></a></li>
                                <li><a href="#" target="_blank"><i class="lab la-linkedin-in"></i></a></li>
                                <li><a href="#" target="_blank"><i class="lab la-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6">
                    <div class="donor-card style--two has--link section--bg2">
                        <a href="donor/saria-janim/eyJpdiI6InR0eWVOQmdwWG9PMVdkbGRYN0pTSkE9PSIsInZhbHVlIjoiV3kwWElkdWR5QjF5NzNBM2hwR0xIZz09IiwibWFjIjoiZmU0YzdkMWZiNWQ2ZTc4M2VlM2I0ZjNkYTQwMTdkYThjNjE4MDhjMjM1YzVkZWQzZmVl"
                           class="item--link"></a>
                        <div class="donor-card__thumb">
                            <img src="{{asset('front/assets/images/donor/610537267a1891627731750.jpg')}}" alt="image">
                        </div>
                        <div class="donor-card__content">
                            <h6 class="donor-card__name">Saria Janim</h6>
                            <p class="fs--14px text-white">Blood Group : <span class="text--base">(A+)</span></p>
                            <ul class="d-flex flex-wrap align-items-center justify-content-center donor-card__social mt-1">
                                <li><a href="#" target="_blank"><i class="lab la-facebook-f"></i></a></li>
                                <li><a href="#" target="_blank"><i class="lab la-twitter"></i></a></li>
                                <li><a href="#" target="_blank"><i class="lab la-linkedin-in"></i></a></li>
                                <li><a href="#" target="_blank"><i class="lab la-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6">
                    <div class="donor-card style--two has--link section--bg2">
                        <a href="donor/md-jeo/eyJpdiI6IndTS2pHYXVPQVk5YVk5WnArWWhha2c9PSIsInZhbHVlIjoiV3Q4ME5NV056ZmVYd3cyU04xVXNzdz09IiwibWFjIjoiZmZmMjU4NmUzODQwNGI1ZTM3OTRjNTFlMmMwMjcwZTNhMmU5ZDAzYmVlMDI4ZTI5N2I2YWU3Y"
                           class="item--link"></a>
                        <div class="donor-card__thumb">
                            <img src="{{asset('front/assets/images/donor/61053766e74861627731814.jpg')}}" alt="image">
                        </div>
                        <div class="donor-card__content">
                            <h6 class="donor-card__name">Md Jeo</h6>
                            <p class="fs--14px text-white">Blood Group : <span class="text--base">(B+)</span></p>
                            <ul class="d-flex flex-wrap align-items-center justify-content-center donor-card__social mt-1">
                                <li><a href="#" target="_blank"><i class="lab la-facebook-f"></i></a></li>
                                <li><a href="#" target="_blank"><i class="lab la-twitter"></i></a></li>
                                <li><a href="#" target="_blank"><i class="lab la-linkedin-in"></i></a></li>
                                <li><a href="#" target="_blank"><i class="lab la-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6">
                    <div class="donor-card style--two has--link section--bg2">
                        <a href="donor/northan-jam/eyJpdiI6ImRGZmxCMXAxOW5GR0NwalByK1hpaFE9PSIsInZhbHVlIjoiUWRqT0NCU0lQY2U0aUxtVVlZRmtnQT09IiwibWFjIjoiYjE1OTVmZWMxOTc0MTdkZjBkNjJjMDUxMDg3MzI3OGY4YTBkNmQ5ZTA1NzczMjA5Y2Nj"
                           class="item--link"></a>
                        <div class="donor-card__thumb">
                            <img src="{{asset('front/assets/images/donor/6105377d6f5471627731837.jpg')}}" alt="image">
                        </div>
                        <div class="donor-card__content">
                            <h6 class="donor-card__name">Northan Jam</h6>
                            <p class="fs--14px text-white">Blood Group : <span class="text--base">(B+)</span></p>
                            <ul class="d-flex flex-wrap align-items-center justify-content-center donor-card__social mt-1">
                                <li><a href="#" target="_blank"><i class="lab la-facebook-f"></i></a></li>
                                <li><a href="#" target="_blank"><i class="lab la-twitter"></i></a></li>
                                <li><a href="#" target="_blank"><i class="lab la-linkedin-in"></i></a></li>
                                <li><a href="#" target="_blank"><i class="lab la-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
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
                <div class="col-100-5 col-lg-3 col-md-4 col-sm-6 col-xs-6">
                    <div class="donor-card style--three has--link">
                        <a href="donor/md-hasan/eyJpdiI6ImFxa01iVFRpR0swRnM2Tmt3cjBBR2c9PSIsInZhbHVlIjoibHh5ZHlLditSU0kzczV3SGtvaEFuUT09IiwibWFjIjoiMTBmMDFiYWZlNjI2OGM5ZDc4YmEzNWE2OWZjNzY5ZTQxNDZjNTAyOGI5ZDFmNzdkZDBkMmQ"
                           class="item--link"></a>
                        <div class="donor-card__thumb">
                            <img src="{{asset('front/assets/images/donor/6108d83ae02901627969594.jpg')}}" alt="image">
                        </div>
                        <div class="donor-card__content">
                            <h6 class="donor-card__name">Md Hasan</h6>
                            <p class="text-white fs--14px">Blood Group : (AB+)</p>
                            <span class="donor-card__amount mt-1"><i class="las la-tint"></i> 64 Times</span>
                        </div>
                    </div>
                </div>
                <div class="col-100-5 col-lg-3 col-md-4 col-sm-6 col-xs-6">
                    <div class="donor-card style--three has--link">
                        <a href="donor/faima-jesmin/eyJpdiI6IlBYc21Gbmt1b2FiMnZiQUo2aUFOb3c9PSIsInZhbHVlIjoicjErWkN5bEY1L3JMZmRFNHNQWHYwdz09IiwibWFjIjoiNTJhNDAxZWQyY2Q5MmU5ZDE1MGFkZWVhNDI4NGFiM2ZkMTViNGFjMGI1NTNiMGE4MmV"
                           class="item--link"></a>
                        <div class="donor-card__thumb">
                            <img src="{{asset('front/assets/images/donor/61053732bfe871627731762.jpg')}}" alt="image">
                        </div>
                        <div class="donor-card__content">
                            <h6 class="donor-card__name">Faima Jesmin</h6>
                            <p class="text-white fs--14px">Blood Group : (O+)</p>
                            <span class="donor-card__amount mt-1"><i class="las la-tint"></i> 11 Times</span>
                        </div>
                    </div>
                </div>
                <div class="col-100-5 col-lg-3 col-md-4 col-sm-6 col-xs-6">
                    <div class="donor-card style--three has--link">
                        <a href="donor/jhon-doe/eyJpdiI6Inh3TGU5OUZXTEJRaXIwdFpqVk9TRGc9PSIsInZhbHVlIjoiUmJlajYyTUlDamhTWTR6ZmNxU3Y5QT09IiwibWFjIjoiZjI4MTE2NGU3YjdiZWU4MzBkZjRjNzM0MjUyNWMyMTU4YzUxNjViYzE1MDFjNWNhMzBkYTd"
                           class="item--link"></a>
                        <div class="donor-card__thumb">
                            <img src="{{asset('front/assets/images/donor/6105377230c991627731826.jpg')}}" alt="image">
                        </div>
                        <div class="donor-card__content">
                            <h6 class="donor-card__name">Jhon Doe</h6>
                            <p class="text-white fs--14px">Blood Group : (AB+)</p>
                            <span class="donor-card__amount mt-1"><i class="las la-tint"></i> 21 Times</span>
                        </div>
                    </div>
                </div>
                <div class="col-100-5 col-lg-3 col-md-4 col-sm-6 col-xs-6">
                    <div class="donor-card style--three has--link">
                        <a href="donor/saria-janim/eyJpdiI6IkYrQTdUdnZ3WU0zRUYydDhYcnUvckE9PSIsInZhbHVlIjoiUGRTcnVPcFJwMXZrR09zNDFWcktsdz09IiwibWFjIjoiNjBlNmM0MWMzNjVkZGViMWY3NjZkMDM4ZmI2MjdhNjY4MTE0ZmIzN2Y4ZDdjNWY0YzRk"
                           class="item--link"></a>
                        <div class="donor-card__thumb">
                            <img src="{{asset('front/assets/images/donor/610537267a1891627731750.jpg')}}" alt="image">
                        </div>
                        <div class="donor-card__content">
                            <h6 class="donor-card__name">Saria Janim</h6>
                            <p class="text-white fs--14px">Blood Group : (A+)</p>
                            <span class="donor-card__amount mt-1"><i class="las la-tint"></i> 43 Times</span>
                        </div>
                    </div>
                </div>
                <div class="col-100-5 col-lg-3 col-md-4 col-sm-6 col-xs-6">
                    <div class="donor-card style--three has--link">
                        <a href="donor/md-jeo/eyJpdiI6Imp3eWxBUkd3QjZtOHZoNXZqZjh0SUE9PSIsInZhbHVlIjoicXYzZkpocVF6ZDdXZnh5QXdDc29Hdz09IiwibWFjIjoiZDViNTZjZGQ5Y2I3NGE3NWIwZGRkNWViNmNhNDdhMDM5MTgyMTBlMWNkMmY5NjAxMzk2NjBkN"
                           class="item--link"></a>
                        <div class="donor-card__thumb">
                            <img src="{{asset('front/assets/images/donor/61053766e74861627731814.jpg')}}" alt="image">
                        </div>
                        <div class="donor-card__content">
                            <h6 class="donor-card__name">Md Jeo</h6>
                            <p class="text-white fs--14px">Blood Group : (B+)</p>
                            <span class="donor-card__amount mt-1"><i class="las la-tint"></i> 34 Times</span>
                        </div>
                    </div>
                </div>
                <div class="col-100-5 col-lg-3 col-md-4 col-sm-6 col-xs-6">
                    <div class="donor-card style--three has--link">
                        <a href="donor/jane-dae/eyJpdiI6Im9MTUV2OGRwcUFTRUxvcEhJUm56a1E9PSIsInZhbHVlIjoiZ2h6dWJCZU0zUFo3SU5Wc0M0Z1dHUT09IiwibWFjIjoiNTIyZDU4MzJmZmU5NmVlNDdhNDc1ZmY2ODRjMDY1MTM3ZDRjZTQ0YjUyMDllOGIwNmVkMjN"
                           class="item--link"></a>
                        <div class="donor-card__thumb">
                            <img src="{{asset('front/assets/images/donor/610d08784c1e51628244088.jpg')}}" alt="image">
                        </div>
                        <div class="donor-card__content">
                            <h6 class="donor-card__name">Jane Dae</h6>
                            <p class="text-white fs--14px">Blood Group : (AB+)</p>
                            <span class="donor-card__amount mt-1"><i class="las la-tint"></i> 43 Times</span>
                        </div>
                    </div>
                </div>
                <div class="col-100-5 col-lg-3 col-md-4 col-sm-6 col-xs-6">
                    <div class="donor-card style--three has--link">
                        <a href="donor/joni/eyJpdiI6InhJMWtSWVdPWkRWa2U3R2VORTJTYnc9PSIsInZhbHVlIjoiaDloSVU0SFNoREpmQTNUbWNPMHNIUT09IiwibWFjIjoiNzZhZmRkMWI5YWNmMzk0ZTM1ZDBjNGI4MGFmMWNiMzA4MDM5Y2RiYjBkNTQ5NTk1NjUzNTIzZDY"
                           class="item--link"></a>
                        <div class="donor-card__thumb">
                            <img src="{{asset('front/assets/images/donor/6105516d378201627738477.jpg')}}" alt="image">
                        </div>
                        <div class="donor-card__content">
                            <h6 class="donor-card__name">Joni</h6>
                            <p class="text-white fs--14px">Blood Group : (AB+)</p>
                            <span class="donor-card__amount mt-1"><i class="las la-tint"></i> 34 Times</span>
                        </div>
                    </div>
                </div>
                <div class="col-100-5 col-lg-3 col-md-4 col-sm-6 col-xs-6">
                    <div class="donor-card style--three has--link">
                        <a href="donor/hasan/eyJpdiI6IllYVGFadlJGQ1ZzSDNYbWNhc09WRGc9PSIsInZhbHVlIjoiYy8rVStxdXhhK3E5MG56TU9wK1R0Zz09IiwibWFjIjoiYmMwMDAyNmQyYmQ4ODk3YzAxYzkyMDI1MzU3MTdlM2YxNDlkZmZiNGFkYTdhZGUyMzc3NWY1Nj"
                           class="item--link"></a>
                        <div class="donor-card__thumb">
                            <img src="{{asset('front/assets/images/donor/610550bf33cdc1627738303.jpg')}}" alt="image">
                        </div>
                        <div class="donor-card__content">
                            <h6 class="donor-card__name">Hasan</h6>
                            <p class="text-white fs--14px">Blood Group : (A+)</p>
                            <span class="donor-card__amount mt-1"><i class="las la-tint"></i> 34 Times</span>
                        </div>
                    </div>
                </div>
                <div class="col-100-5 col-lg-3 col-md-4 col-sm-6 col-xs-6">
                    <div class="donor-card style--three has--link">
                        <a href="donor/fsadf/eyJpdiI6IndpNGtnM0R6R0pVSTA1QVNTaXJwd1E9PSIsInZhbHVlIjoidHo3Ni9pbk5pLzhOL2dsWnFHcURFZz09IiwibWFjIjoiY2NiNTBkZmNmNGEzN2JhM2RkYmJkMDFmNTk0OGFjMGRmMzViYWViYjY2Njg1ZmVlNTc3NDliOW"
                           class="item--link"></a>
                        <div class="donor-card__thumb">
                            <img src="{{asset('front/assets/images/donor/61055081700de1627738241.jpg')}}" alt="image">
                        </div>
                        <div class="donor-card__content">
                            <h6 class="donor-card__name">fsadf</h6>
                            <p class="text-white fs--14px">Blood Group : (AB+)</p>
                            <span class="donor-card__amount mt-1"><i class="las la-tint"></i> 34 Times</span>
                        </div>
                    </div>
                </div>
                <div class="col-100-5 col-lg-3 col-md-4 col-sm-6 col-xs-6">
                    <div class="donor-card style--three has--link">
                        <a href="donor/waria-rasfin/eyJpdiI6IjFXWitFcmpwOEpONFRqcUx3QUJha0E9PSIsInZhbHVlIjoiUzNrdkJzbjl6V0VGZjlGZWl0N3E1UT09IiwibWFjIjoiY2M1N2RjOGJhZWIwM2I4MzY4NzEyZmVhMTliZjYyMjEzYmY0MzdiZjJlOTMyYWJjMmJ"
                           class="item--link"></a>
                        <div class="donor-card__thumb">
                            <img src="{{asset('front/assets/images/donor/61053755b8c921627731797.jpg')}}" alt="image">
                        </div>
                        <div class="donor-card__content">
                            <h6 class="donor-card__name">Waria Rasfin</h6>
                            <p class="text-white fs--14px">Blood Group : (O+)</p>
                            <span class="donor-card__amount mt-1"><i class="las la-tint"></i> 11 Times</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>
@endsection
