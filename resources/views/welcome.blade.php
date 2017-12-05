<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <script
            src="https://code.jquery.com/jquery-3.2.1.js"
            integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
            crossorigin="anonymous"></script>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Raleway', sans-serif;
            font-weight: 100;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        ul li {
            list-style-type: none;
        }

        .links > a,
        .links > ul > li > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
        
        .currentLang {
            color: #000000 !important;
        }
    </style>
</head>
<body>
<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">
            <ul>
                <li>
                    <a href="#" class="currentLang">
                        {{ Config::get('languages')[App::getLocale()] }}
                    </a>
                </li>
                @foreach (Config::get('languages') as $lang => $language)
                    @if ($lang != App::getLocale())
                        <li>
                            <a href="{{ route('lang.switch', $lang) }}">{{$language}}</a>
                        </li>
                    @endif
                @endforeach
                @auth
                    <li>
                        <a href="{{ url('/home') }}">@lang('general.home')</a>
                    </li>
                @else
                    <li>
                        <a href="{{ route('login') }}">@lang('general.login')</a>
                    </li>
                    <li>
                        <a href="{{ route('register') }}">@lang('general.register')</a>
                    </li>
                @endauth
            </ul>
        </div>
        <section class="detailed-nav"></section>
    @endif

    <div class="content">
        <div class="title m-b-md">
            Laravel
        </div>

        <div class="links">
            <a href="https://laravel.com/docs">@lang('general.documentation')</a>
            <a href="https://laracasts.com">@lang('general.laracasts')</a>
            <a href="https://laravel-news.com">@lang('general.news')</a>
            <a href="https://forge.laravel.com">@lang('general.forge')</a>
            <a href="https://github.com/laravel/laravel">@lang('general.github')</a>
        </div>
    </div>
</div>

</body>
</html>
