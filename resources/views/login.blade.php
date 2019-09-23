<!DOCTYPE HTML>
<html lang="en">
<head>
    <title>TITLE</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">


    <!-- Font -->


    <link rel="stylesheet" href="{{asset('https://fonts.googleapis.com/css?family=Open+Sans:400,700%7CPoppins:400,500')}}">

    <link rel="stylesheet" href="{{asset('common-css/ionicons.css')}}">

    <link rel="stylesheet" href="{{asset('common-css/jquery.classycountdown.css')}}">

    <link rel="stylesheet" href="{{asset('commingsoon/css/styles.css')}}">

    <link rel="stylesheet" href="{{asset('commingsoon/css/responsive.css')}}">

</head>
<body>

<div class="main-area">

    <section class="left-section" style="background-image: url(images/victimm.jpg)">

{{--        <div class="display-table center-text">--}}
{{--            <div class="display-table-cell">--}}

{{--                <div id="normal-countdown" data-date="2018/01/01"></div>--}}

{{--            </div><!-- display-table-cell -->--}}
{{--        </div><!-- display-table -->--}}

    </section><!-- left-section -->


    <section class="right-section full-height">

        <a class="logo" href="#"><img src="images/logo.png" alt="logo"></a>

        <div class="display-table">
            <div class="display-table-cell">
                <div class="main-content">
                    <h1 class="title"><b>Section upgrade.</b></h1>
                    <p>This website section is currently undergoing scheduled maintenance.
                        </p>


                    <p class="post-desc">It will be back shortly.</p>
                </div><!-- main-content -->
            </div><!-- display-table-cell -->
        </div><!-- display-table -->

        <ul class="footer-icons">
            <li>Stay in touch : </li>
            <li><a href="{{url('contactvic')}}" class="text-danger">Click here to go to Contact Page</a></li>


        </ul>

    </section><!-- right-section -->

</div><!-- main-area -->

<!-- SCIPTS -->


<script src="{{asset('common-js/jquery-3.1.1.min.js')}}"></script>
<script src="{{asset('common-js/jquery.countdown.min.js')}}"></script>
<script src="{{asset('common-js/scripts.js')}}"></script>

</body>
</html>
