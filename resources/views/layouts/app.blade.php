<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>پاویون جمهوری اسلامی ایران در اکسپو 2023 قطر - @yield('title')</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
{{--    <link rel="icon" type="image/png" href="{{url('images/fav.png')}}">--}}
    <link rel="icon" type="image/x-icon" href="{{url('images/favicon.ico')}}" />


    <!-- Scripts -->
    @vite(['resources/js/app.js'])
@yield('style')
</head>
<body>
    <div id="app">

<header class="container-fluid" style="margin-bottom: 100px">
{{--    <div class="container">--}}
        <nav class="navbar navbar-expand-lg navbar-light fixed-top" style="background-color: rgba(248,250,252,0.8)">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{url('')}}" title="{{config('app.name')}}">
                    <img src="{{url('images/fav.png')}}" alt="" width="70">
                </a>


{{--                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">--}}
{{--                    <span class="navbar-toggler-icon"></span>--}}
{{--                </button>--}}

                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasExample">
                    <span class="navbar-toggler-icon"></span>
                </button>


                <div class="collapse navbar-collapse" id="navbarScroll" style="font-size: 1.1rem;font-weight: 600;">
                    <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll    " style="--bs-scroll-height: 100px;">
                        <li class="nav-item hvr-grow badge">
                            <a class=" nav-link {{Request::is('/') ? 'active' : ''}}" aria-current="page" href="{{url('/')}}">صفحه اصلی</a>
                        </li>
                        <li class="nav-item hvr-grow badge">
                            <a class="nav-link {{Request::is('about') ? 'active' : ''}}" href="{{url('about')}}">درباره</a>
                        </li>
                        <li class="nav-item hvr-grow badge">
                            <a class="nav-link {{Request::is('blog*') ? 'active' : ''}}" href="{{url('blog')}}">اخبار</a>
                        </li>
                        <li class="nav-item hvr-grow badge">
                            <a class="nav-link {{Request::is('faq') ? 'active' : ''}}" href="{{url('faq')}}">سوالات متداول</a>
                        </li>
                        <li class="nav-item hvr-grow badge">
                            <a class="nav-link {{Request::is('about-expo') ? 'active' : ''}}" href="{{url('about-expo')}}">معرفی اکسپو</a>
                        </li>
                        <li class="hvr-grow nav-item dropdown badge">
                            <a class="nav-link dropdown-toggle {{Request::is('conditions*') ? 'active' : ''}}" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                شرایط ثبت نام
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                                <li><a class="dropdown-item {{Request::is('conditions/pavilion') ? 'active' : ''}}" href="{{url('conditions/pavilion')}}">غرفه نمایشگاهی</a></li>
                                <li><a class="dropdown-item {{Request::is('conditions/shop') ? 'active' : ''}}" href="{{url('conditions/shop')}}">فروشگاه نمایشگاهی</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item {{Request::is('conditions/visitor') ? 'active' : ''}}" href="{{url('conditions/visitor')}}">بازدیدکننده</a></li>
                            </ul>
                        </li>

                        <li class="hvr-grow nav-item badge">
                            <a class="nav-link {{Request::is('contact') ? 'active' : ''}}" href="{{url('contact')}}">تماس با ما</a>
                        </li>

{{--                                @guest--}}
{{--                                    @if (Route::has('login'))--}}
{{--                                        <li class="nav-item hvr-grow badge">--}}
{{--                                            <a class="nav-link {{Request::is('login') ? 'active' : ''}}" href="{{ route('login') }}">{{ __('ورود') }}</a>--}}
{{--                                        </li>--}}
{{--                                    @endif--}}

{{--                                    @if (Route::has('register'))--}}
{{--                                        <li class="nav-item hvr-grow badge">--}}
{{--                                            <a class="nav-link {{Request::is('register') ? 'active' : ''}}" href="{{ route('register') }}">{{ __('ثبت نام') }}</a>--}}
{{--                                        </li>--}}
{{--                                    @endif--}}
{{--                                @else--}}
{{--                                    <li class="hvr-grow nav-item dropdown badge">--}}
{{--                                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>--}}
{{--                                            {{ Auth::user()->name }}--}}
{{--                                        </a>--}}

{{--                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">--}}
{{--                                            <a class="dropdown-item" href="{{ route('logout') }}"--}}
{{--                                               onclick="event.preventDefault();--}}
{{--                                                     document.getElementById('logout-form').submit();">--}}
{{--                                                {{ __('خروج') }}--}}
{{--                                            </a>--}}

{{--                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">--}}
{{--                                                @csrf--}}
{{--                                            </form>--}}
{{--                                        </div>--}}
{{--                                    </li>--}}
{{--                                @endguest--}}

{{--                        @role('Admin')--}}
{{--                        <li class="hvr-grow badge nav-item dropdown {{Request::is('dashboard*') ? 'bg-warning' : 'bg-info'}}">--}}
{{--                            <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">--}}
{{--                                مدیریت--}}
{{--                            </a>--}}
{{--                            <ul class="dropdown-menu {{Request::is('dashboard*') ? 'bg-warning' : 'bg-info'}}" aria-labelledby="navbarScrollingDropdown">--}}
{{--                                <li><a class="dropdown-item {{Request::is('dashboard/posts*') ? 'active' : ''}}" href="{{url('dashboard/posts')}}">اخبار</a></li>--}}
{{--                                <li><hr class="dropdown-divider"></li>--}}
{{--                                <li><a class="dropdown-item {{Request::is('dashboard/brands*') ? 'active' : ''}}" href="{{url('dashboard/brands')}}">شرکت / برند</a></li>--}}
{{--                                <li><a class="dropdown-item {{Request::is('dashboard/products*') ? 'active' : ''}}" href="{{url('dashboard/products')}}">محصولات</a></li>--}}
{{--                                <li><hr class="dropdown-divider"></li>--}}
{{--                                <li><a class="dropdown-item {{Request::is('dashboard/faqs*') ? 'active' : ''}}" href="{{url('dashboard/faqs')}}">FAQs</a></li>--}}
{{--                                <li><a class="dropdown-item {{Request::is('dashboard/contacts*') ? 'active' : ''}}" href="{{url('dashboard/contacts')}}">تماسها</a></li>--}}

{{--                            </ul>--}}
{{--                        </li>--}}
{{--                        @endrole--}}
                        <a class="" data-bs-toggle="offcanvas" href="#offcanvasRight" role="button" aria-controls="offcanvasExample">
                            <span class="navbar-toggler-icon"></span>
                        </a>

{{--                        @role('company')--}}

{{--                        <li class="hvr-grow nav-item dropdown bg-warning">--}}
{{--                            <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">--}}
{{--                                داشبورد--}}
{{--                            </a>--}}
{{--                            <ul class="dropdown-menu bg-warning" aria-labelledby="navbarScrollingDropdown">--}}
{{--                                <li><a class="dropdown-item" href="#">ارسال مدارک</a></li>--}}
{{--                                <li><a class="dropdown-item" href="#">فروشگاه نمایشگاهی</a></li>--}}
{{--                                <li><hr class="dropdown-divider"></li>--}}
{{--                                <li><a class="dropdown-item" href="#">بازدیدکننده</a></li>--}}
{{--                            </ul>--}}
{{--                        </li>--}}
{{--                        @endrole--}}


                    </ul>
{{--                    <boutton class="btn btn-sm btn-light text-info">ثبت نام نمایشگاه</boutton>--}}
{{--                                    <form class="d-flex">--}}
{{--                                        <input class="form-control me-2" type="search" placeholder="جستجو" aria-label="Search" readonly>--}}
{{--                                        <button class="btn btn-outline-success" type="submit">Search</button>--}}
{{--                                    </form>--}}
                </div>

            </div>
        </nav>
{{--    </div>--}}

</header>

{{--        <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">--}}
{{--            Button with data-bs-target--}}
{{--        </button>--}}

        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasExampleLabel"></h5>
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class=" nav-link {{Request::is('/') ? 'active' : 'text-dark'}}" aria-current="page" href="{{url('/')}}">صفحه اصلی</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{Request::is('about') ? 'active' : 'text-dark'}}" href="{{url('about')}}">درباره</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{Request::is('blog*') ? 'active' : 'text-dark'}}" href="{{url('blog')}}">اخبار</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{Request::is('faq') ? 'active' : 'text-dark'}}" href="{{url('faq')}}">سوالات متداول</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{Request::is('about-expo') ? 'active' : 'text-dark'}}" href="{{url('about-expo')}}">معرفی اکسپو</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{Request::is('contact') ? 'active' : 'text-dark'}}" href="{{url('contact')}}">تماس با ما</a>
                    </li>
                    @guest
                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link {{Request::is('login') ? 'active' : 'text-dark'}}" href="{{ route('login') }}">{{ __('ورود') }}</a>
                            </li>
                        @endif

{{--                                                            @if (Route::has('register'))--}}
{{--                                                                <li class="nav-item">--}}
{{--                                                                    <a class="nav-link {{Request::is('register') ? 'active' : ''}}" href="{{ route('register') }}">{{ __('ثبت نام') }}</a>--}}
{{--                                                                </li>--}}
{{--                                                            @endif--}}
                    @else
                        <li class="nav-item dropdown">
                            <a class="dropdown-toggle nav-link" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
                                {{ Auth::user()->name }}
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                <li>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('خروج') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @endguest


                </ul>

{{--                <div class="dropdown mt-3">--}}
{{--                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown">--}}
{{--                        Dropdown button--}}
{{--                    </button>--}}
{{--                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">--}}
{{--                        <li><a class="dropdown-item" href="#">Action</a></li>--}}
{{--                        <li><a class="dropdown-item" href="#">Another action</a></li>--}}
{{--                        <li><a class="dropdown-item" href="#">Something else here</a></li>--}}
{{--                    </ul>--}}
{{--                </div>--}}
            </div>
        </div>
        <main class="py-4">
            @yield('content')
        </main>
        <div class="container my-5">
            <img src="{{url('images/title.png')}}" alt="">
        </div>
        <footer class="footer-1">
            <div class="container text-light">
                <div class="row d-flex justify-content-around">
                    <div class="col">
                        <img src="{{url('images/Asset54x.png')}}" alt="" style="max-height: 90px">
                    </div>
                    <div class="col d-flex justify-content-end align-items-center">
                        <img src="{{url('images/contact-text-1.png')}}" alt="">
{{--                        <p>dd</p>--}}
{{--                        <p>dd</p>--}}
{{--                        <p>dd</p>--}}

                    </div>
                </div>
            </div>
        </footer>
        <footer class="footer-2">
            <div class="container text-light">
                <div class="row">
                    <div class="col">
                        <small>
                            <span class="text-secondary">©</span>
                            کلیه حقوق مربوط به
                            <span class="text-info">
                                <a href="{{url('/')}}">
                                شرکت گردشگری هفت اقلیم
                                </a>
                            </span>
                            ، مجری پاویون جمهوری اسلامی ایران در اکسپو 2023 قطر است.
                        </small>
                    </div>
                </div>
            </div>
        </footer>
    </div>
@yield('script')
</body>
</html>
