@extends('layouts.frontend')
@section('content')


    <div id="map-canvas" style="height: 100vh; width: 100%; position: relative; overflow: hidden;">

    </div>

@endsection

@section('scripts')

    <script type='text/javascript'
            src='https://maps.google.com/maps/api/js?language=en&key={{$googleApiKey}}&libraries=places&region=GB'></script>
    <script defer>
        function initialize() {
            var mapOptions = {
                zoom: 12,
                minZoom: 6,
                maxZoom: 17,
                zoomControl: true,
                zoomControlOptions: {
                    style: google.maps.ZoomControlStyle.DEFAULT
                },
                center: new google.maps.LatLng({{Auth::user()->lat??"31.518577"}}, {{Auth::user()->long??"74.337129"}}),
                mapTypeId: google.maps.MapTypeId.ROADMAP,
                scrollwheel: false,
                panControl: false,
                mapTypeControl: false,
                scaleControl: false,
                overviewMapControl: false,
                rotateControl: false
            }
            var map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
            var users = @json($users);

            for (user in users) {
                user = users[user];
                if(user.blood_group == "B+"){
                    var imageuser = new google.maps.MarkerImage("images/b.jpeg", null, null, null, new google.maps.Size(40, 52));
                }
                else if(user.blood_group == "A+"){
                    var imageuser = new google.maps.MarkerImage("images/b.jpeg", null, null, null, new google.maps.Size(40, 52));
                }
                else if(user.blood_group == "AB"){
                    var imageuser = new google.maps.MarkerImage("images/b.jpeg", null, null, null, new google.maps.Size(40, 52));
                }
                else if(user.blood_group == "A-"){
                    var imageuser = new google.maps.MarkerImage("images/b.jpeg", null, null, null, new google.maps.Size(40, 52));
                }
                else if(user.blood_group == "B-"){
                    var imageuser = new google.maps.MarkerImage("images/b.jpeg", null, null, null, new google.maps.Size(40, 52));
                }
                else if(user.blood_group == "AB-"){
                    var imageuser = new google.maps.MarkerImage("images/b.jpeg", null, null, null, new google.maps.Size(40, 52));
                }
                else if(user.blood_group == "O+"){
                    var imageuser = new google.maps.MarkerImage("images/b.jpeg", null, null, null, new google.maps.Size(40, 52));
                }
                else if(user.blood_group == "O-"){
                    var imageuser = new google.maps.MarkerImage("images/b.jpeg", null, null, null, new google.maps.Size(40, 52));
                }
                if (user.lat && user.long) {
                    var marker = new google.maps.Marker({
                        position: new google.maps.LatLng(user.lat, user.long),
                        icon: imageuser,
                        map: map,
                        title: user.fname
                    });
                    var infowindow = new google.maps.InfoWindow();
                    google.maps.event.addListener(marker, 'click', (function (marker, user) {
                        return function () {
                            infowindow.setContent(generateUsers(user))
                            infowindow.open(map, marker);
                        }
                    })(marker, user));
                }
            }
        }

        google.maps.event.addDomListener(window, 'load', initialize);

        function generateUsers(user) {
            var content = `
            <div class="gd-bubble" style="">
                <div class="gd-bubble-inside">
                    <div class="geodir-bubble_desc">
                    <div class="geodir-bubble_image">
                        <div class="geodir-post-slider">
                            <div class="geodir-image-container geodir-image-sizes-medium_large ">
                                <div id="geodir_images_5de53f2a45254_189" class="geodir-image-wrapper" data-controlnav="1">
                                    <ul class="geodir-post-image geodir-images clearfix">
                                        <li>
                                            <div class="geodir-post-title">
                                                <h4 class="geodir-entry-title">
                                                    <a style="color:black"  href="{{ route('profile.user', '') }}/`+user.id+`" title="View: `+user.name +`">`+user.name +`</a>
                                                </h4>
                                            </div>
                                            <a style="color:black" href="{{ route('profile.user', '') }}/`+user.id+`"><img style="width:100%; height:200px" src="`+user.img +`"  class="align size-medium_large" ></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="geodir-bubble-meta-side">
                    <div class="geodir-output-location">
                    <div class="geodir-output-location geodir-output-location-mapbubble">
                        <div class="geodir_post_meta  geodir-field-post_title"><span class="geodir_post_meta_icon geodir-i-text">
                            <i class="fas fa-minus" aria-hidden="true"></i>

                        <div class="geodir_post_meta  geodir-field-address" itemscope="" itemtype="http://schema.org/PostalAddress">
                            <span class="geodir_post_meta_icon geodir-i-address"><i class="fas fa-map-marker-alt" aria-hidden="true"></i>
                            <span class="geodir_post_meta_title" style="color:black" >Address: </span></span><span itemprop="streetAddress" style="color:black">`+user.address+`</span>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
            </div>
            </div>`;

            return content;
        }
    </script>
@endsection

