@extends('layouts.frontend')
@section('content')
    <section class="pt-100 pb-100 position-relative z-index section--bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <form method="POST" action="https://script.viserlab.com/bloodlab/apply/donor/store" class="contact-form bg-white p-sm-5 p-3 rounded-3 position-relative" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="PLTOfZRSQfCu1VAToz4GCiQl3Q6t6BcqyOgvP8wx">                    <h5 class="mb-3">Personal Information</h5>
                        <div class="row mb-4">
                            <div class="form-group col-lg-6">
                                <label for="name">Name <sup class="text--danger">*</sup></label>
                                <input type="text" name="name" id="name" value="" placeholder="Full name" class="form--control" maxlength="80" required="">
                            </div>
                            <div class="form-group col-lg-6">
                                <label for="email">Email <sup class="text--danger">*</sup></label>
                                <input type="email" name="email" id="email" value="" placeholder="Enter Email" class="form--control" maxlength="60" required="">
                            </div>
                            <div class="form-group col-lg-6">
                                <label for="phone">Phone <sup class="text--danger">*</sup></label>
                                <input type="text" name="phone" id="phone" value="" placeholder="Enter Phone" class="form--control" maxlength="40" required="">
                            </div>
                            <div class="form-group col-lg-6">
                                <label for="city">City <sup class="text--danger">*</sup></label>
                                <select name="city" id="city" class="select" required="">
                                    <option value="" selected="" disabled="">Select One</option>
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
                            <div class="form-group col-lg-6">
                                <label for="location">Location <sup class="text--danger">*</sup></label>
                                <select name="location" id="location" class="select" required="">
                                    <option value="" selected="" disabled="">Select One</option>
                                </select>
                            </div>
                            <div class="form-group col-lg-6">
                                <label for="address">Address <sup class="text--danger">*</sup></label>
                                <input type="text" name="address" id="address" value="" placeholder="Enter Address" class="form--control" maxlength="255" required="">
                            </div>

                        </div>


                        <div class="row mb-4">
                            <h5 class="mb-3">Socail Links</h5>
                            <div class="form-group col-lg-3 col-sm-6">
                                <label for="facebook">Facebook Url <sup class="text--danger">*</sup></label>
                                <div class="custom-icon-field">
                                    <i class="lab la-facebook-f"></i>
                                    <input type="text" name="facebook" id="facebook" value="" placeholder="Enter Facebook Url" class="form--control" required="">
                                </div>
                            </div>
                            <div class="form-group col-lg-3 col-sm-6">
                                <label for="twitter">Twitter Url <sup class="text--danger">*</sup></label>
                                <div class="custom-icon-field">
                                    <i class="lab la-twitter"></i>
                                    <input type="text" name="twitter" id="twitter" value="" placeholder="Enter Twitter Url" class="form--control" required="">
                                </div>
                            </div>
                            <div class="form-group col-lg-3 col-sm-6">
                                <label for="linkedinIn">Linkedin Url <sup class="text--danger">*</sup></label>
                                <div class="custom-icon-field">
                                    <i class="lab la-linkedin-in"></i>
                                    <input type="text" name="linkedinIn" id="linkedinIn" value="" placeholder="Enter Linkedin Url" class="form--control" required="">
                                </div>
                            </div>
                            <div class="form-group col-lg-3 col-sm-6">
                                <label for="instagram">Instagram Url <sup class="text--danger">*</sup></label>
                                <div class="custom-icon-field">
                                    <i class="lab la-instagram"></i>
                                    <input type="text" name="instagram" id="instagram" value="" placeholder="Enter Instagram Url" class="form--control" required="">
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <h5 class="mb-3">Others Information</h5>
                            <div class="form-group col-lg-6">
                                <label for="blood_id">Blood Group <sup class="text--danger">*</sup></label>
                                <select name="blood" id="blood_id" class="select" required="">
                                    <option value="" selected="" disabled="">Select One</option>
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
                            <div class="form-group col-lg-6">
                                <label for="gender">Gender <sup class="text--danger">*</sup></label>
                                <select name="gender" id="gender" class="select" required="">
                                    <option value="" selected="" disabled="">Select One</option>
                                    <option value="1">Male</option>
                                    <option value="2">Female</option>
                                </select>
                            </div>

                            <div class="form-group col-lg-6">
                                <label for="religion">Religion <sup class="text--danger">*</sup></label>
                                <input type="text" name="religion" id="religion" value="" placeholder="Enter Religion" class="form--control" maxlength="40" required="">
                            </div>

                            <div class="form-group col-lg-6">
                                <label for="profession">Profession <sup class="text--danger">*</sup></label>
                                <input type="text" name="profession" id="profession" value="" placeholder="Enter Profession" class="form--control" maxlength="80" required="">
                            </div>

                            <div class="form-group col-lg-6">
                                <label for="donate">Total Donate <sup class="text--danger">*</sup></label>
                                <input type="number" name="donate" id="donate" value="" placeholder="Enter total blood donate" class="form--control">
                            </div>

                            <div class="form-group col-lg-6">
                                <label for="file">Image <sup class="text--danger">*</sup></label>
                                <input type="file" id="file" name="image" class="form--control custom-file-upload" required="">
                            </div>

                            <div class="form-group col-lg-6">
                                <label for="date_birth">Date Of Birth <sup class="text--danger">*</sup></label>
                                <input type="text" id="date_birth" name="birth_date" value="" data-language="en" placeholder="Enter Date Of Birth" class="form--control datepicker-here" maxlength="255" required="">
                            </div>

                            <div class="form-group col-lg-6">
                                <label for="last_donate">Last Donate <sup class="text--danger">*</sup></label>
                                <input type="text" name="last_donate" id="last_donate" value="" data-language="en" placeholder="Last Blood Donate Date" class="form--control datepicker-here">
                            </div>

                            <div class="form-group col-lg-12">
                                <label for="about_details">About You <sup class="text--danger">*</sup></label>
                                <textarea name="details" id="about_details" placeholder="Enter Details" class="form--control"></textarea>
                            </div>
                            <div class="col-lg-12">
                                <button type="submit" class="btn btn--base w-100">Apply Now</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
