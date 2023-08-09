@extends('layouts.app')

@section('title','شرایط شرکت بعنوان فروشگاه')
@section('content')
    <!-- Start Contact -->
    <section id="contact-us" class="contact-us section mt-5">
        <div class="container">
            <div class="row">

                <div class="col-lg-8 col-12">
                    <div class="form-main">
                        <div class="title">
                            <h4>اکسپو 2023 قطر</h4>
                            <h1>پیش ثبت نام فروش محصول در اکسپو</h1>
                            <h6>کشاورزی مدرن و باغبانی</h6>

                            <p>
                                یکی از جاذبه‌های اکسپو قطر بازارچه‌های مخصوص فروش محصولات فرهنگی، صنایع دستی و محصولات خوراکی است. هر کشوری این امکان را خواهد داشت تا ارزش‌ها و سنت‌های خود را از طریق فروش و تعامل با بازدیدکنندگان از سرتاسر دنیا به نمایش بگذارد.
                            </p>
                            <p>
                                پاویون جمهوری اسلامی ایران در اکسپو ۲۰۲۳ قطر این امکان را برای شما فراهم ساخته است تا با تکمیل فرم زیر به راحتی اقدام به اجاره فروشگاه در بازارچه‌های اکسپو کنید.
                            </p>
                            <p>
                                همکاران ما پس از بررسی محصولات شما و ظرفیت‌های خالی با شما ارتباط خواهند گرفت.
                            </p>
                            @include('pre-register-form')

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
