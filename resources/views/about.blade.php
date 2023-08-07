@extends('layouts.app')

@section('title','About us')
@section('content')
    <!-- Start Contact -->
    <section id="contact-us" class="contact-us section mt-5">
        <div class="container">
                <div class="row">

                    <div class="col-lg-8 col-12">
                        <div class="form-main">
                            <div class="title">
                                <h4>اکسپو 2023 قطر</h4>
                                <h1>پاویون جمهوری اسلامی ایران</h1>
                                <h6>کشاورزی مدرن و باغبانی</h6>

                                    <p class="pt-3" style="font-size: 1.1rem">
                                        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.
                                    </p>
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
