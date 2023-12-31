@extends('layouts.app')

@section('title','تور تجاری اکسپو قطر')
@section('content')
    <!-- Start Contact -->
    <section id="contact-us" class="contact-us section mt-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="form-main">
                        <div class="title">
                            <h4>از قطر دیدن کنید</h4>
                            <h1>تور تجاری بازدید از اکسپو قطر 2023</h1>
                            <h6>کشاورزی مدرن و باغبانی</h6>
                        </div>
                    </div>


                    <div class="row mb-4">
                    <div class="col-lg-6">
                        <a target="_blank" href="{{url('images/tour01.jpg')}}">
                            <img src="{{url('images/tour01.jpg')}}" alt="تور بازدید اکسپو" class="img-fluid">
                        </a>
                    </div>
                    <div class="col-lg-6">
                        <a target="_blank" href="{{url('images/tour02.jpg')}}">
                            <img src="{{url('images/tour02.jpg')}}" alt="شرابط تور بازدید اکسپو" class="img-fluid">
                        </a>
                    </div>
                </div>
                </div>

                <div class="col-lg-8 col-12">
                    <div class="form-main">
                        <div class="title">



                            <div class="row">
                                <div class="col-lg-12">
                                    <a href="{{url('storage/downloads/expo/tour.pdf')}}" target="_blank" class="btn btn-success">دریافت پکیج تور PDF</a>
                                    <p class="pt-3" style="font-size: 1.1rem">
                                        پاویون جمهوری اسلامی ایران در طول برگزاری اکسپو قطر میزبان شما بازدیدکنندگان بصورت هیئت های تجاری خواهد بود. در این اکسپو به مدت شش ماه در قلب دوحه در جریان است، بیش از هشتاد کشور حضور داشته و تکنولوژی های خود را در زمینه کشاورزی مدرن و باغبانی به نمایش گذاشته اند.
                                    </p>
                                    <p class="pt-3" style="font-size: 1.1rem">
                                        به همین منظور پکیج های ویژه ای برای تسهیل گردشگری تخصصی و بازدید از قطر برای شما در نظر گرفته شده است که می توانید بصورت فردی یا همراه با هیئت تجاری از این پکیج ها استفاده کنید.
                                    </p>
                                    <p class="pt-3" style="font-size: 1.1rem">
                                        شما می توانید با انتخاب هر یک از پکیج های تور بازدید از اکسپو در این رویداد جهانی که در خاورمیانه در جریان است، حضور داشته باشید.
                                    </p>
                                    <p class="pt-3" style="font-size: 1.1rem">
                                        همچنین دارندگان کارت بازرگانی می توانند از مشوق های ویژه ای برخوردار شوند و بخشی از مبلغ سفر خود را بعد از انجام سفر باز پس گیرند.
                                    </p>
                                    <p class="pt-3 text-danger" style="font-size: 1.1rem">
                                        هرگونه استفاده از نام و لوگوی اکسپو قطر در طول برگزاری نمایشگاه مشمول پیگرد قانونی خواهد بود.
                                    </p>


                                    <div class="my-5" id="vendors">
                                        <h2>لیست شرکتهای مورد تایید پاویون برای فروش تور هیئت های تجاری</h2>
                                    </div>
                                    <div class="">
                                        <div class="accordion" id="agencies">
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="headingOne">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                                        شرکت خدمات مسافرتی و گردشگری هفت اقلیم
                                                    </button>
                                                </h2>
                                                <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#agencies">
                                                    <div class="accordion-body">
                                                        <div class="row align-content-center justify-content-center align-items-center">
                                                            <div class="col-md-2">
                                                                <img src="https://haft724.ir/wp-content/uploads/2021/06/logo.jpg" class="img-fluid" alt="شرکت خدمات مسافرتی و گردشگری هفت اقلیم">
                                                            </div>
                                                            <div class="col-md-10">
                                                                <h4>
                                                                    شرکت خدمات مسافرتی و گردشگری هفت اقلیم
                                                                </h4>
                                                                <h5>
                                                                    شماره تماس:
                                                                    <a href="tel=+989102229694">
                                                                        09102229694
                                                                    </a>
                                                                </h5>
                                                                <h6>
                                                                    وبسایت:
                                                                    <a href="https://haft724.ir">
                                                                        haft724.ir
                                                                    </a>
                                                                </h6>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>




                                </div>
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

@endsection
