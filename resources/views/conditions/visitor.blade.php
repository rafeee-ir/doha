@extends('layouts.app')

@section('title','شرایط شرکت بازدیدکنندگان')
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
                                ...
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
            </div>
        </div>
    </section>
    <!--/ End Contact -->

@endsection
