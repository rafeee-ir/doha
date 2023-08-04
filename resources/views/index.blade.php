@extends('layouts.app')

@section('content')
    <header class="header">
        <div class="container-lg">
            <div class="row gx-0 align-items-center justify-content-sm-center justify-content-end gy-2">
                <div class="col logo-holder">
                    <a class="header-logo" href="/qa/"><img src="/Images/MicrosoftTeamsloogo.png" class="img-fluid" alt="" title="Expo 2023"></a>
                    <span class="logo-line">|</span>
                    <a class="header-logo" href="https://www.bie-paris.org/site/en/"><img src="/Images/horti-expo.png" class="img-fluid" alt="" title="Expo 2023"></a>
                </div>
                <div class="col-auto navbar-expand-lg d-flex">
                    <div class="navbar-collapse header-menu collapse" id="headerNav" style="">

                        <ul role="menu" class="nav">
                            <li class="dropdown">
                                <a href="/qa/من-نحن/" target="_self">
                                    <span>من نحن</span>
                                </a>
                            </li>
                            <li class="dropdown">
                                <a href="javascript:void(0)" target="_self" data-bs-toggle="dropdown">
                                    <span>الغد الأخضر</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <ul role="menu" class="nav">
                                        <li class="dropdown">
                                            <a href="/qa/الغد-الأخضر/اكسبو-2023-الدوحة-قطر/" target="_self">
                                                <span>اكسبو 2023 الدوحة قطر</span>
                                            </a>
                                        </li>
                                        <li class="dropdown">
                                            <a href="/qa/الغد-الأخضر/رؤية-قطر-الوطنية-2030/" target="_self">
                                                <span>رؤية قطر الوطنية 2030</span>
                                            </a>
                                        </li>
                                        <li class="dropdown">
                                            <a href="/qa/الغد-الأخضر/الزراعة-الحديثة/" target="_self">
                                                <span>الزراعة الحديثة</span>
                                            </a>
                                        </li>
                                        <li class="dropdown">
                                            <a href="/qa/الغد-الأخضر/التكنولوجيا-والابتكار/" target="_self">
                                                <span>التكنولوجيا والابتكار</span>
                                            </a>
                                        </li>
                                        <li class="dropdown">
                                            <a href="/qa/الغد-الأخضر/الوعي-البيئي/" target="_self">
                                                <span>الوعي البيئي</span>
                                            </a>
                                        </li>
                                        <li class="dropdown">
                                            <a href="/qa/الغد-الأخضر/الاستدامة/" target="_self">
                                                <span>الاستدامة</span>
                                            </a>
                                        </li>
                                    </ul>

                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="javascript:void(0)" target="_self" data-bs-toggle="dropdown">
                                    <span>اكتشف الدوحة</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <ul role="menu" class="nav">
                                        <li class="dropdown">
                                            <a href="/qa/اكتشف-الدوحة/سياحة/" target="_self">
                                                <span>سياحة</span>
                                            </a>
                                        </li>
                                    </ul>

                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="javascript:void(0)" target="_self" data-bs-toggle="dropdown">
                                    <span>كن جزءًا</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <ul role="menu" class="nav">
                                        <li class="dropdown">
                                            <a href="/qa/كن-جزء-ا/كن-جزء-ا/" target="_self">
                                                <span>كن جزءًا</span>
                                            </a>
                                        </li>
                                        <li class="dropdown">
                                            <a href="/qa/كن-جزء-ا/مأكولات-ومشروبات/" target="_self">
                                                <span>مأكولات ومشروبات</span>
                                            </a>
                                        </li>
                                        <li class="dropdown">
                                            <a href="/qa/كن-جزء-ا/برنامج-التطوع/" target="_self">
                                                <span>برنامج التطوع</span>
                                            </a>
                                        </li>
                                    </ul>

                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="javascript:void(0)" target="_self" data-bs-toggle="dropdown">
                                    <span>قائمة وسائل الإعلام</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <ul role="menu" class="nav">
                                        <li class="dropdown">
                                            <a href="/qa/قائمة-وسائل-الإعلام/الأخبار-والبيانات-الصحفية/" target="_self">
                                                <span>الأخبار والبيانات الصحفية</span>
                                            </a>
                                        </li>
                                    </ul>

                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="javascript:void(0)" target="_self" data-bs-toggle="dropdown">
                                    <span>الدعم</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <ul role="menu" class="nav">
                                        <li class="dropdown">
                                            <a href="/qa/الدعم/الأسئلة-الشائعة/" target="_self">
                                                <span>الأسئلة الشائعة</span>
                                            </a>
                                        </li>
                                        <li class="dropdown">
                                            <a href="/qa/الدعم/التواصل-معنا/" target="_self">
                                                <span>التواصل معنا</span>
                                            </a>
                                        </li>
                                    </ul>

                                </ul>
                            </li>
                        </ul>










                        <a href="javascript:void(0)" class="button-root"></a>



                    </div>
                    <div class="btn-language-holder">
                        <a href="/en/" class="btn-language">En </a>
                    </div>
                    <button class="navbar-toggler btn-hamburger collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#headerNav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">xxx</button>

                </div>
            </div>
        </div>


    </header>
@endsection
