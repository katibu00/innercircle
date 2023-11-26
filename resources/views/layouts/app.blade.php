<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('pageTitle') | InnerCircleTraders</title>

  <link rel="shortcut icon" href="/frontend/images/favicon.ico" type="image/x-icon">
  <link rel="icon" href="/frontend/images/favicon.ico" type="image/x-icon">
  <!--- End favicon-->

  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Public+Sans:wght@500;600;700;800&display=swap" rel="stylesheet">
  <!-- End google font  -->

  <link rel="stylesheet" href="/frontend/css/bootstrap.min.css" />
  <link rel="stylesheet" href="/frontend/css/fontawesome.css" />
  <link rel="stylesheet" href="/frontend/css/slick.css" />
  <link rel="stylesheet" href="/frontend/css/magnific-popup.css" />
  <link rel="stylesheet" href="/frontend/css/swiper-bundle.min.css" />
  <link rel="stylesheet" href="/frontend/css/icomoon-font.css" />
  <link rel="stylesheet" href="/frontend/css/animate.css" />


  <!-- Code Editor  -->

  <link rel="stylesheet" href="/frontend/css/main.css" />
  <link rel="stylesheet" href="/frontend/css/app.min.css" />
</head>

<body class="light">



@include('layouts.header')

@include('layouts.slider')

@yield('content')

  <div class="fugu-go-top">
    <img src="/frontend/images/svg/arrow-black-right.svg" alt="">
  </div>


  <!-- Footer  -->

@include('layouts.footer')



  <div class="fugu-preloader">
    <div class="fugu-spinner">
      <svg viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
        <circle cx="50" cy="50" r="46" />
      </svg>
    </div>
    <div class="fugu-title">loading...</div>
  </div>

  <!-- scripts -->
  <script src="/frontend/js/jquery-3.6.0.min.js"></script>
  <script src="/frontend/js/bootstrap.bundle.min.js"></script>
  <script src="/frontend/js/menu/menu.js"></script>
  <script src="/frontend/js/slick.js"></script>
  <script src="/frontend/js/isotope.pkgd.min.js"></script>
  <script src="/frontend/js/jquery.magnific-popup.min.js"></script>
  <script src="/frontend/js/swiper-bundle.min.js"></script>
  <script src="/frontend/js/countdown.js"></script>
  <script src="/frontend/js/wow.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?v=3&key=AIzaSyArZVfNvjnLNwJZlLJKuOiWHZ6vtQzzb1Y"></script>
  <script src="https://fbs.partners/banner/38613759c7bc68d9580b15bc71039e5d18718ca73f2d516943d349018af5123d/6089/script.js?ibp=33788856" id="38613759c7bc68d9580b15bc71039e5d18718ca73f2d516943d349018af5123d" async></script>
  <script src="/frontend/js/app.js"></script>
</body>
</html>