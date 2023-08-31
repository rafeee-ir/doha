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

                                <div class="row my-5">
                                    <div class="col-md-4">
                                        <div class="d-grid gap-2">
                                            <a class="btn btn-success" type="button" href="{{url('storage/downloads/expo/expo2023-overview.pdf')}}" target="_blank">دانلود کاتالوگ توضیحات</a>
                                            <a class="btn btn-success" type="button" href="{{url('storage/downloads/expo/expo2023-benefits.pdf')}}" target="_blank">دانلود کاتالوگ مزایای اکسپو</a>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="d-grid gap-2">
                                            <a class="btn btn-info" type="button" href="{{url('storage/downloads/expo/pavilion-pack.pdf')}}" target="_blank">پکیج غرفه نمایشگاهی در پاویون</a>
                                            <a class="btn btn-secondary" type="button" href="{{url('storage/downloads/expo/pavilion-pack.pdf')}}" target="_blank">پکیج غرفه فروشگاهی در پاویون</a>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="d-grid gap-2">
                                            <a class="btn btn-secondary" type="button" href="{{url('storage/downloads/expo/shop-pack.pdf')}}" target="_blank">پکیج غرفه فروشگاهی در محوطه</a>
                                            <a class="btn btn-secondary" type="button" href="{{url('storage/downloads/expo/fandb-pack.pdf')}}" target="_blank">پکیج غرفه رستوران</a>
                                        </div>
                                    </div>
                                </div>
                                    <p class="pt-3" style="font-size: 1.1rem">
                                        دفتر ترویج تجارت با همکاری شرکت هفت اقلیم پس از کسب مجوز برگزاری  پاویون جمهوری اسلامی ایران در اکسپوی کشاورزی مدرن و باغبانی 2023 قطر طبق سند شماره 1402/320/2189 در تاریخ ۳۱/۰۴/۱۴۰۲ از سوی سازمان توسعه تجارت ایران بصورت رسمی عهده دار اجرای پاویون ایران گردیده ‌است.
                                    </p>
                                    <p class="pt-3" style="font-size: 1.1rem">
                                        شعار اکسپو ۲۰۲۳ قطر صحرا سبز، محیط زیست بهتر انتخاب شده است. قطر تلاش می‌کند توجه جهانی را به تامین غذای پایدار برای مردم جهان جلب کند. موضوع سبزکردن بیابان‌ها، جلوگیری از جنگل‌زدایی و همچنین مقابله با گرمایش زمین و استفاده از فناوری‌های نوین برای مراقبت از منابع طبیعی کره زمین موضوعاتی هستند که با حمایت‌های دولت قطر در این اکسپو مورد توجه قرار می‌گیرند. همچنین طبق اعلام رسمی ستاد اکسپوی قطر ۳ میلیون بازدیدکننده از ۸۰ کشور دنیا در مدت ۶ ماه از این رویداد بین‌الملی بازدید خواهند کرد.
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
