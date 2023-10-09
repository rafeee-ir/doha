@extends('layouts.app')

@section('title','تماس با ما')
@section('content')

    <section id="contact-us" class="contact-us section mt-5">
        <div class="container">
            <div class="row">

                <div class="col-lg-8 col-12">
                    <div class="form-main">
                        <div class="title">
                            <h4></h4>
                            <h1>تماس با ما</h1>
                            <h6>پاویون جمهوری اسلامی ایران در اکسپو 2023 قطر</h6>

                            <p class="pt-3" style="font-size: 1.1rem">
                                لطفا جهت تماس با ما از یکی از راه های زیر اقدام نمایید.
                            </p>
                            <div class="row g-3">
                                <div class="col-12">
                                    <div class="card ">
                                        {{--                                        <div class="card-header">اطلاعات تماس در قطر</div>--}}
                                        <div class="card-body">
                                            <div><span>آدرس وبسایت رسمی</span></div>
                                            <div><span>QATAREXPO.IR</span></div>
                                            <br>
                                            <div><span>پست الکترونیک</span></div>
                                            <div><span>info@qatarexpo.ir</span></div>
                                            <br>
                                            @include('social')

                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="card-header">اطلاعات تماس در ایران</div>
                                        <div class="card-body">
                                            <div><span>آدرس دفتر مرکزی پاویون</span></div>
                                            <div><span>تهران - نمایشگاه بین المللی تهران - سالن 62</span></div>
                                            <div class=""><a href="https://goo.gl/maps/7xg8QQ4fDkxdxvMD7" target="_blank" class="btn btn-sm btn-dark">نمایش روی نقشه</a></div>
                                            <br>
                                            <div><span>تلفن تماس</span></div>
                                            <div><a href="tel:+989370161675"><span class="text-secondary">0098-</span><span>9370161675</span></a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="card-header">اطلاعات تماس در قطر</div>
                                        <div class="card-body">
                                            <div><span>آدرس دفتر مرکزی قطر</span></div>
                                            <div><span>قطر - دوحه - خیابان جوعان - هتل گرندلوکس طبقه اول</span></div>
                                            <div class=""><a href="https://goo.gl/maps/az7ohnuB7rrbFFe3A" target="_blank" class="btn btn-sm btn-dark">نمایش روی نقشه</a></div>
                                            <br>
                                            <div><span>تلفن تماس</span></div>
                                            <div><span class="text-secondary">00974-</span><span>33036002</span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card">
                                        <div class="card-header">واحد بازاریابی و فروش</div>
                                        <div class="card-body">

                                            <span>پست الکترونیک</span> | <span>sales@qatarexpo.ir</span>
                                            <br>
{{--                                            <span>تلفن تماس</span> | <span>0215555555</span>--}}

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card">
                                        <div class="card-header">واحد خدمات حمل و نقل و هتلینگ</div>
                                        <div class="card-body">

                                            <span>پست الکترونیک</span> | <span>es@qatarexpo.ir</span>
                                            <br>
{{--                                            <span>تلفن تماس</span> | <span>0215555555</span>--}}

                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card">
                                        <div class="card-header">واحد امور مشتریان</div>
                                        <div class="card-body">

                                            <span>پست الکترونیک</span> | <span>crm@qatarexpo.ir</span>
                                            <br>
{{--                                            <span>تلفن تماس</span> | <span>0215555555</span>--}}

                                        </div>
                                    </div>
                                </div>
                                </div>
                                @include('contact-form')
                            </div>

                        </div>

                    </div>
                </div>
                <div class="col-lg-4">
                    <img src="{{url('images/more-about.png')}}" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- Start Contact -->
{{--    <section id="contact-us" class="contact-us section">--}}
{{--        <div class="container">--}}
{{--            <div class="contact-head">--}}
{{--                <div class="row">--}}
{{--                    <div class="col-lg-8 col-12">--}}
{{--                        <div class="form-main">--}}
{{--                            <div class="title">--}}
{{--                                <h4>Get in touch</h4>--}}
{{--                                <h3>Write us a message</h3>--}}
{{--                            </div>--}}
{{--                            <form class="form" action="{{route('contact.store')}}" method="post">--}}
{{--                                @csrf--}}
{{--                                @include('form-alerts')--}}
{{--                                <input type="hidden" name="url" value="{{url()->current()}}">--}}

{{--                            @auth--}}
{{--                                    <input type="hidden" name="user_id" value="{{Auth::id()}}">--}}
{{--                                @endauth                                <div class="row">--}}
{{--                                    <div class="col-lg-6 col-12">--}}
{{--                                        <div class="form-group">--}}
{{--                                            <label>Your Name</label>--}}
{{--                                            <input class="@if($errors->has('name')) border border-danger @endif" name="name" type="text" placeholder="" value="{{old('name')}}">--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-lg-6 col-12">--}}
{{--                                        <div class="form-group">--}}
{{--                                            <label>Your Subjects</label>--}}
{{--                                            <input class="@if($errors->has('subject')) border border-danger @endif" name="subject" type="text" placeholder="" value="{{old('subject')}}">--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-lg-6 col-12">--}}
{{--                                        <div class="form-group">--}}
{{--                                            <label>Your Email<span>*</span></label>--}}
{{--                                            <input class="@if($errors->has('email')) border border-danger @endif" name="email" type="email" placeholder="" value="{{old('email')}}">--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-lg-6 col-12">--}}
{{--                                        <div class="form-group">--}}
{{--                                            <label>Your Phone</label>--}}
{{--                                            <input class="@if($errors->has('mobile')) border border-danger @endif" name="mobile" type="text" placeholder="" value="{{old('mobile')}}">--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-12">--}}
{{--                                        <div class="form-group message">--}}
{{--                                            <label>your message<span>*</span></label>--}}
{{--                                            <textarea class="@if($errors->has('message')) border border-danger @endif" name="message" placeholder="">{{old('message')}}</textarea>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                    <div class="col-12">--}}
{{--                                        <div class="form-group button">--}}
{{--                                            <button type="submit" class="btn ">Send Message</button>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </form>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-lg-4 col-12">--}}
{{--                        <div class="single-head">--}}
{{--                            <div class="single-info">--}}
{{--                                <i class="fa fa-phone"></i>--}}
{{--                                <h4 class="title">Call us Now:</h4>--}}
{{--                                <ul>--}}
{{--                                    <li>Soon</li>--}}
{{--                                                                        <li>+522 672-452-1120</li>--}}
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
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
    <!--/ End Contact -->
{{--@include('newsletter')--}}
@endsection
