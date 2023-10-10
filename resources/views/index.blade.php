@extends('layouts.app')

@section('content')

    <div class="container-fluid justify-content-center text-center" style="background-color: #390128">
{{--        <img class="img-fluid d-none d-md-block" src="{{url('images/banner3.jpg')}}" alt="{{ config('app.name') }}">--}}
{{--        <img class="img-fluid d-md-none w-100" src="{{url('images/mobile-top.jpg')}}" alt="{{ config('app.name') }}">--}}
    </div>

    <section class="container my-5">

    </section>
    <section class="container my-5">
        <div class="row bg-light mx-4">
{{--            <div class="col-12 m-5 d-none d-md-block">--}}
{{--                <h1 class="text-center">پاویون رسمی جمهوری اسلامی ایران در اکسپو 2023 قطر</h1>--}}
{{--            </div>--}}
            <div class="col-12">
                <h2>آخرین اخبار اکسپو 2023</h2>
                <p class="subheader d-none d-md-block">
                    جدیدترین داستان ها و اتفاقات را از اکوسیستم اکسپو قطر به شما اطلاع رسانی می کنیم
                </p>
            </div>
            <div class="row row-cols-1 row-cols-md-3 g-4">
{{--                <div class="col p-md-4">--}}

                    @forelse($posts as $post)
                        <div class="card border-0 p-md-5">

                            <div class="hvr-shrink">
                                <a href="{{url('blog',$post->slug)}}">
                                    <img src="@if(isset($post->image)) {{asset('storage/uploads/posts/'.$post->image)}} @else https://placehold.co/480x270?text={{$post->title}} @endif" class="card-img-top border-radius object-fit-cover" alt="">
                                </a>
                            </div>
                            <div class="card-body mt-4">
                                <a href="{{url('blog',$post->slug)}}" class="text-decoration-none text-dark">
                                <h5 class="card-title">{{$post->title}}</h5>
                                </a>
                                <p class="card-text  d-none d-md-block">{{strip_tags(Str::limit($post->content,70))}}</p>
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
        <div class="text-center p-5">
            <a href="{{url('blog')}}" class="btn btn-secondary btn-sm">مشاهده همه</a>
        </div>
    </section>


    <section class="container-fluid my-5 bg-white py-5">
        <div class="container">
            <div class="row mt-5">
                <div class="col-md-1"></div>
                <div class="col-md-3 pb-5">
                    <h5>درباره اکسپو 2023 قطر
                    </h5>
                    <h2>بیابان سبز، محیط زیست بهتر</h2>
                    <a href="{{url('about-expo')}}" class="btn btn-lg btn-dark">معرفی بیشتر</a>
                </div>
                <div class="col-md-7">
                    <p>
                        «بیابان سبز، محیط زیست بهتر»؛ این شعار نمایشگاه اکسپو 2023 قطر است. در زمان‌های دور سبز کردن بیابان‌ها یک چالش بزرگ بود. امروزه این مهم امری دست‌نیافتنی نیست. اما برای حل کردن این چالش باید به سرعت دست به کار شد. چراکه مشکلات جهانی مربوط به آب، انرژی و تهدید غذایی قابل چشم‌پوشی نیستند.
                    </p>
                    <p class=" d-none d-md-block">
                        در این میان این فناوری‌های کاشت پایدار درختان و گیاهان هستند که سرزمین‌های خشک و بیابانی را به طبیعتی سبز تبدیل می‌کنند. موضوعی که اکسپو قطر 2023 به آن اختصاص دارد.
                    </p>

                </div>
                <div class="col-md-1"></div>
                <div class="col-md-1"></div>


                <div class="col-md-10">
                    <div id="85896968823"><script type="text/JavaScript" src="https://www.aparat.com/embed/9ojEy?data[rnddiv]=85896968823&data[responsive]=yes&muted=true&titleShow=true&autoplay=true"></script></div>
                    {{--                    <img class="img-fluid d-md-block d-none" src="{{url('images/future-img.jpg')}}" alt="" style="border: green solid 1px; border-radius: 30px; width: 100%">--}}
{{--                    <img class="img-fluid d-md-none w-100" src="{{url('images/mobile-mid.jpg')}}" alt="" style="border: green solid 1px; border-radius: 30px;">--}}

                </div>
                <div class="col-md-1"></div>
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <div class="row">
                        <div class="col-md-4">
                            <a href="{{url('images/international_area.jpg')}}" target="_blank">
                                <img src="{{url('images/international_area_t.jpg')}}" alt="international area" class="img-fluid">
                            </a>
                        </div>
                        <div class="col-md-4">
                            <a href="{{url('images/family-area.jpg')}}" target="_blank">
                            <img src="{{url('images/family-area_t.jpg')}}" alt="family area" class="img-fluid">
                            </a>

                        </div>
                        <div class="col-md-4">
                            <a href="{{url('images/cultural-area.jpg')}}" target="_blank">

                            <img src="{{url('images/cultural-area_t.jpg')}}" alt="cultural area" class="img-fluid">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-1"></div>

            </div>
        </div>
    </section>

    <section class="container-fluid my-5 py-5">

        <div class="container">
        <div class="row mx-4">
            <div class="col-12">
                <h2>ایران در اکسپو 2023 قطر</h2>
                <p class="subheader d-none d-md-block">
                    شرکت ها و موسساتی که فرصت حضور در اکسپو 2023 قطر را پیدا کردند
                </p>
            </div>
            <div class="col-12">
                <div class="row">
                @forelse($brands as $item)
               <div class="col-md-3">
{{--                   <a href="{{url('brands/'.$item->slug)}}" class="text-decoration-none">--}}
{{--                   <div class="card border-0">--}}
                       <img src="{{url('storage/uploads/suppliers/'.$item->logo)}}" class="img-fluid brand-img" alt="{{$item->title}}" title="{{$item->title}}">
{{--                       <div class="card-body">--}}
{{--                           <h5 class="card-title text-center">{{$item->title}}</h5>--}}
{{--                           <p class="card-text">{{Str::limit($item->about,70)}}</p>--}}
{{--                       </div>--}}
{{--                   </div>--}}
{{--                   </a>--}}
               </div>
                @empty
                @endforelse
                </div>
            </div>
        </div>

        </div>

    </section>
    <section class="container-fluid my-5 bg-light py-5">

        <div class="container">
        <div class="row mx-4">
            <div class="col-12">
                <h2>محصولات عرضه شده ایران در اکسپو 2023 قطر</h2>
                <p class="subheader  d-none d-md-block">
                    محصولاتی که در اکسپو 2023 قطر در پاویون جمهوری اسلامی ایران عرضه شده است
                </p>
            </div>
        </div>

        </div>

    </section>
@endsection
@section('style')
{{--    <link rel="stylesheet" href="css/owl.carousel.min.css">--}}
    <style>
        .brand-img {
            filter: gray; /* IE6-9 */
            -webkit-filter: grayscale(1); /* Google Chrome, Safari 6+ & Opera 15+ */
            filter: grayscale(1); /* Microsoft Edge and Firefox 35+ */
        }

        /* Disable grayscale on hover */
        .brand-img:hover {
            -webkit-filter: grayscale(0);
            filter: none;
        }
    </style>
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
