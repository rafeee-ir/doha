@extends('layouts.app')

@section('title','شرایط شرکت در پاویون')
@section('content')
    <!-- Start Contact -->
    <section id="contact-us" class="contact-us section mt-5">
        <div class="container">
                <div class="row">

                    <div class="col-lg-8 col-12">
                        <div class="form-main">
                            <div class="title">
                                <h4>اکسپو 2023 قطر</h4>
                                <h1>شرایط اجاره غرفه در پاویون</h1>
                                <h6>کشاورزی مدرن و باغبانی</h6>
                                <p style="font-size: 1.1rem">

                                </p>
                                <p style="font-size: 1.1rem">
                                    جهت دریافت اطلاعات بیشتر با ما در تماس باشید
                                </p>
                                <a href="{{url('contact')}}" class="btn btn-lg btn-dark">تماس با ما</a>

                                </div>

                        </div>
                    </div>
                    <div class="col-lg-4">
                        <img src="{{url('images/more-about.png')}}" alt="">
                    </div>
{{--                    <div class="col-lg-4 col-12">--}}
{{--                        <div class="single-head">--}}
{{--                            <div class="single-info">--}}
{{--                                <i class="fa fa-phone"></i>--}}
{{--                                <h4 class="title">Call us Now:</h4>--}}
{{--                                <ul>--}}
{{--                                    <li>Soon</li>--}}
{{--                                    <li>+522 672-452-1120</li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                            <div class="single-info">--}}
{{--                                <i class="fa fa-envelope-open"></i>--}}
{{--                                <h4 class="title">Email:</h4>--}}
{{--                                <ul>--}}
{{--                                    <li><a href="mailto:info@exportaworld.com">info@exportaworld.com</a></li>--}}
{{--                                    <li><a href="mailto:sales@exportaworld.com">sales@exportaworld.com</a></li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                            <div class="single-info">--}}
{{--                                <i class="fa fa-location-arrow"></i>--}}
{{--                                <h4 class="title">Our Address:</h4>--}}
{{--                                <ul>--}}
{{--                                    <li>3 Jacinth Court, Huddersfield, West Yorkshire, HD2 1DT</li>--}}
{{--                                </ul>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                </div>
        </div>
    </section>
    <!--/ End Contact -->

    {{--    <!-- Map Section -->--}}
    {{--    <div class="map-section">--}}
    {{--        <div id="myMap"></div>--}}
    {{--    </div>--}}
    {{--    <!--/ End Map Section -->--}}

    <!-- Start Shop Newsletter  -->
{{--    <section class="shop-newsletter section">--}}
{{--        <div class="container">--}}
{{--            <div class="inner-top">--}}
{{--                <div class="row">--}}
{{--                    <div class="col-lg-8 offset-lg-2 col-12">--}}
{{--                        <!-- Start Newsletter Inner -->--}}
{{--                        <div class="inner">--}}
{{--                            <h4>Newsletter</h4>--}}
{{--                            <p> Subscribe to our newsletter and get <span>10%</span> off your first purchase</p>--}}
{{--                            <form action="mail/mail.php" method="get" target="_blank" class="newsletter-inner">--}}
{{--                                <input name="EMAIL" placeholder="Your email address" required="" type="email">--}}
{{--                                <button class="btn">Subscribe</button>--}}
{{--                            </form>--}}
{{--                        </div>--}}
{{--                        <!-- End Newsletter Inner -->--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
    <!-- End Shop Newsletter -->
@endsection
