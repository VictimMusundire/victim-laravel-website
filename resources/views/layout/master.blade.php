<!DOCTYPE html>
<html lang="en">

<head>
    <title>Victim - Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('fonts/icomoon/style.css')}}">

    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/jquery-ui.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">

    <link rel="stylesheet" href="{{asset('css/jquery.fancybox.min.css')}}">

    <link rel="stylesheet" href="{{asset('css/bootstrap-datepicker.css')}}">

    <link rel="stylesheet" href="{{asset('fonts/flaticon/font/flaticon.css')}}">

    <link rel="stylesheet" href="{{asset('css/aos.css')}}">
    <link href="{{asset('css/jquery.mb.YTPlayer.min.css')}}" media="all" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="{{asset('css/style.css')}}">



</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

<div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close mt-3">
                <span class="icon-close2 js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div>


    <div class="py-2 bg-primary-vic">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-9 d-none d-lg-block">
                    <a href="#" class="small mr-3 text-white"><span class="icon-question-circle-o mr-2"></span> Have a questions?</a>
                    <a href="#" class="small mr-3 text-white"><span class="icon-phone2 mr-2"></span> +263 776 866 577</a>
                    <a href="#" class="small mr-3 text-white"><span class="icon-envelope-o mr-2"></span>mvprules94@gmail.com</a>
                </div>
                <div class="col-lg-3 text-right">
                    <a href="{{url('contactvic')}}" class="small mr-3 text-white"><span class="icon-cast_connected"></span> Connect</a>
                    <!-- <a href="register.html" class="small btn btn-primary px-4 py-2 rounded-0"><span class="icon-users"></span> Register</a> -->
                </div>
            </div>
        </div>
    </div>
    <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">

        <div class="container">
            <div class="d-flex align-items-center">
                <div class="site-logo">
                    <a href="{{url('/')}}" class="d-block">
                        <img src="images/logo.PNG" alt="Image" class="img-fluid">
                    </a>
                </div>
                <div class="mr-auto">
                    <nav class="site-navigation position-relative text-right" role="navigation">
                        <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                            <li  class="{{Request::is('/') ? 'active':''}}">
                                <a href="{{url('/')}}" class="nav-link text-left">Home</a>
                            </li>
                            <li class="has-children {{Request::is('meetvic') ? 'active':''}} {{Request::is('workshops') ? 'active':''}} {{Request::is('healthy') ? 'active':''}}">
                                <a href="#" class="nav-link text-left">About Victim</a>
                                <ul class="dropdown">
                                    <!-- <li><a href="teachers.html">Our Teachers</a></li> -->
                                    <li><a href="{{url('/meetvic')}}">Meet Victim</a></li>
                                    <li><a href="{{url('/workshops')}}">Work Shops</a></li>
                                    <li><a href="{{url('/healthy')}}">Staying Healthy</a></li>
                                </ul>
                            </li>
                            <li class="{{Request::is('portifoliovic') ? 'active':''}}">
                                <a href="/portifoliovic" class="nav-link text-left">Portifolio</a>
                            </li>
                            <li class="{{Request::is('contactvic') ? 'active':''}}">
                                <a href="/contactvic" class="nav-link text-left">Contact</a>
                            </li>
                        </ul>                                                                                                                                                                                                                                                                                          </ul>
                    </nav>

                </div>
                <div class="ml-auto">
                    <div class="social-wrap">

                         <a href="{{url('https://www.facebook.com/victim.musundire')}}" target="_blank"><span class="icon-facebook"></span></a>
                         <a href="{{url('https://twitter.com/victimmusundire')}}" target="_blank"><span class="icon-twitter"></span></a>
                         <a href="{{url('https://www.linkedin.com/in/victim-musundire/')}}" target="_blank"><span class="icon-linkedin"></span></a>

                        <a href="#" class="d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black"><span
                                class="icon-menu h3"></span></a>
                    </div>
                </div>

            </div>
        </div>

    </header>
    <div class="hero-slide owl-carousel site-blocks-cover">
    </div>
    </div>


            @yield('content')

<div class="site-section ftco-subscribe-1" style="background-image: url('images/bg_1.jpg')">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7">
                <h2>Subscribe to my news letter</h2>
                <p>Far far away, behind the word mountains, far from the countries stay in touch with me.</p>
            </div>
            <div class="col-lg-5">
                <form action="POST" data-netlify="true" class="d-flex">
                    <input type="text" name="subscriptionmsg" id="subscriptionmsg" class="rounded form-control mr-2 py-3" placeholder="Enter your email">
                    <button class="btn btn-outline-light rounded py-3 px-4" type="submit">Send</button>
                </form>
            </div>
        </div>
    </div>
</div>


<div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <p class="mb-4"><img src="images/logo.png" alt="Image" class="img-fluid"></p>
                <p>" Honor, Code, Respect, Love, Loyalty "</p>
                <p ><a href="{{url('meetvic')}}" class="btn btn-outline-info">Meet Victim</a></p>
            </div>

            <div class="col-lg-4">
                <h3 class="footer-heading"><span>Other Links</span></h3>
                <ul class="list-unstyled">
                    <li><a href="{{url('healthy')}}" class="text-white">Staying Healthy</a></li>

                </ul>
            </div>
            <div class="col-lg-4">
                <h3 class="footer-heading"><span>Contact</span></h3>
                <ul class="list-unstyled">
                    <li> <a href="contactvic" class="text-white">Contact Page</a></li>
                    <li class="text-white"> Call: +263 776 866 577</li>
                    <li class="text-white"> Email: mvprules94@gmail.com</li>

                </ul>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="copyright">
                    <p>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Victim Musundire
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>


</div>
<!-- .site-wrap -->


<!-- loader -->
<div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#51be78"/></svg></div>

<script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('js/jquery-migrate-3.0.1.min.js')}}"></script>
<script src="{{asset('js/jquery-ui.js')}}"></script>
<script src="{{asset('js/popper.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/owl.carousel.min.js')}}"></script>
<script src="{{asset('js/jquery.stellar.min.js')}}"></script>
<script src="{{asset('js/jquery.countdown.min.js')}}"></script>
<script src="{{asset('js/bootstrap-datepicker.min.js')}}"></script>
<script src="{{asset('js/jquery.easing.1.3.js')}}"></script>
<script src="{{asset('js/aos.js')}}"></script>
<script src="{{asset('js/jquery.fancybox.min.js')}}"></script>
<script src="{{asset('js/jquery.sticky.js')}}"></script>
<script src="{{asset('js/jquery.mb.YTPlayer.min.js')}}"></script>


<script src="{{asset('js/main.js')}}"></script>

</body>

</html>
