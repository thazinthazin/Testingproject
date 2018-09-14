<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>TestingProject | Welcome</title>

        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="./css/style.css">
        <link rel="stylesheet" href="./font-awesome-4.7.0/css/font-awesome.min.css">
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" crossorigin="anonymous">
    </head>
    <body>
        <header>
            <div class="container">
                <div id="branding">
                    <img src="./img/fh_website_logo.png" alt="">
                </div>
                <nav>
                    <ul>
                        <li><a href="{{url('/')}}">Home</a></li>
                        <li><a href="{{url('login')}}">Login</a></li>
                        <li><a href="{{url('register')}}">Register</a></li>
                    </ul>
                </nav>
            </div>
        </header>

        <section id="showcase">
            <div id="MiddleCarousel" class="carousel slide UACarousel" data-ride="carousel">
              <ol class="carousel-indicators">
                <!-- <li data-target="#MiddleCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#MiddleCarousel" data-slide-to="1"></li>
                <li data-target="#MiddleCarousel" data-slide-to="2"></li> -->
              </ol>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img class="d-block w-100" src="./img/slide1.jpg" alt="First slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="./img/slide2.jpg" alt="Second slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="./img/slide3.jpg" alt="Second slide">
                </div>
              </div>
              <a class="carousel-control-prev" href="#MiddleCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#MiddleCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
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
                    <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                </div>

                <div class="container">
                    <br><br><br><br><br><br>
                </div>
            </div>
        </section>

        <footer>
            <h6>You are not logged in.(Login) &copy; Your Company - Footer Info Here</h6>
            <h6><strong>Get the mobile app</strong></h6>
        </footer>

        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" crossorigin="anonymous"></script>
    
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" crossorigin="anonymous"></script>
        
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" crossorigin="anonymous"></script>

        <script type="text/javascript">
            jQuery(document).ready(function($) {

    'use strict';

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
