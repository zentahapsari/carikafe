@extends('main.main')
@section('title','Carikafe')
@section('container')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Carikafe</title>

        <!-- Fonts -->
        <link href="css/bootstrap-4.0.0.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="css/background.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700|Raleway" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    

    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">

    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:300,400,700,800|Open+Sans:300,400,700" rel="stylesheet">

    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="bootstrap/css/animate.css">
    <link rel="stylesheet" href="bootstrap/css/owl.carousel.min.css">

    <link rel="stylesheet" href="bootstrap/css/magnific-popup.css">
    <link rel="stylesheet" href="bootstrap/css/aos.css">

    <link rel="stylesheet" href="bootstrap/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="bootstrap/css/jquery.timepicker.css">

    <link rel="stylesheet" href="bootstrap/fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="bootstrap/fonts/fontawesome/css/font-awesome.min.css">

    <link rel="stylesheet" href="bootstrap/fonts/flaticon/font/flaticon.css">

    <!-- Theme Style -->
    <link rel="stylesheet" href="bootstrap/css/style.css">

    <!-- search -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400" rel="stylesheet" />
    <link href="search/css/main.css" rel="stylesheet" />

        <!-- Styles -->
        <style>
            html, body {
                background-image: '/images/cafe.jpg';
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 10vh;
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
                right: 130px;
                top: 30px;
            }
            .top-left {
                position: absolute;
                left: 150px;
                top: 10px;
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

            figcaption {
                display: block;
            }

            /* Container holding the image and the text */
            .box {
                position: relative;
                text-align: center;
                font-family: 'Nunito', sans-serif;
                color: black;
            }

/* Bottom left text */
            .kontak-kami  {
                position: absolute;
                top: 8%;
                left: 50%;
                transform: translate(-50%, -50%);
            }
            img.ava1{
                position: absolute;
                top: 70px;
                left: 90px;
            }

            .caption1{
                position: absolute;
                top: 100px;
                left: 200px;
            }

            img.ava2{
                position: absolute;
                top: 170px;
                left: 490px;
            }

            .caption2{
                position: absolute;
                top: 200px;
                left: 600px;
            }

            img.ava3{
                position: absolute;
                top: 270px;
                left: 90px;
            }

            .caption3{
                position: absolute;
                top: 300px;
                left: 200px;
            }

            img.ava4{
                position: absolute;
                top: 370px;
                left: 490px;
            }

            .caption4{
                position: absolute;
                top: 400px;
                left: 600px;
            }  

            .tentang {
                position: absolute;
                top: 100px;
                right: 350px;
            }

            .isi-tentang {
                position: absolute;
                bottom: 300px;
                right: 160px;
            }


        </style>
    </head>
    <body>


  <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top" >
        @if (Route::has('login'))

 
                    @auth
                        <a href="{{ url('/infokafe') }}">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>


                        @if (Route::has('register'))
<!--                             <a href="{{ route('register') }}">Register</a>
 -->                        @endif
                    @endauth
                </div>
            @endif
      </a>
    </div>
  </nav>
                  

  <!-- Header -->
  <header class="masthead">
    <div class="container">
      <div class="intro-text">
        <img src="images/Logo1.png" alt="" width="50%" height="3%" class="intro-lead-in"/>
<!--         <div class="intro-lead-in" style="color: brown">Selamat Mencari!</div>
        <div class="intro-heading text-uppercase" style="color: #36260f">Selamat Mencari!</div> -->
        <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
                <div class="s132">
      <form method="get" action="/kafe/cari">
        <div class="inner-form">
          <div class="input-field first-wrap">
            
          </div><!-- <div class="input-select">
              <select data-trigger="" name="choices-single-defaul">
                <option placeholder="">Daerah</option>
                <option value="1"> Kota Yogyakarta
                <option value="2"> Sleman
                <option value="3"> Bantul
                <option value="4"> Gunungkidul
                <option value="5"> Kulon Progo
              </select>
            </div> -->
          <div class="input-field second-wrap">
            <input id="search" type="text" placeholder="Masukkan nama kafe lalu klik enter" name="cari" />
          </div>
          <div class="input-field third-wrap">
<!--             <button class="btn-search" type="submit" name="cari">Cari</button>
 -->          </div>
        </div>
      </form>
    </div>
          </div>
        </div>
      </div> 
      </div>
    </div>
  </header>

<!-- searching 
    <section class="bg-light page-section" id="searching">
      
    </section>
 

  
  <!-- Portfolio Grid -->
  <section class="bg-light page-section" id="portfolio">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">KAFE-KAFE</h2>
          <h3 class="section-subheading text-muted">Daerah Istimewa Yogyakarta</h3>
        </div>
      </div>
      <div class="row">
        @foreach($cafes as $c)
        <div class="col-md-4 col-sm-6 portfolio-item">
          <a data-toggle="modal" >
            <div class="portfolio-hover">
              <div class="portfolio-hover-content"></div>
            </div>
            <img class="img-fluid" src="{{url('/data_file/'.$c->gambar)}}">
          </a>
          <div class="portfolio-caption">
            
            <h4>{{$c->nama}}</h4>
            <p class="text-muted">{{$c->daerah}}</p>
              <a class="view-more-btn" href="/post/{{$c->id}}" style="padding: 3px 10px; margin: 10px 0 30px; transition: all .3s; box-shadow: 0px 0px 2px rgba(0,0,0,.4); background: #8B4513;">Lihat Informasi</a>
                  <!--
                  <ul class="post-footer">
                  <li><a href="#"><i class="ion-heart"></i>57</a></li>
                  <li><a href="#"><i class="ion-chatbubble"></i>6</a></li>
                  <li><a href="#"><i class="ion-star"></i>5</a></li>
                </ul>
              -->
          </div>
         
        </div>
           @endforeach

    </div>
  </section>
          

            </div>

        </div>


        <script src="js/jquery-3.2.1.min.js"></script> <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/popper.min.js"></script> 
        <script src="js/bootstrap-4.0.0.js"></script>
        <script src="css/background.css"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>

    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/jquery.timepicker.min.js"></script>
    
    <script src="js/jquery.animateNumber.min.js"></script>
    

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
    <script src="js/google-map.js"></script>

    <script src="js/main.js"></script>

    <script src="bootstrap/js/jquery-3.2.1.min.js"></script>
    <script src="bootstrap/js/jquery-migrate-3.0.1.min.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="bootstrap/js/owl.carousel.min.js"></script>
    <script src="bootstrap/js/jquery.waypoints.min.js"></script>

    <script src="bootstrap/js/bootstrap-datepicker.js"></script>
    <script src="bootstrap/js/jquery.timepicker.min.js"></script>
    <script src="bootstrap/js/jquery.stellar.min.js"></script>

    <script src="bootstrap/js/aos.js"></script>
    

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>

    <script src="bootstrap/js/main.js"></script>

      <!-- Bootstrap core JavaScript -->
  <script src="{{asset('app-assets/vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('app-assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

  <!-- Plugin JavaScript -->
  <script src="{{asset('app-assets/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

  <!-- Contact form JavaScript -->
  <script src="{{asset('app-assets/js/jqBootstrapValidation.js')}}"></script>
  <script src="{{asset('app-assets/js/contact_me.js')}}"></script>

  <!-- Custom scripts for this template -->
  <script src="{{asset('app-assets/js/agency.min.js')}}"></script>



    </body>
</html>


