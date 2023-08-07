@extends('layouts.app')

@section('content')
{{--    <div class="col-12">--}}
{{--        <h1 class="text-center">پاویون رسمی جمهوری اسلامی ایران در اکسپو 2023 قطر</h1>--}}
{{--    </div>--}}
    <div class="container-fluid header-home hvr-float">

    </div>

    <section class="container my-5">

    </section>
    <section class="container my-5">
        <div class="row bg-light mx-4">
            <div class="col-12 m-5">
                <h1 class="text-center">پاویون رسمی جمهوری اسلامی ایران در اکسپو 2023 قطر</h1>
            </div>
            <div class="col-12">
                <h2>آخرین اخبار اکسپو 2023</h2>
                <p class="subheader">
                    جدیدترین داستان ها و اتفاقات را از اکوسیستم اکسپو قطر به شما اطلاع رسانی می کنیم
                </p>
            </div>
            <div class="row row-cols-1 row-cols-md-3 g-4">
{{--                <div class="col p-md-4">--}}

                    @forelse($posts as $post)
                        <div class="card border-0 p-5">

                            <div class="hvr-shrink">
                                <a href="{{url('blog',$post->slug)}}">
                                    <img src="@if(isset($post->image)) {{asset('storage/uploads/posts/'.$post->image)}} @else https://placehold.co/480x270?text={{$post->title}} @endif" class="card-img-top border-radius object-fit-cover" alt="">
                                </a>
                            </div>
                            <div class="card-body mt-4">
                                <a href="{{url('blog',$post->slug)}}" class="text-decoration-none text-dark">
                                <h5 class="card-title">{{$post->title}}</h5>
                                </a>
                                <p class="card-text">{{strip_tags(Str::limit($post->content,70))}}</p>
                            </div>
                        </div>
                    @empty
                        <div class="card h-100 border-0">
                            <div class="card-body mt-4">
                                <p class="card-text">هیچ پستی یافت نشد</p>
                            </div>
                        </div>
                    @endforelse

{{--                </div>--}}
{{----}}
            </div>
        </div>

    </section>


    <section class="container-fluid my-5 bg-white py-5">
        <div class="container">
            <div class="row mt-5">
                <div class="col-md-1"></div>
                <div class="col-md-3">
                    <h5>درباره اکسپو 2023 قطر
                    </h5>
                    <h2>بیابان سبز، محیط زیست بهتر</h2>
                    <a href="{{url('about-expo')}}" class="btn btn-lg btn-dark">معرفی بیشتر</a>
                </div>
                <div class="col-md-7">
                    <p>
                        در زمان‌های دور سبزکردن بیابان یک چالش بزرگ بود. امروزه سبزکردن بیابان امکان‌پذیر است. برای حل کردن این چالش باید سریعا دست به کار شد چراکه مشکلات جهانی مربوط به آب، انرژی و تهدید غذایی غیرقابل چشم‌پوشی هستند.
                    </p>
                    <p>
                        فناوری‌هایی که کاشت پایدار درختان و گیاهان را در سرزمین‌های خشک و بیابانی میسر میکنند اهمیت بسیار زیادی در کاهش مشکلات بیابان‌زایی در سراسر جهان دارند.
                    </p>

                </div>
                <div class="col-md-1"></div>
                <div class="col-md-1"></div>

                <div class="col-10">
                    <img src="{{url('images/future-img-1.png')}}" alt="" style="height: 500px; border: green solid 1px; border-radius: 30px; width: 100%">

                </div>
                <div class="col-md-1"></div>

            </div>
        </div>
    </section>

    <section class="container-fluid my-5 py-5">

        <div class="container">
        <div class="row mx-4">
            <div class="col-12">
{{--                <h2>ایران در اکسپو 2023 قطر</h2>--}}
{{--                <p class="subheader">--}}
{{--                    شرکت ها و موسساتی که فرصت حضور در اکسپو 2023 قطر را پیدا کردند--}}
{{--                </p>--}}
            </div>
            <div class="col-12">
               <p class="text-center">جای شما اینجا خالیست</p>
            </div>
        </div>

        </div>

    </section>
    <section class="container-fluid my-5 bg-light py-5">

        <div class="container">
        <div class="row mx-4">
            <div class="col-12">
{{--                <h2>محصولات عرضه شده ایران در اکسپو 2023 قطر</h2>--}}
{{--                <p class="subheader">--}}
{{--                    محصولاتی که در اکسپو 2023 قطر در پاویون جمهوری اسلامی ایران عرضه شده است--}}
{{--                </p>--}}
            </div>
        </div>

        </div>

    </section>
@endsection
@section('style')
{{--    <link rel="stylesheet" href="css/owl.carousel.min.css">--}}
@endsection
@section('script')
{{--    <script src="js/owl.carousel.min.js"></script>--}}
{{--    <script>--}}
{{--        import $ from 'jquery/dist/jquery';--}}
{{--        import 'owl.carousel/dist/owl.carousel';--}}

{{--        $('.owl-carousel').owlCarousel({--}}
{{--            loop:true,--}}
{{--            margin:10,--}}
{{--            nav:true,--}}
{{--            responsive:{--}}
{{--                0:{--}}
{{--                    items:1--}}
{{--                },--}}
{{--                600:{--}}
{{--                    items:3--}}
{{--                },--}}
{{--                1000:{--}}
{{--                    items:5--}}
{{--                }--}}
{{--            }--}}
{{--        })--}}
{{--    </script>--}}
@endsection
