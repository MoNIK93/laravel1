<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
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

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    kouventateam
                </div>
                <img src="data:image/png;base64,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">

                <div class="links">
                    
                </div>
            </div>
        </div>
    </body>
</html>
