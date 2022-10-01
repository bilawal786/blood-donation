@extends('layouts.frontend')
@section('content')

    <div class="main-wrapper">
    <section class="pt-100 pb-100 position-relative z-index shade--bg">
            <div class="container" style="width: 100%;padding: 5px;display: flex;flex-wrap: wrap;justify-content: center;">
                <div class="contact-wrapper" style="width: 60%">
                    <div class="row">
                        <div class="col-lg-12">

                            <form method="POST" action="{{route('login')}}"  class="contact-form">
                               @csrf
                                                       <div class="row">
                                    <div class="form-group col-xl-12">
                                        <label>Email <sup class="text--danger">*</sup></label>
                                        <input type="email" name="email" placeholder="Email address" value="" class="form--control" required="">
                                    </div>
                                    <div class="form-group col-xl-12">
                                        <label>Password <sup class="text--danger">*</sup></label>
                                        <input type="password" name="password" placeholder="**********" value="" class="form--control" required="">
                                    </div>

                                    <div class="col-lg-12">
                                        <button type="submit" class="btn btn--base w-100">LOGIN</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
