@extends('layouts.frontend')
@section('content')
<div class="main-wrapper">

    <section class="hero bg_img"
             style="background-image: url({{asset('front/assets/images/frontend/banner/bd6.jpg')}});">
    <!-- <section class="hero bg_img"
             style="background-image: url({{asset('front/assets/images/frontend/banner/60fffe430ffba1627389507.jpg')}});"> -->
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xxl-6 col-xl-7 col-lg-8 text-center">
                    <h2 class="hero__title">“Saving One Life Is As If Saving Whole Of Humanity…” – Quran 5:32”</h2>
                </div>
            </div>
            <div class="row justify-content-center mt-4">
                <div class="col-xxl-7 col-xl-8 col-lg-10">
                    <form method="post" action="{{route('donor.search')}}" class="hero__blood-search-form">
                        @csrf
                        <div class="input-field">
                            <!-- <i class="las la-tint"></i> -->
                            <i class=""></i>
                            <select name="blood_id">
                                <option value="">Select Blood Group</option>
                                <option value="B+">B+</option>
                                <option value="A+">A+</option>
                                <option value="AB+">AB+</option>
                                <option value="O+">O+</option>
                                <option value="A-">A-</option>
                                <option value="B-">B-</option>
                                <option value="AB-">AB-</option>
                                <option value="O-">O-</option>
                            </select>
                        </div>

                        <div class="input-field">
                            <i class=""></i>
                            <!-- <i class="las la-city"></i> -->
                            <select name="city">
                                <option value="" >Select City</option>
                                <option value="Islamabad">Islamabad</option>
                                <option value="lahore">Lahore</option>
                                <option value="Ahmed Nager Chatha">Ahmed Nager Chatha</option>
                                <option value="Ahmadpur East">Ahmadpur East</option>
                                <option value="Ali Khan Abad">Ali Khan Abad</option>
                                <option value="Alipur">Alipur</option>
                                <option value="Arifwala">Arifwala</option>
                                <option value="Attock">Attock</option>
                                <option value="Bhera">Bhera</option>
                                <option value="Bhalwal">Bhalwal</option>
                                <option value="Bahawalnagar">Bahawalnagar</option>
                                <option value="Bahawalpur">Bahawalpur</option>
                                <option value="Bhakkar">Bhakkar</option>
                                <option value="Burewala">Burewala</option>
                                <option value="Chillianwala">Chillianwala</option>
                                <option value="Chakwal">Chakwal</option>
                                <option value="Chichawatni">Chichawatni</option>
                                <option value="Chiniot">Chiniot</option>
                                <option value="Chishtian">Chishtian</option>
                                <option value="Daska">Daska</option>
                                <option value="Darya Khan">Darya Khan</option>
                                <option value="Dera Ghazi Khan">Dera Ghazi Khan</option>
                                <option value="Dhaular">Dhaular</option>
                                <option value="Dina">Dina</option>
                                <option value="Dinga">Dinga</option>
                                <option value="Dipalpur">Dipalpur</option>
                                <option value="Faisalabad">Faisalabad</option>
                                <option value="Ferozewala">Ferozewala</option>
                                <option value="Fateh Jhang">Fateh Jang</option>
                                <option value="Ghakhar Mandi">Ghakhar Mandi</option>
                                <option value="Gojra">Gojra</option>
                                <option value="Gujranwala">Gujranwala</option>
                                <option value="Gujrat">Gujrat</option>
                                <option value="Gujar Khan">Gujar Khan</option>
                                <option value="Hafizabad">Hafizabad</option>
                                <option value="Haroonabad">Haroonabad</option>
                                <option value="Hasilpur">Hasilpur</option>
                                <option value="Haveli Lakha">Haveli Lakha</option>
                                <option value="Jatoi">Jatoi</option>
                                <option value="Jalalpur">Jalalpur</option>
                                <option value="Jattan">Jattan</option>
                                <option value="Jampur">Jampur</option>
                                <option value="Jaranwala">Jaranwala</option>
                                <option value="Jhang">Jhang</option>
                                <option value="Jhelum">Jhelum</option>
                                <option value="Kalabagh">Kalabagh</option>
                                <option value="Karor Lal Esan">Karor Lal Esan</option>
                                <option value="Kasur">Kasur</option>
                                <option value="Kamalia">Kamalia</option>
                                <option value="Kamoke">Kamoke</option>
                                <option value="Khanewal">Khanewal</option>
                                <option value="Khanpur">Khanpur</option>
                                <option value="Kharian">Kharian</option>
                                <option value="Khushab">Khushab</option>
                                <option value="Kot Addu">Kot Addu</option>
                                <option value="Jauharabad">Jauharabad</option>
                                <option value="Lahore">Lahore</option>
                                <option value="Lalamusa">Lalamusa</option>
                                <option value="Layyah">Layyah</option>
                                <option value="Liaquat Pur">Liaquat Pur</option>
                                <option value="Lodhran">Lodhran</option>
                                <option value="Malakwal">Malakwal</option>
                                <option value="Mamoori">Mamoori</option>
                                <option value="Mailsi">Mailsi</option>
                                <option value="Mandi Bahauddin">Mandi Bahauddin</option>
                                <option value="Mian Channu">Mian Channu</option>
                                <option value="Mianwali">Mianwali</option>
                                <option value="Multan">Multan</option>
                                <option value="Murree">Murree</option>
                                <option value="Muridke">Muridke</option>
                                <option value="Mianwali Bangla">Mianwali Bangla</option>
                                <option value="Muzaffargarh">Muzaffargarh</option>
                                <option value="Narowal">Narowal</option>
                                <option value="Nankana Sahib">Nankana Sahib</option>
                                <option value="Okara">Okara</option>
                                <option value="Renala Khurd">Renala Khurd</option>
                                <option value="Pakpattan">Pakpattan</option>
                                <option value="Pattoki">Pattoki</option>
                                <option value="Pir Mahal">Pir Mahal</option>
                                <option value="Qaimpur">Qaimpur</option>
                                <option value="Qila Didar Singh">Qila Didar Singh</option>
                                <option value="Rabwah">Rabwah</option>
                                <option value="Raiwind">Raiwind</option>
                                <option value="Rajanpur">Rajanpur</option>
                                <option value="Rahim Yar Khan">Rahim Yar Khan</option>
                                <option value="Rawalpindi">Rawalpindi</option>
                                <option value="Sadiqabad">Sadiqabad</option>
                                <option value="Safdarabad">Safdarabad</option>
                                <option value="Sahiwal">Sahiwal</option>
                                <option value="Sangla Hill">Sangla Hill</option>
                                <option value="Sarai Alamgir">Sarai Alamgir</option>
                                <option value="Sargodha">Sargodha</option>
                                <option value="Shakargarh">Shakargarh</option>
                                <option value="Sheikhupura">Sheikhupura</option>
                                <option value="Sialkot">Sialkot</option>
                                <option value="Sohawa">Sohawa</option>
                                <option value="Soianwala">Soianwala</option>
                                <option value="Siranwali">Siranwali</option>
                                <option value="Talagang">Talagang</option>
                                <option value="Taxila">Taxila</option>
                                <option value="Toba Tek Singh">Toba Tek Singh</option>
                                <option value="Vehari">Vehari</option>
                                <option value="Wah Cantonment">Wah Cantonment</option>
                                <option value="Wazirabad">Wazirabad</option>
                                <option value="Badin">Badin</option>
                                <option value="Bhirkan">Bhirkan</option>
                                <option value="Rajo Khanani">Rajo Khanani</option>
                                <option value="Chak">Chak</option>
                                <option value="Dadu">Dadu</option>
                                <option value="Digri">Digri</option>
                                <option value="Diplo">Diplo</option>
                                <option value="Dokri">Dokri</option>
                                <option value="Ghotki">Ghotki</option>
                                <option value="Haala">Haala</option>
                                <option value="Hyderabad">Hyderabad</option>
                                <option value="Islamkot">Islamkot</option>
                                <option value="Jacobabad">Jacobabad</option>
                                <option value="Jamshoro">Jamshoro</option>
                                <option value="Jungshahi">Jungshahi</option>
                                <option value="Kandhkot">Kandhkot</option>
                                <option value="Kandiaro">Kandiaro</option>
                                <option value="Karachi">Karachi</option>
                                <option value="Kashmore">Kashmore</option>
                                <option value="Keti Bandar">Keti Bandar</option>
                                <option value="Khairpur">Khairpur</option>
                                <option value="Kotri">Kotri</option>
                                <option value="Larkana">Larkana</option>
                                <option value="Matiari">Matiari</option>
                                <option value="Mehar">Mehar</option>
                                <option value="Mirpur Khas">Mirpur Khas</option>
                                <option value="Mithani">Mithani</option>
                                <option value="Mithi">Mithi</option>
                                <option value="Mehrabpur">Mehrabpur</option>
                                <option value="Moro">Moro</option>
                                <option value="Nagarparkar">Nagarparkar</option>
                                <option value="Naudero">Naudero</option>
                                <option value="Naushahro Feroze">Naushahro Feroze</option>
                                <option value="Naushara">Naushara</option>
                                <option value="Nawabshah">Nawabshah</option>
                                <option value="Nazimabad">Nazimabad</option>
                                <option value="Qambar">Qambar</option>
                                <option value="Qasimabad">Qasimabad</option>
                                <option value="Ranipur">Ranipur</option>
                                <option value="Ratodero">Ratodero</option>
                                <option value="Rohri">Rohri</option>
                                <option value="Sakrand">Sakrand</option>
                                <option value="Sanghar">Sanghar</option>
                                <option value="Shahbandar">Shahbandar</option>
                                <option value="Shahdadkot">Shahdadkot</option>
                                <option value="Shahdadpur">Shahdadpur</option>
                                <option value="Shahpur Chakar">Shahpur Chakar</option>
                                <option value="Shikarpaur">Shikarpaur</option>
                                <option value="Sukkur">Sukkur</option>
                                <option value="Tangwani">Tangwani</option>
                                <option value="Tando Adam Khan">Tando Adam Khan</option>
                                <option value="Tando Allahyar">Tando Allahyar</option>
                                <option value="Tando Muhammad Khan">Tando Muhammad Khan</option>
                                <option value="Thatta">Thatta</option>
                                <option value="Umerkot">Umerkot</option>
                                <option value="Warah">Warah</option>
                                <option value="Abbottabad">Abbottabad</option>
                                <option value="Adezai">Adezai</option>
                                <option value="Alpuri">Alpuri</option>
                                <option value="Akora Khattak">Akora Khattak</option>
                                <option value="Ayubia">Ayubia</option>
                                <option value="Banda Daud Shah">Banda Daud Shah</option>
                                <option value="Bannu">Bannu</option>
                                <option value="Batkhela">Batkhela</option>
                                <option value="Battagram">Battagram</option>
                                <option value="Birote">Birote</option>
                                <option value="Chakdara">Chakdara</option>
                                <option value="Charsadda">Charsadda</option>
                                <option value="Chitral">Chitral</option>
                                <option value="Daggar">Daggar</option>
                                <option value="Dargai">Dargai</option>
                                <option value="Darya Khan">Darya Khan</option>
                                <option value="Dera Ismail Khan">Dera Ismail Khan</option>
                                <option value="Doaba">Doaba</option>
                                <option value="Dir">Dir</option>
                                <option value="Drosh">Drosh</option>
                                <option value="Hangu">Hangu</option>
                                <option value="Haripur">Haripur</option>
                                <option value="Karak">Karak</option>
                                <option value="Kohat">Kohat</option>
                                <option value="Kulachi">Kulachi</option>
                                <option value="Lakki Marwat">Lakki Marwat</option>
                                <option value="Latamber">Latamber</option>
                                <option value="Madyan">Madyan</option>
                                <option value="Mansehra">Mansehra</option>
                                <option value="Mardan">Mardan</option>
                                <option value="Mastuj">Mastuj</option>
                                <option value="Mingora">Mingora</option>
                                <option value="Nowshera">Nowshera</option>
                                <option value="Paharpur">Paharpur</option>
                                <option value="Pabbi">Pabbi</option>
                                <option value="Peshawar">Peshawar</option>
                                <option value="Saidu Sharif">Saidu Sharif</option>
                                <option value="Shorkot">Shorkot</option>
                                <option value="Shewa Adda">Shewa Adda</option>
                                <option value="Swabi">Swabi</option>
                                <option value="Swat">Swat</option>
                                <option value="Tangi">Tangi</option>
                                <option value="Tank">Tank</option>
                                <option value="Thall">Thall</option>
                                <option value="Timergara">Timergara</option>
                                <option value="Tordher">Tordher</option>
                                <option value="Awaran">Awaran</option>
                                <option value="Barkhan">Barkhan</option>
                                <option value="Chagai">Chagai</option>
                                <option value="Dera Bugti">Dera Bugti</option>
                                <option value="Gwadar">Gwadar</option>
                                <option value="Harnai">Harnai</option>
                                <option value="Jafarabad">Jafarabad</option>
                                <option value="Jhal Magsi">Jhal Magsi</option>
                                <option value="Kacchi">Kacchi</option>
                                <option value="Kalat">Kalat</option>
                                <option value="Kech">Kech</option>
                                <option value="Kharan">Kharan</option>
                                <option value="Khuzdar">Khuzdar</option>
                                <option value="Killa Abdullah">Killa Abdullah</option>
                                <option value="Killa Saifullah">Killa Saifullah</option>
                                <option value="Kohlu">Kohlu</option>
                                <option value="Lasbela">Lasbela</option>
                                <option value="Lehri">Lehri</option>
                                <option value="Loralai">Loralai</option>
                                <option value="Mastung">Mastung</option>
                                <option value="Musakhel">Musakhel</option>
                                <option value="Nasirabad">Nasirabad</option>
                                <option value="Nushki">Nushki</option>
                                <option value="Panjgur">Panjgur</option>
                                <option value="Pishin Valley">Pishin Valley</option>
                                <option value="Quetta">Quetta</option>
                                <option value="Sherani">Sherani</option>
                                <option value="Sibi">Sibi</option>
                                <option value="Sohbatpur">Sohbatpur</option>
                                <option value="Washuk">Washuk</option>
                                <option value="Zhob">Zhob</option>
                                <option value="Ziarat">Ziarat</option>
                            </select>
                        </div>
                        <div class="btn-area">
                            <!-- <button type="submit" class="btn btn-md btn--base"><i class="las la-search"></i> Search -->
                            <button type="submit" class="btn btn-md btn--base"><i class=""></i> Search
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section class="pt-80 pb-80 position-relative z-index-2 overflow-hidden">
        <!-- <div class="top-el-bg">
            <img src="{{asset('front/assets/images/frontend/blood/60fff77d8bf601627387773.png')}}" alt="image">
        </div> -->
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
                        <!-- <h6 class="avaiable-blood-single__name"><i class="las la-tint"></i>B+</h6> -->
                        <h6 class="avaiable-blood-single__name"><i class=""></i>B+</h6>
                        <span class="avaiable-blood-single__amount">{{$users->where('blood_group','=','B+')->count()}}</span>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-4 col-6">
                    <div class="avaiable-blood-single has--link">
                        <a href="{{route('all.donor',['blod'=>'A+'])}}"
                           class="item--link"></a>
                        <h6 class="avaiable-blood-single__name"><i class=""></i>A+</h6>
                        <span class="avaiable-blood-single__amount">{{$users->where('blood_group','=','A+')->count()}}</span>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-4 col-6">
                    <div class="avaiable-blood-single has--link">
                        <a href="{{route('all.donor',['blod'=>'AB+'])}}"
                           class="item--link"></a>
                        <h6 class="avaiable-blood-single__name"><i class=""></i>AB+</h6>
                        <span class="avaiable-blood-single__amount">{{$users->where('blood_group','=','AB+')->count()}}</span>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-4 col-6">
                    <div class="avaiable-blood-single has--link">
                        <a href="{{route('all.donor',['blod'=>'O+'])}}"
                           class="item--link"></a>
                        <h6 class="avaiable-blood-single__name"><i class=""></i>O+</h6>
                        <span class="avaiable-blood-single__amount">{{$users->where('blood_group','=','O+')->count()}}</span>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-4 col-6">
                    <div class="avaiable-blood-single has--link">
                        <a href="{{route('all.donor',['blod'=>'A-'])}}"
                           class="item--link"></a>
                        <h6 class="avaiable-blood-single__name"><i class=""></i>A-</h6>
                        <span class="avaiable-blood-single__amount">{{$users->where('blood_group','=','A-')->count()}}</span>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-4 col-6">
                    <div class="avaiable-blood-single has--link">
                        <a href="{{route('all.donor',['blod'=>'B-'])}}"
                           class="item--link"></a>
                        <h6 class="avaiable-blood-single__name"><i class=""></i>B-</h6>
                        <span class="avaiable-blood-single__amount">{{$users->where('blood_group','=','B-')->count()}}</span>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-4 col-6">
                    <div class="avaiable-blood-single has--link">
                        <a href="{{route('all.donor',['blod'=>'AB-'])}}"
                           class="item--link"></a>
                        <h6 class="avaiable-blood-single__name"><i class=""></i>AB-</h6>
                        <span class="avaiable-blood-single__amount">{{$users->where('blood_group','=','AB-')->count()}}</span>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-4 col-6">
                    <div class="avaiable-blood-single has--link">
                        <a href="{{route('all.donor',['blod'=>'O-'])}}"
                           class="item--link"></a>
                        <h6 class="avaiable-blood-single__name"><i class=""></i>O-</h6>
                        <span class="avaiable-blood-single__amount">{{$users->where('blood_group','=','O-')->count()}}</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="pt-100 pb-100 bg-light">
        <div class="container">
            <div class="row gy-5">
                <div class="col-lg-6">
                    <div class="about-thumb">
                        <!-- <a class="play-btn" href="https://www.youtube.com/embed/WOb4cj7izpE"
                           data-rel="lightcase:myCollection"><i class="las la-play"></i></a> -->
                        <img src="{{asset('front/assets/images/frontend/about/bd1.jpg')}}"
                             alt="image" class="w-100 h-100">
                    </div>
                </div>

                <div class="col-lg-6 ps-lg-5">
                    <div class="section-header mb-5 text-sm-start text-center">
                        <h2 class="section-title">Why Blood Donation System</h2>
                        <p>Blood Donation System is a website where you can easily find blood donors which are near you. You can also get registered as a donor to help peoples. </p>
                    </div>
                    <div class="row gy-4">
                        <div class="col-lg-12">
                            <div class="about-item">
                                <div class="">
                                    </div>
                                <!-- <div class="about-item__icon">
                                    <i class="las la-shield-alt"></i></div> -->
                                <div class="about-item__content">
                                    <h4 class="about-item__title">All Data is Secured</h4>
                                    <p>Aamet consectetur adipisicing elit. Est voluptatibus accusamus nam labore, quam a
                                        quo. Quibusdam est voluptatibus animi quia.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="about-item">
                                <div class="">
                                    </i></div>
                                <!-- <div class="about-item__icon">
                                    <i class="las la-compass"></i></div> -->
                                <div class="about-item__content">
                                    <h4 class="about-item__title">Always Free</h4>
                                    <p>Aamet consectetur adipisicing elit. Est voluptatibus accusamus nam labore, quam a
                                        quo. Quibusdam est voluptatibus animi quia.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="about-item">
                                <div class="">
                                    </div>
                                <!-- <div class="about-item__icon">
                                    <i class="las la-magic"></i></div> -->
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
                        <!-- <p class="mt-2">Dolor sit amet, consectetur adipisicing elit. Dignissimos soluta est qui totam
                            expedita eaque, deleniti quidem sequi magni iure nulla corporis.</p> -->
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
                            <p class="fs--14px text-white">Blood Group : <span class="text--base">({{$row->blood_group}})</span><br>
                                Email : <span class="text--base">({{$row->email}})</span><br>
                                Phone : <span class="text--base">({{$row->phone}})</span><br>
                                City : <span class="text--base">({{$row->city}})</span><br>
                            </p>

                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </section>
    <!-- <section class="pt-100 pb-100 bg_img dark--overlay overflow-hidden"
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
    </section> -->

    <section class="pt-100 pb-100 border-top  position-relative z-index-2 overflow-hidden">
        <div class="bottom-el-bg">
            <img src="{{asset('front/assets/images/frontend/latest_donor/6107e3696253d1627906921.png')}}" alt="image">
        </div>

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-header text-center">
                        <h2 class="section-title">Latest Donor</h2>
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
                            <p class="text-white fs--14px">
                                Blood Group : ({{$row->blood_group}})<br>
                                Email : {{$row->email}}<br>
                                Phone : {{$row->phone}}<br>
                                City : {{$row->city}}<br>

                            </p>
                            @php
                                $count = \App\Models\DoneeRequest::where('donor_id', '=', $row->id)->where('status', '=', '1')->count();
                            @endphp
                            <span class="donor-card__amount mt-1"><i class="las la-tint"></i> {{$count}} Times</span>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </section>

</div>
@endsection
