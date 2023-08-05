<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }} - @yield('title')</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/js/app.js'])
@yield('style')
</head>
<body>
    <div id="app">
<header class="container-fluid">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{url('')}}">{{config('app.name')}}</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarScroll">
                    <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll nav-tabs" style="--bs-scroll-height: 100px;">
                        <li class="nav-item">
                            <a class="nav-link {{Request::is('/') ? 'active' : ''}}" aria-current="page" href="{{url('/')}}">اکسپو</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{Request::is('about') ? 'active' : ''}}" href="{{url('about')}}">درباره</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{Request::is('blog') ? 'active' : ''}}" href="{{url('blog')}}">اخبار</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                شرایط ثبت نام
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                                <li><a class="dropdown-item" href="#">غرفه نمایشگاهی</a></li>
                                <li><a class="dropdown-item" href="#">فروشگاه نمایشگاهی</a></li>
                                <li><hr class="dropdown-divider"></li>
                                <li><a class="dropdown-item" href="#">بازدیدکننده</a></li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link {{Request::is('contact') ? 'active' : ''}}" href="{{url('contact')}}">تماس با ما</a>
                        </li>

                                @guest
                                    @if (Route::has('login'))
                                        <li class="nav-item">
                                            <a class="nav-link {{Request::is('login') ? 'active' : ''}}" href="{{ route('login') }}">{{ __('ورود') }}</a>
                                        </li>
                                    @endif

{{--                                    @if (Route::has('register'))--}}
{{--                                        <li class="nav-item">--}}
{{--                                            <a class="nav-link" href="{{ route('register') }}">{{ __('ثبت نام') }}</a>--}}
{{--                                        </li>--}}
{{--                                    @endif--}}
                                @else
                                    <li class="nav-item dropdown">
                                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                            {{ Auth::user()->name }}
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                {{ __('خروج') }}
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                @csrf
                                            </form>
                                        </div>
                                    </li>
                                @endguest

                    </ul>
                                    <form class="d-flex">
                                        <input class="form-control me-2" type="search" placeholder="جستجو" aria-label="Search" readonly>
{{--                                        <button class="btn btn-outline-success" type="submit">Search</button>--}}
                                    </form>
                </div>

            </div>
        </nav>
    </div>

</header>
        <main class="py-4">
            @yield('content')
        </main>
        <div class="container my-5">
            <img src="images/title.png" alt="">
        </div>
        <footer class="footer-1">
            <div class="container text-light">
                <div class="row d-flex justify-content-around">
                    <div class="col">
                        <img src="images/Asset54x.png" alt="" style="max-height: 90px">
                    </div>
                    <div class="col d-flex justify-content-end align-items-center">
                        <img src="images/contact-text-1.png" alt="">
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
                        <p>
                            <span class="text-secondary">©</span>
                            کلیه حقوق مربوط به
                            <span class="text-info">
                                شرکت گردشگری هفت اقلیم
                            </span>
                            ، مجری پاویون جمهوری اسلامی ایران در اکسپو 2023 قطر است.
                        </p>
                    </div>
                </div>
            </div>
        </footer>
    </div>
@yield('script')
</body>
</html>
