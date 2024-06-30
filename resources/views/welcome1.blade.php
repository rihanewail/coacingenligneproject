<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Coaching Center Demo</title>
    <link href="csss/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="csss/style.css" rel="stylesheet" type="text/css">
    <link href="csss/animate.css" rel="stylesheet" type="text/css">
    <link href="csss/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;
subset=latin-ext,vietnamese" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=IM+Fell+Great+Primer:400,400i" rel="stylesheet"> </head>

<body>
    <section id="top-menu">
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                    <a class="navbar-brand" href="#">
                        <img src="image/Google.png" alt=""></a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <form class="navbar-form navbar-left">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Search">
                        </div>
                        <button type="submit" class="btn btn-default">Submit</button>
                    </form>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="/">Home</a></li>
                        <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">About us <span class="caret"></span></a>
                            <ul class="dropdown-menu  animated bounceInLeft">
                                <li><a href="AboutCoachingC.html">About Our Coaching</a></li>
                                <li><a href="our_values.html">Our Values</a></li>
                            </ul>
                        </li>
                        <li><a href="our_team.html">Our Team</a></li>
                        <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Course <span class="caret"></span></a>
                            <ul class="dropdown-menu  animated bounceInLeft">
                                <li><a href="course_secoundary.html">Secondary</a></li>
                                <li><a href="higher_secoundary.html">Higher Secondary</a></li>
                                <li><a href="othercourse.html"> Other</a></li>
                            </ul>
                        </li>
                        <li><a href="gallery.html">Gallery</a></li>
                        <li><a href="FAQ.html">FAQ</a></li>
                        <li class="link"> <a href="{{ route('demand.index') }}">demande inscreption</a></li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
        </nav>
    </section>
    <section id="slider">
        <div id="first-slider">
            <div id="carousel-example-generic" class="carousel slide carousel-fade">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
                </ol>
                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <!-- Item 1 -->
                    <div class="item active slide1">
                        <div class="row">
                            <div class="container">
                                <div class="col-md-3 text-right"> <img style="max-width: 200px;" data-animation="animated zoomInLeft" src="http://s20.postimg.org/pfmmo6qj1/window_domain.png"> </div>
                                <div class="col-md-9 text-left">
                                    <h3 data-animation="animated bounceInDown">Add images, or even your logo!</h3>
                                    <h4 data-animation="animated bounceInUp">Easily use stunning effects</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Item 2 -->
                    <div class="item slide2">
                        <div class="row">
                            <div class="container">
                                <div class="col-md-7 text-left">
                                    <h3 data-animation="animated bounceInDown"> 50 animation options A beautiful</h3>
                                    <h4 data-animation="animated bounceInUp">Create beautiful slideshows </h4>
                                </div>
                                <div class="col-md-5 text-right"> <img style="max-width: 200px;" data-animation="animated zoomInLeft" src="http://s20.postimg.org/sp11uneml/rack_server_unlock.png"> </div>
                            </div>
                        </div>
                    </div>
                    <!-- Item 3 -->
                    <div class="item slide3">
                        <div class="row">
                            <div class="container">
                                <div class="col-md-7 text-left">
                                    <h3 data-animation="animated bounceInDown">Simple Bootstrap Carousel</h3>
                                    <h4 data-animation="animated bounceInUp">Bootstrap Image Carousel Slider with Animate.css</h4>
                                </div>
                                <div class="col-md-5 text-right"> <img style="max-width: 200px;" data-animation="animated zoomInLeft" src="http://s20.postimg.org/eq8xvxeq5/globe_network.png"> </div>
                            </div>
                        </div>
                    </div>
                    <!-- Item 4 -->
                    <div class="item slide4">
                        <div class="row">
                            <div class="container">
                                <div class="col-md-7 text-left">
                                    <h3 data-animation="animated bounceInDown">We are creative</h3>
                                    <h4 data-animation="animated bounceInUp">Get start your next awesome project</h4>
                                </div>
                                <div class="col-md-5 text-right"> <img style="max-width: 200px;" data-animation="animated zoomInLeft" src="http://s20.postimg.org/9vf8xngel/internet_speed.png"> </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Item 4 -->
                </div>
                <!-- End Wrapper for slides-->
                <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev"> <i class="fa fa-angle-left"></i><span class="sr-only">Previous</span> </a>
                <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next"> <i class="fa fa-angle-right"></i><span class="sr-only">Next</span> </a>
            </div>
        </div>
    </section>
    <!--    about us section -->
    <section id="about_us">

        <div class="container">
            <div class="A-banner-0">
                <div class="row">
                    <div class="col-md-4">
                        <div class="A1-left">
                            in the test.</p>
                        </div>
                        <div class="A2-left">
                            <p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="A1-middle">
                            tions will be sent on your email ID</p>
                        </div>
                        <div class="A2-middle">
                            <h1>When is the test?</h1>
                            <p>23rd September 2017
                            </p><br><br><br><br><br><br>
                            <p>3.30 – 5.30 PM Duration is 40 minutes</p>
                            <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                            <div class="A3-button">
                                {{--  <a href="#">
                                    <button class="R-button" type="button">Registration Now</button>
                                </a>
                                <a href="#">
                                    <button class="R-button" type="button">Login</button>
                                </a>  --}}
                                @if (Route::has('login'))
                                @auth
                                    <a href="{{ url('/home') }}" class="R-button">Home</a>
                                @else
                                    <a href="{{ route('login') }}" class="R-button">Log in</a>


                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}" class="R-button">Register</a>
                                    @endif
                                @endauth	</div>
                          @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--    course offered -->
    <section id="course-part">
        <h2>Course offered </h2>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="carousel slide multi-item-carousel" id="theCarousel">
                        <div class="carousel-inner">
                            <div class="item active">
                                <div class="col-xs-4 col-md-4">
                                    <a href="#1"><img src="image/computer.jpg" class="img-responsive"></a>
                                    <p>Class I-V</p>
                                    <div class="C03-button">
                                        <a href="#">
                                            <button type="button" class="see-more007"> See more</button>
                                        </a>
                                    </div>
                                    <div class="C02-button">
                                        <a href="#">
                                            <button type="button" class="Course-reg07"> Course registration</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="col-xs-4 col-md-4">
                                    <a href="#1"><img src="image/computer.jpg" class="img-responsive"></a>
                                    <p>Class VI-X</p>
                                    <div class="C03-button">
                                        <a href="#">
                                            <button type="button" class="see-more007"> See more</button>
                                        </a>
                                    </div>
                                    <div class="C02-button">
                                        <a href="#">
                                            <button type="button" class="Course-reg07"> Course registration</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="col-xs-4 col-md-4">
                                    <a href="#1"><img src="image/computer.jpg" class="img-responsive"></a>
                                    <p>Class XI-XII</p>
                                    <div class="C03-button">
                                        <a href="#">
                                            <button type="button" class="see-more007"> See more</button>
                                        </a>
                                    </div>
                                    <div class="C02-button">
                                        <a href="#">
                                            <button type="button" class="Course-reg07"> Course registration</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="col-xs-4  col-md-4">
                                    <a href="#1"><img src="image/computer.jpg" class="img-responsive"></a>
                                    <p>IELTS</p>
                                    <div class="C03-button">
                                        <a href="#">
                                            <button type="button" class="see-more007"> See more</button>
                                        </a>
                                    </div>
                                    <div class="C02-button">
                                        <a href="#">
                                            <button type="button" class="Course-reg07"> Course registration</button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <!-- add  more items here -->
                            <!-- Example item start:  -->
                            <!--  Example item end -->
                        </div> <a class="left carousel-control" href="#theCarousel" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a> <a class="right carousel-control" href="#theCarousel" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>                        </div>
                </div>
            </div>
        </div>
    </section>

    <!--    your video part-->

    <section id="video-part">


        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="jss/jquery-3.1.1.min.js"></script>
        <script src="jss/bootstrap.min.js"></script>
        <script src="jss/isotope.pkgd.min.js"></script>
        <script src="jss/isotape.function.js"></script>
        <script src="jss/main.js"></script>
        <script>
            $(document).ready(function() {


            })
        </script>
</body>

</html>
