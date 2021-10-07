<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>CV Sua Artha</title>

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

                /*background-image: url('https://shop.fender.com/on/demandware.static/-/Library-Sites-Fender-Shared/default/dweecffea7/fender/hp-2020/Web_Elec_1013_AmericanProfessional_II_HPS_Desktop.jpg');
                background-repeat: no-repeat;
                background-attachment: fixed;
                background-size: cover;*/
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
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                <img src="http://localhost/cv_sua_artha/public/background.png" style="width:100%;margin-top:350px;">
                    CV Sua Artha
                </div>

                <div class="links">
                    <a href="{{ route('login') }}">Kulkas</a>
                    <a href="{{ route('login') }}">Televisi</a>
                    <a href="{{ route('login') }}">Mesin Cuci</a>
                    <a href="{{ route('login') }}">Lemari</a>
                    <a href="{{ route('login') }}">Meja Makan</a>
                    <a href="{{ route('login') }}">Custom Order</a>
                </div>

                <section>
                <h1>Kunjungi kami</h1>
                <p>Jl. Sawo No. 99</p>
                <p>Bitera Gianyar, Bali. Indonesia.</p>
                <p>Telp. 0365 425 425</p>
                </section>

        </div>

    </body>
</html>
