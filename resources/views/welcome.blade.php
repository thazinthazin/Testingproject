<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>TestingProject | Welcome</title>

        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="./css/style.css">
        <link rel="stylesheet" href="./css/bootstrap.min.css">

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
        <header>
            <div class="container">
                <div id="branding">
                    <img src="./img/fh_website_logo.png" alt="">
                </div>
                <nav>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Login</a></li>
                        <li><a href="#">Register</a></li>
                    </ul>
                </nav>
            </div>
        </header>

        <section id="showcase">
            <div class="container">
                <h1>Afforatble Professional web design</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci alias amet aperiam beatae consectetur dolorem eos eum excepturi iusto libero molestias praesentium, ratione similique sit tempora velit, veritatis vero voluptatum.</p>
            </div>
        </section>

        <section id="boxes">
            <div class="container">
                <div class="box">
                    <img src="./img/html.png" alt="">
                    <h3>HTML5 markup</h3>
                </div>
                <div class="box">
                    <img src="./img/css3.png" alt="">
                    <h3>CSS3 styling</h3>
                </div>
                <div class="box">
                    <img src="./img/brush.png" alt="">
                    <h3>Graphic design</h3>
                </div>
                <div class="box">
                    <img src="./img/brush.png" alt="">
                    <h3>HTML5 markup</h3>
                </div>
                <div class="box">
                    <img src="./img/css3.png" alt="">
                    <h3>CSS3 styling</h3>
                </div>
                <div class="box">
                    <img src="./img/html.png" alt="">
                    <h3>Graphic design</h3>
                </div>
            </div>
        </section>

        <section id="newsletter">
            <div class="container">
                <img src="./img/fh_website_logo.png" alt="">

                <h6><strong>Address:</strong></h6>
                <h6>7/48, Room 201, Kabaraye Pagoda Road,
                Mayangone Township, Yangon.</h6>
                <h6><strong>Phone:</strong> +95 9777216982, +95 11221141,</h6>
                <h6>+95 9420071070</h6>
                <h6><strong>Email:</strong> aungkowin@futurehubmyanmar.com</h6>

                <div id="social_box">
                    <a href="#"><img src="img/f1.png" alt="facebook" /></a>
                    <a href="#"><img src="img/f3.png" alt="twitter" /></a>
                    <a href="#"><img src="img/f2.png" alt="feed" /></a>
                    <a href="#"><img src="img/f4.png" alt="youtube" /></a>
                </div>

                <div class="container">
                    <br><br><br><br><br>
                </div>
            </div>
        </section>

        <footer>
            <h6>You are not logged in.(Login) &copy; Your Company - Footer Info Here</h6>
            <h6><strong>Get the mobile app</strong></h6>
        </footer>

        <script src="./js/jquery-1.11.2.min.js"></script>

        <script type="text/javascript">
            jQuery(document).ready(function($) {

    'use strict';



        // var top_header = $('.parallax-content');
        // top_header.css({'background-position':'center center'}); // better use CSS

        // $(window).scroll(function () {
        // var st = $(this).scrollTop();
        // top_header.css({'background-position':'center calc(50% + '+(st*.5)+'px)'});
        // });



        $(window).on("scroll", function() {
            if($(window).scrollTop() > 100) {
                $("header").addClass("active");
            } else {
                //remove the background property so it comes transparent again (defined in your css)
               $("header").removeClass("active");
            }
        });



});

        </script>
    </body>
</html>
