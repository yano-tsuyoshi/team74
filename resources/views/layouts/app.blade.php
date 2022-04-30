<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/main.js"></script>


</head>

<body>

    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="dropdown" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button> 


                <div class=" navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>


                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @if(!Auth::check() && (!isset($authgroup) || !Auth::guard($authgroup)->check()))
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    @isset($authgroup)
                                    <a class="nav-link" href="{{ url("login/$authgroup") }}">{{ __('Login') }}</a>
                                    @else
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                    @endisset
                                </li>
                            @endif

                            @if (Route::has('register'))
                            @isset($authgroup)
                            @if (Route::has("$authgroup-register"))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route("$authgroup-register") }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                            @else
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                            @endisset
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    @isset($authgroup)
                                    {{ Auth::guard($authgroup)->user()->name }}
                                    @else
                                    {{ Auth::user()->name }}
                                    @endisset
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endif
                    </ul>
                </div>

            </div>

        </nav> 



        <div class="main">
            <header id="header">
                <h1 class="site-title">
                    <a href="welcome"><img class="rogoimg" src="/images/sinkyurogo.png"></a>
                </h1>

                <nav id="navi">
                    <ul class="nav-menu">
                        <!-- <li> <a href="top">なんとか鍼灸院</a></li> -->
                        <li> <a href="guide">スタッフ紹介</a></li>
                        <li> <a href="flow">施術の流れ</a></li>
                        <li> <a href="course">施術コース・料金</a></li>
                        <li> <a href="reserve">予約</a></li>
                        <li> <a href="access">アクセス</a></li>
                        <li> <a href="FAQ">FAQ</a></li>
                        
                    </ul>
                    <ul class="nav-sns">
                        <li><a href="https://twitter.com/" target="_blank">Twitter</a></li>
                        <li><a href="https://www.facebook.com/" target="_blank">facebook</a></li>
                        <li><a href="https://www.instagram.com/" target="_blank">instagram</a></li>
                    </ul>
                </nav>

                <!-- <div class="hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                </div> -->

                <div id="mask"></div>

            </header>
            <div class="dummysidebar">

            </div>
            @yield('content')
        </div>
        
        <div class="footerflex">

            <address class="footer">
                <ul class="footer1">

                    <li><span class="footer-d">ご予約優先制</span>

                    <li><span class="footer-d">木曜休診</span> <span class="footer-d">往診できます</span></li>

                </ul>
                <p class="footer2">鍼灸保険取扱・鍼灸治療・手技療法<br>
                    リウマチ・五十肩、腰痛症<br>神経痛・頚腕症候群</p>
                <ul class="footer3">
                    <li class="font-size-1">〒551-0000</li>
                    <li class="font-size-1 mb-3">大阪府豊中市１−１−１</li>
                    <li class="foot-i01"><a class="btn btn-sm btn-primary btn-pill transition-3d-hover" href="tel: //電話番号書く//" >電話:06-6666-3333</a></li>
                </ul>
            </address>

            <table class="signboard">
                <caption>※予約優先制※</caption>
                <tbody class="signboard1">
                    <tr class="signboard2">
                        <th><span class="th-white-str">診療時間</span></th>
                        <th><span class="th-white-str">月</span></th>
                        <th><span class="th-white-str">火</span></th>
                        <th><span class="th-white-str">水</span></th>
                        <th><span class="th-white-str">木</span></th>
                        <th><span class="th-white-str">金</span></th>
                        <th><span class="th-white-str">土</span></th>
                        <th><span class="th-white-str">日</span></th>
                        <th><span class="th-white-str">祝</span></th>
                    </tr>
                    <tr>
                        <td class="tal">9:00～12:00</td>
                        <td>○</td>
                        <td>○</td>
                        <td>○</td>
                        <td>-</td>
                        <td>○</td>
                        <td>○</td>
                        <td>○</td>
                        <td>○</td>
                    </tr>
                    <tr>
                        <td class="tal">15:30～19:30</td>
                        <td>○</td>
                        <td>○</td>
                        <td>○</td>
                        <td>-</td>
                        <td>○</td>
                        <td>○</td>
                        <td>-</td>
                        <td>-</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </body>
</html>