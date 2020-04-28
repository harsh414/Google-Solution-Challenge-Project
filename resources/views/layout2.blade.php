<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="img/favicon.png" type="image/png">
    <title>Seelife Charity</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="vendors/linericon/style.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/lightbox/simpleLightbox.css">
    <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
    <!-- main css -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    @yield('style')
</head>
<body>

<!--================ Start Header Menu Area =================-->
<header class="header_area">
    <div class="main_menu">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <a class="navbar-brand logo_h" href="index.html"><img src="img/ico.jpg" alt="" style="
                            width: 80px;
                            height: 60px;
                            border-radius:999px;
                     "></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                        <ul class="nav navbar-nav menu_nav ml-auto">
                            <li class="{{ Request::path() == 'home' ? 'nav-item active' : 'nav-item' }}"><a class="nav-link" href="/">Home</a></li>
                            <li class="{{ Request::path() == 'about' ? 'nav-item active' : 'nav-item' }}"><a class="nav-link" href="about">About</a></li>
                            <li class="{{ Request::path() == 'inform' ? 'nav-item active' : 'nav-item' }}"><a class="nav-link" href="inform">Inform Us</a>
                            <li class="{{ Request::path() == 'register' ? 'nav-item active' : 'nav-item' }}"><a class="nav-link" href="register">Become Volunteer</a></li>
                            <li class="{{ Request::path() == 'donate' ? 'nav-item active' : 'nav-item' }}"><a class="nav-link" href="donate">Donate</a></li>
                            <li class="{{ Request::path() == 'cases' ? 'nav-item active' : 'nav-item' }}"><a class="nav-link" href="cases">Cases so far</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</header>
<!--================ End Header Menu Area =================-->

<!--================ Home Banner Area =================-->

@yield('mysec')
<!--================ End Home Banner Area =================-->

<!--================ Start About Us Area =================-->


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/popper.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/stellar.js"></script>
<script src="vendors/lightbox/simpleLightbox.min.js"></script>
<script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
<script src="js/jquery.ajaxchimp.min.js"></script>
<script src="js/mail-script.js"></script>
<script src="js/countdown.js"></script>
<!--gmaps Js-->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
<script src="js/gmaps.min.js"></script>
<script src="js/theme.js"></script>
</body>
</html>
