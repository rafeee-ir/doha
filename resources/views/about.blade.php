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
                                        دفتر ترویج تجارت با همکاری شرکت هفت اقلیم با کسب مجوز برگزاری پاویون جمهوری اسلامی ایران در اکسپو 2023 قطر، بصورت رسمی عهده دار این مسئولیت از سوی سازمان توسعه تجارت ایران گردید. مجوز برگزاری نمایشگاه طبق سند شماره 1402/320/2189 که در تاریخ 1402/04/31 صادر شده است.
                                    </p>
                                    <p class="pt-3" style="font-size: 1.1rem">
                                        در متن این سند آمده است:
                                    </p>
                                    <p class="pt-3" style="font-size: 1.1rem">
                                        به استناد بند 31 ماده 5 اساسنامه سازمان توسعه تجارت ایران بدینوسیله موافقت سازمان توسعه تجارت ایران با برگزاری پاویون جمهوری اسلامی ایران در نمایشگاه بین المللی اکسپو 2023 قطر-دوحه مهرماه 1402 توسط دفتر ترویج تجارت با همکاری شرکت خدمات مسافرت هوایی، گردشگری و نمایشگاهی هفت اقلیم و با رعایت ضوابط برگزاری نمایشگاه ها مندرج در این مجوز ارائه می گردد.
                                    </p>
                                    <p class="pt-3" style="font-size: 1.1rem">
                                        شرکت هفت اقلیم، نماینده رسمی شرکت های گلف اینترنشنال قطر، دیسکاور قطر و قطر ایرویز در ایران ز سال 2017 فعالیت رسمی خود را در دوحه آغاز نموده است. این شرکت در سال های اخیر توانسته با ظرفیت های متعدد در حوزه های نمایشگاهی ، بازرگانی، هتلداری، گردشگری، حمل و نقل و لجستیک بیشترین تعداد هیئت های تجاری و نمایشگاهی را در کشور قطر برگزار نماید و میزبان خوبی برای بازرگانان و تولیدکنندگان ایران باشد و همچنین در سال 2022 به نمایندگی از سوی فدراسیون فوتبال جمهوری اسلامی ایران توانسته است میزبان بیش از 3000 نفر از هموطنان عزیزمان در جام جهانی قطر باشد .
                                    </p>
                                    <p class="pt-3" style="font-size: 1.1rem">
                                        شرکت هفت اقلیم در این سالها توانسته است به عنوان تنها شرکت ایرانی فعال در حوزه توریسم و نمایشگاهی در بازار قطر، همواره ارتباطات خوب خود را در سطح دولت و بخش خصوصی قطر برقرار نماید و همیشه مورد تقدیر مسئولین قطری نیز قرار گرفته است.
                                    </p>
                                    <p class="pt-3" style="font-size: 1.1rem">
                                        شایان ذکر است هفت اقلیم عضو اتاق بازرگانی ایران و قطر می باشد و همچنین توانسته است به عنوان صادرکننده نمونه انتخاب گردد.
                                    </p>
                                <p style="font-size: 1.1rem">
                                    جهت دریافت اطلاعات بیشتر با ما در تماس باشید
                                </p>
                                <a href="{{url('contact')}}" class="btn btn-lg btn-dark">تماس با ما</a>

                                </div>
                            <div class="text-center mt-5 pt-5" id="mojavez">
                                <img src="{{url('images/mojavez.jpg')}}" title="مجوز برگزاری نمایشگاه" class="img-fluid">
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
