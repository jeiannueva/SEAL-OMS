<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>SEAL-OMS</title>

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
                font-size: 70px;
            }

            .links > a {
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
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
           <div class="top-right links">


          </div>
            <div class="content">
                <div class="title m-b-md">
                    <img style="height:40vh;" src="{{ asset('pictures/seal.jpg')}}"  />
                    <br> Organization Management System
                </div>

                <div class="links">
<!--                     <a href="https://laravel.com/docs">Documentation</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a> -->
                   @if (Route::has('login'))
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Redirecting to home.</a>
                        <script>
                        window.location.replace("./home");
                        </script>
                    @else
                        <a href="https://seal.iacademy.edu.ph">Back to SITE</a>
                        <a href="{{ url('/login') }}">Login</a>
                        <!--<a href="{{ url('/register') }}">Register</a>-->
                    @endif
                    @endif
                </div>
            </div>
        </div>
    </body>
</html>
