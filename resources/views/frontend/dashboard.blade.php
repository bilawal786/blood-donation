@extends('layouts.frontend')
@section('content')
    <style>
        .nav-pills .nav-link.active, .nav-pills .show > .nav-link {
            color: #fff;
            background-color: #fb3640 !important;
            border-radius: 0px;
        }

        .contact-form {
            padding: 40px;
            padding-top: 0px;
        }

        .tab-content {
            width: 100%;
            border: 2px solid red;
            margin: 0px;
            padding: 10px;
        }

        @media only screen and (max-width: 600px) {
            #v-pills-tab {
                height: 250px !important;
            }

            .mw100 {
                margin: 0px !important;
            }
        }
    </style>
    <div class="container">
        <div class="row mw100" style="margin: 20px;">
            <h3 style="text-align: center; font-style: italic; color: red">
                @if($user->role == 1)
                    WELCOME IN DONEE DASHBOARD
                @elseif($user->role == 2)
                    WELCOME IN DONAR DASHBOARD
                @endif
            </h3>
            @if($user->status == 1)
                <h3 style="text-align: center; font-style: italic; color: red">
                    YOUR ACCOUNT IS BLOCKED BY ADMIN
                </h3>
            @else
                <div class="col-lg-12" style="margin-top: 20px">
                    <div class=>
                        <div class="row">
                            <div class="col-md-4">
                                <div style="height: 500px;border: 2px solid red;" class="nav flex-column nav-pills"
                                     id="v-pills-tab" role="tablist"
                                     aria-orientation="vertical">
                                    <button class="nav-link active" id="v-pills-home-tab"
                                            data-bs-toggle="pill"
                                            data-bs-target="#v-pills-home" role="tab" aria-controls="v-pills-home"
                                            aria-selected="true">Profile
                                    </button>

                                    <button class="nav-link" id="v-pills-profile-tab"
                                            data-bs-toggle="pill"
                                            data-bs-target="#v-pills-profile" type="button" role="tab"
                                            aria-controls="v-pills-profile" aria-selected="false">My Requests
                                    </button>
                                    @if($user->role == 2)
                                        <button class="nav-link" id="v-pills-profilee-tab"
                                                data-bs-toggle="pill"
                                                data-bs-target="#v-pills-profilee" type="button" role="tab"
                                                aria-controls="v-pills-profilee" aria-selected="false">Blood Donate
                                            Requests
                                        </button>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="tab-content" id="v-pills-tabContent">
                                    <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                                         aria-labelledby="v-pills-home-tab">

                                        <form method="POST" action="{{route('user.update.profile')}}"
                                              class="contact-form bg-white  rounded-3 position-relative"
                                              enctype="multipart/form-data">
                                            @csrf
                                            <div class="row">
                                                <div class="form-group col-sm-6">
                                                    <label for="name">Name <sup class="text--danger">*</sup></label>
                                                    <input type="text" name="name" id="name" value="{{$user->name}}"
                                                           placeholder="Full name" class="form--control" maxlength="80"
                                                           required="">

                                                </div>
                                                <div class="form-group col-sm-6">
                                                    <label for="email">Email <sup class="text--danger">*</sup></label>
                                                    <input type="email" name="email" id="email" readonly
                                                           value="{{$user->email}}"
                                                           placeholder="Enter Email" class="form--control"
                                                           maxlength="60">
                                                </div>
                                                <div class="form-group col-sm-6">
                                                    <label for="phone">Phone <sup class="text--danger">*</sup></label>
                                                    <input type="text" name="phone" id="phone" value="{{$user->phone}}"
                                                           placeholder="Enter Phone" class="form--control"
                                                           maxlength="40">
                                                </div>
                                                <div class="form-group col-sm-6">
                                                    <label for="city">City <sup class="text--danger">*</sup></label>
                                                    <select name="city" class="select" id="Location">
                                                        <option value="" disabled selected>Select The City</option>
                                                        <option value="Islamabad">Islamabad</option>
                                                        <option value="" disabled>Punjab Cities</option>
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
                                                        <option value="" disabled>Sindh Cities</option>
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
                                                        <option value="" disabled>Khyber Cities</option>
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
                                                        <option value="" disabled>Balochistan Cities</option>
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
                                                <div class="form-group col-sm-6">
                                                    <label for="address">Address <sup
                                                            class="text--danger">*</sup></label>
                                                    <input type="text" name="address" id="address"
                                                           value="{{$user->address}}"
                                                           placeholder="Enter Address" class="form--control"
                                                           maxlength="255">
                                                </div>
                                                @if($user->role==2)
                                                    <div class="form-group col-sm-6" id="dob">
                                                        <label for="date_birth">Date Of Birth <sup
                                                                class="text--danger">*</sup></label>
                                                        <input type="date" id="date_birth" name="dob"
                                                               value="{{$user->dob}}"
                                                               data-language="en" class="form--control datepicker-here"
                                                               maxlength="255">
                                                    </div>
                                                    <div class="form-group col-sm-6" id="s_time">
                                                        <label for="religion"> Starting Time <sup
                                                                class="text--danger">*</sup></label>
                                                        <input type="time" name="s_time" id="s_time"
                                                               value="{{$user->s_time}}"
                                                               class="form--control">
                                                    </div>
                                                    <div class="form-group col-sm-6" id="e_time">
                                                        <label for="religion"> Ending Time Time <sup
                                                                class="text--danger">*</sup></label>
                                                        <input type="time" name="e_time" id="e_time"
                                                               value="{{$user->e_time}}"
                                                               class="form--control">
                                                    </div>

                                                @endif

                                                <div class="form-group col-sm-6">
                                                    <label for="file">Image <sup class="text--danger">*</sup></label>
                                                    <input type="file" id="file" name="img"
                                                           class="form--control custom-file-upload">
                                                </div>
                                                <div class="form-group col-sm-6">
                                                    <img src="{{asset($user->img)}}">
                                                </div>
                                                <div class="form-group col-sm-6" id="weight">
                                                    <label for="last_donate">Password <sup class="text--danger">*</sup></label>
                                                    <input type="password" name="password" id="password" value=""
                                                           data-language="en"
                                                           placeholder="Password" class="form--control datepicker-here">
                                                    @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                                    @enderror
                                                </div>
                                                <div class="form-group col-lg-12">
                                                    <label for="about_details">About You <sup
                                                            class="text--danger">*</sup></label>
                                                    <textarea name="about" id="about_details"
                                                              placeholder="Enter Details"
                                                              class="form--control">{{$user->about}}</textarea>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <button type="submit" class="btn btn--base w-100" id="demo">Update
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="tab-pane fade" id="v-pills-profile" role="tabpanel"
                                         aria-labelledby="v-pills-profile-tab">
                                        <div class="myaccount-orders" style="width: 100%;">
                                            <h4 class="small-title" style="margin: 10px;"> My Requests </h4>
                                            <div class="table-responsive">
                                                <table class="table table-bordered table-hover">
                                                    <tbody>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Donor Name</th>
                                                        <th>Created at</th>
                                                        <th>Action</th>
                                                    </tr>
                                                    @foreach($donneRequest as $key=>$row)
                                                        <tr>
                                                            <td><a class="account-order-id"
                                                                   href="javascript:void(0)">{{$key+1}}</a></td>
                                                            <td>{{$row->donor->name??"Deleted"}}</td>
                                                            <td>{{$row->created_at->format('d-m-y')}}</td>
                                                            @if($row->status == 1)
                                                                <td>
                                                                    <a href="{{route('donner.accept',['id'=>$row->id,'status'=>3])}}"
                                                                       class="btn btn-danger"><span>Confirm</span></a>
                                                                    @if($row->status == '1')
                                                                        <a href="{{route('donner.accept',['id'=>$row->id,'status'=>4])}}"
                                                                           class="btn btn-success"><span>Reject</span></a>
                                                                    @endif
                                                                </td>
                                                            @elseif($row->status == 2)
                                                                <td><span
                                                                        class="badge badge-danger">Donor Reject Your request</span>
                                                                </td>

                                                            @elseif($row->status == 4)
                                                                <td><span
                                                                        class="badge badge-danger">You dont get blood on this request</span>
                                                                </td>

                                                            @elseif($row->status == 3)
                                                                <td><span
                                                                        class="badge badge-success">You get the blood on this request</span>
                                                                </td>
                                                            @else
                                                                <td><span
                                                                        class="badge badge-warning">Waiting for donor response</span>
                                                                </td>
                                                            @endif
                                                        </tr>
                                                    @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="v-pills-profilee" role="tabpanel"
                                         aria-labelledby="v-pills-profile-tab">
                                        <div class="myaccount-orders" style="width: 100%;">
                                            <h4 class="small-title" style="margin: 10px;"> Blood Donate Requests </h4>
                                            <div class="table-responsive">
                                                <table class="table table-bordered table-hover">
                                                    <tbody>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>Donee Name</th>
                                                        <th>Status</th>
                                                        <th>Created at</th>
                                                    </tr>
                                                    @foreach($donarRequest as $key=>$row)
                                                            <tr>
                                                                <td><a class="account-order-id"
                                                                       href="javascript:void(0)">{{$key+1}}</a></td>
                                                                <td>{{$row->donee->name??"Deleted"}}</td>
                                                                @if($row->status == 0)
                                                                    <td>
                                                                        <a href="{{route('donner.accept',['id'=>$row->id,'status'=>1])}}"
                                                                           class="btn btn-success"><span>Accept</span></a>
                                                                        <a href="{{route('donner.accept',['id'=>$row->id,'status'=>2])}}"
                                                                           class="btn btn-danger"><span>Reject</span></a>
                                                                    </td>
                                                                @elseif($row->status == 1)
                                                                    <td><span
                                                                            class="badge badge-success">Waiting for donee response</span>
                                                                    </td>
                                                                @elseif($row->status == 2)
                                                                    <td><span
                                                                            class="badge badge-danger">You reject this request</span>
                                                                    </td>
                                                                @elseif($row->status == 4)
                                                                    <td><span
                                                                            class="badge badge-danger">You did't donate the blood on this request</span>
                                                                    </td>
                                                                @elseif($row->status == 3)
                                                                    <td><span
                                                                            class="badge badge-success">You donate the blood on this request</span>
                                                                    </td>
                                                                @else
                                                                    <td><span
                                                                            class="badge badge-warning">Waiting for Donee response</span>
                                                                    </td>
                                                                @endif
                                                                <td>{{$row->created_at->format('d-m-y')}}</td>
                                                            </tr>
                                                    @endforeach
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
            @endif
        </div>
    </div>
@endsection
<script>
    import Specs from "../../../public/vendor/morrisjs/spec/specs.html";

    export default {
        components: {Specs}
    }
</script>
