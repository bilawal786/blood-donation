@extends('layouts.frontend')
@section('content')
<section class="inner-hero bg_img overlay--one" style="background-image: url({{asset('assets/images/frontend/breadcrumb/61023f89990b81627537289.jpg')}});">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 text-center">
                <h2 class="page-title text-white">All Donor</h2>
                <ul class="page-breadcrumb justify-content-center">
                    <li><a href="https://script.viserlab.com/bloodlab">Home</a></li>
                    <li>All Donor</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<div class="donor-search-area">
    <div class="container">
        <form method="GET" action="https://script.viserlab.com/bloodlab/donor/search" class="donor-search-form">
            <div class="donor-search-form__field">
                <label>Blood Group</label>
                <select class="select" name="blood_id">
                    <option value="" selected="" disabled="">Select Group</option>
                    <option value="1" >B+</option>
                    <option value="2" >A+</option>
                    <option value="3" >AB+</option>
                    <option value="4" >O+</option>
                    <option value="5" >A-</option>
                    <option value="6" >B-</option>
                    <option value="7" >AB-</option>
                    <option value="8" >O-</option>
                </select>
            </div>

            <div class="donor-search-form__field">
                <label>City</label>
                <select class="select" name="city_id">
                    <option value="" disabled="" selected="">Select One</option>
                    <option value="1" data-locations="[{&quot;id&quot;:1,&quot;name&quot;:&quot;Abbey Wood&quot;,&quot;city_id&quot;:1,&quot;status&quot;:1,&quot;created_at&quot;:&quot;2021-07-31T01:45:49.000000Z&quot;,&quot;updated_at&quot;:&quot;2021-08-01T00:30:39.000000Z&quot;},{&quot;id&quot;:2,&quot;name&quot;:&quot;Crystalpalace&quot;,&quot;city_id&quot;:1,&quot;status&quot;:1,&quot;created_at&quot;:&quot;2021-07-31T02:10:14.000000Z&quot;,&quot;updated_at&quot;:&quot;2021-08-01T00:29:13.000000Z&quot;},{&quot;id&quot;:3,&quot;name&quot;:&quot;Addiscombe&quot;,&quot;city_id&quot;:1,&quot;status&quot;:1,&quot;created_at&quot;:&quot;2021-08-01T00:30:48.000000Z&quot;,&quot;updated_at&quot;:&quot;2021-08-01T00:30:48.000000Z&quot;}]">London</option>
                    <option value="2" data-locations="[{&quot;id&quot;:4,&quot;name&quot;:&quot;Addiscombe&quot;,&quot;city_id&quot;:2,&quot;status&quot;:1,&quot;created_at&quot;:&quot;2021-08-01T00:31:30.000000Z&quot;,&quot;updated_at&quot;:&quot;2021-08-01T00:31:30.000000Z&quot;},{&quot;id&quot;:5,&quot;name&quot;:&quot;Trafford&quot;,&quot;city_id&quot;:2,&quot;status&quot;:1,&quot;created_at&quot;:&quot;2021-08-01T00:31:40.000000Z&quot;,&quot;updated_at&quot;:&quot;2021-08-01T00:31:40.000000Z&quot;}]">Manchester</option>
                    <option value="3" data-locations="[{&quot;id&quot;:6,&quot;name&quot;:&quot;Acocks Green&quot;,&quot;city_id&quot;:3,&quot;status&quot;:1,&quot;created_at&quot;:&quot;2021-08-01T00:32:14.000000Z&quot;,&quot;updated_at&quot;:&quot;2021-08-01T00:32:14.000000Z&quot;},{&quot;id&quot;:7,&quot;name&quot;:&quot;Alum Rock&quot;,&quot;city_id&quot;:3,&quot;status&quot;:1,&quot;created_at&quot;:&quot;2021-08-01T00:32:25.000000Z&quot;,&quot;updated_at&quot;:&quot;2021-08-01T00:32:25.000000Z&quot;}]">Birmingham</option>
                    <option value="4" data-locations="[{&quot;id&quot;:8,&quot;name&quot;:&quot;Avonmouth&quot;,&quot;city_id&quot;:4,&quot;status&quot;:1,&quot;created_at&quot;:&quot;2021-08-01T00:32:59.000000Z&quot;,&quot;updated_at&quot;:&quot;2021-08-01T00:32:59.000000Z&quot;},{&quot;id&quot;:9,&quot;name&quot;:&quot;Bedminster&quot;,&quot;city_id&quot;:4,&quot;status&quot;:1,&quot;created_at&quot;:&quot;2021-08-01T00:33:09.000000Z&quot;,&quot;updated_at&quot;:&quot;2021-08-01T00:33:09.000000Z&quot;}]">Bristol</option>
                    <option value="5" data-locations="[{&quot;id&quot;:10,&quot;name&quot;:&quot;Abbotsley&quot;,&quot;city_id&quot;:5,&quot;status&quot;:1,&quot;created_at&quot;:&quot;2021-08-01T00:33:48.000000Z&quot;,&quot;updated_at&quot;:&quot;2021-08-01T00:33:48.000000Z&quot;},{&quot;id&quot;:11,&quot;name&quot;:&quot;Abbots Ripton&quot;,&quot;city_id&quot;:5,&quot;status&quot;:1,&quot;created_at&quot;:&quot;2021-08-01T00:34:01.000000Z&quot;,&quot;updated_at&quot;:&quot;2021-08-01T00:34:01.000000Z&quot;}]">Cambridge</option>
                    <option value="6" data-locations="[]">Canterbury</option>
                    <option value="7" data-locations="[{&quot;id&quot;:12,&quot;name&quot;:&quot;Ancient Carlisle&quot;,&quot;city_id&quot;:7,&quot;status&quot;:1,&quot;created_at&quot;:&quot;2021-08-01T00:34:50.000000Z&quot;,&quot;updated_at&quot;:&quot;2021-08-01T00:34:50.000000Z&quot;},{&quot;id&quot;:13,&quot;name&quot;:&quot;Middle Ages&quot;,&quot;city_id&quot;:7,&quot;status&quot;:1,&quot;created_at&quot;:&quot;2021-08-01T00:35:04.000000Z&quot;,&quot;updated_at&quot;:&quot;2021-08-01T00:35:04.000000Z&quot;}]">Carlisle</option>
                    <option value="8" data-locations="[{&quot;id&quot;:14,&quot;name&quot;:&quot;Neolithic&quot;,&quot;city_id&quot;:8,&quot;status&quot;:1,&quot;created_at&quot;:&quot;2021-08-01T00:35:36.000000Z&quot;,&quot;updated_at&quot;:&quot;2021-08-01T00:35:36.000000Z&quot;}]">Chelmsford</option>
                    <option value="9" data-locations="[{&quot;id&quot;:15,&quot;name&quot;:&quot;Chisworth&quot;,&quot;city_id&quot;:9,&quot;status&quot;:1,&quot;created_at&quot;:&quot;2021-08-01T00:36:11.000000Z&quot;,&quot;updated_at&quot;:&quot;2021-08-01T00:36:11.000000Z&quot;}]">Derby1</option>
                </select>
            </div>

            <div class="donor-search-form__field">
                <label>Location</label>
                <select class="select" name="location_id">
                    <option value="" selected="" disabled="">Select One</option>
                </select>
            </div>

            <div class="donor-search-form__field">
                <label>Donor Type</label>
                <select class="select" name="gender">
                    <option value="" selected="" disabled="">Select One</option>
                    <option value="1" >Male</option>
                    <option value="2" >Female</option>
                </select>
            </div>

            <div class="donor-search-form__btn">
                <button type="submit" class="btn btn-md btn--base">Search</button>
            </div>
        </form>
    </div>
</div>

<section class="pt-50 pb-50 shade--bg">
    <div class="container">
        <div class="row">
            <div class="col-xl-2 col-lg-3 col-md-4 d-md-block d-none">
                <a  target="_blank" href="#" class="d-block bonus"><img src="{{asset('assets/images/advertisement/6107f7875e8351627912071.png')}}" alt="image"></a>
                <a  target="_blank" href="#" class="d-block bonus"><img src="{{asset('assets/images/advertisement/6107f72aeef731627911978.png')}}" alt="image"></a>
                <a  target="_blank" href="#" class="d-block bonus"><img src="{{asset('assets/images/advertisement/6107f71a3be0e1627911962.png')}}" alt="image"></a>
                <a  target="_blank" href="#" class="d-block bonus"><img src="{{asset('assets/images/advertisement/6107f7875e8351627912071.png')}}" alt="image"></a>            </div>
            <div class="col-xl-8 col-lg-9 col-md-8">
                <div class="row gy-4">
                    @foreach($donars as $row )
                    <div class="col-lg-6 col-md-12 col-sm-6">
                        <div class="donor-item has--link">
                            <a href="donor/md-jeo/eyJpdiI6Ind6TVd6U2pZS3IvTSszanpacGZPNXc9PSIsInZhbHVlIjoiVWlXUWdEbVR0RnZwVGpuR0dPZ2lGQT09IiwibWFjIjoiNDMwZDY1ZDk3MjgxZGMxNTBlODI1Mzk2OTNmMjFlYWIxODlhMmU1OTMwMTAwZGMyYjRlMTcxN" class="item--link"></a>
                            <div class="donor-item__thumb">
                                <img onerror="this.src='{{asset('front/assets/images/donor/6108d83ae02901627969594.jpg')}}'"
                                    src="{{asset($row->img)}}" alt="image">
                            </div>
                            <div class="donor-item__content">
                                <h5 class="donor-item__name">{{$row->name}}</h5>
                                <ul class="donor-item__list mt-2">
                                    <li class="text-truncate">
                                        <i class="las la-map-marker-alt"></i> Location : {{$row->address}}
                                    </li>
                                    <li>
                                        <i class="las la-tint"></i>Blood Group : <span class="text--base">({{$row->blood_group}})</span>
                                    </li>
                                </ul>
                                <a href="#" class="text--base fs--14px text-decoration-underline">View Profile</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    {{$donars->links()}}
                </div>

            </div>
            <div class="col-xl-2 d-xl-block d-none">

                <a  target="_blank" href="#" class="d-block bonus"><img src="{{asset('assets/images/advertisement/6107f739b69161627911993.png')}}" alt="image"></a>
                <a  target="_blank" href="#" class="d-block bonus"><img src="{{asset('assets/images/advertisement/1.png')}}" alt="image"></a>
                <a  target="_blank" href="#" class="d-block bonus"><img src="{{asset('assets/images/advertisement/6107f739b69161627911993.png')}}" alt="image"></a>
                <a  target="_blank" href="#" class="d-block bonus"><img src="{{asset('assets/images/advertisement/6107f739b69161627911993.png')}}" alt="image"></a>            </div>
        </div>
    </div>
</section>

@endsection
