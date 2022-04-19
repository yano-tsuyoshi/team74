<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <!-- CSS -->
    <link rel="stylesheet" href="/css/teams.css">
    <link rel="stylesheet" href="/css/reserve.css">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- <link href="{{ asset('css/teams.css') }}" rel="stylesheet"> -->
    <!-- <link rel="stylesheet" href="/css/teams.css"> -->

    <meta charset="utf-8">
    <title>明るいHOUSE</title>
    <meta name="description" content="テキストテキストテキストテキストテキストテキスト">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="img/favicon.ico">
    <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;700&display=swap" rel="stylesheet">
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
                    <a href="top"><img src="/images/sinkyurogo.png"></a>
                </h1>

                <nav id="navi">
                    <ul class="nav-menu">
                        <!-- <li> <a href="top">なんとか鍼灸院</a></li> -->
                        <li> <a href="guide">鍼灸院詳細</a></li>
                        <li> <a href="course">施術コース・料金</a></li>
                        <li> <a href="reserve">予約</a></li>

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

        <!-- <main class="py-4">
            @yield('content')
        </main> -->

    </div>
</body>
</html>