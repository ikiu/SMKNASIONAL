<!DOCTYPE html>
<html lang="zxx" class="no-js">
<head>
  <!-- Mobile Specific Meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Favicon-->
  <link rel="shortcut icon" href="{{ asset('/frontend') }}/img/logo-smk.png">
  <!-- Author Meta -->
  <meta name="author" content="colorlib">
  <!-- Meta Description -->
  <meta name="description" content="Official Website SMK Nasional Bandung">
  <!-- Meta Keyword -->
  <meta name="keywords" content="SMK Nasional Bandung, Nasional Vocational School">
  <!-- meta character set -->
  <meta charset="UTF-8">
  <!-- Site Title -->
  <title>@yield('title')</title>

  <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@500&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Lora&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=PT+Serif:ital@1&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Viga&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Crimson+Text&display=swap" rel="stylesheet">
    <!--
    CSS
    ============================================= -->
    <link rel="stylesheet" href="{{ asset('/frontend') }}/css/linearicons.css">
    <link rel="stylesheet" href="{{ asset('/frontend') }}/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('/frontend') }}/css/bootstrap.css">
    <link rel="stylesheet" href="{{ asset('/frontend') }}/css/magnific-popup.css">
    <link rel="stylesheet" href="{{ asset('/frontend') }}/css/nice-select.css">							
    <link rel="stylesheet" href="{{ asset('/frontend') }}/css/animate.min.css">
    <link rel="stylesheet" href="{{ asset('/frontend') }}/css/owl.carousel.css">			
    <link rel="stylesheet" href="{{ asset('/frontend') }}/css/jquery-ui.css">			
    <link rel="stylesheet" href="{{ asset('/frontend') }}/css/main.css">
  </head>
  <body>	
    <header id="header" id="home">
      {{-- <div class="header-top">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 col-sm-6 col-8 header-top-left no-padding">
              <ul>
              <li><a href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
              </ul>			
            </div>
            <div class="col-lg-6 col-sm-6 col-4 header-top-right no-padding">
              <a href="tel:+953 012 3654 896"><span class="lnr lnr-phone-handset"></span> <span class="text">+953 012 3654 896</span></a>
              <a href="mailto:support@colorlib.com"><span class="lnr lnr-envelope"></span> <span class="text">support@colorlib.com</span></a>			
            </div>
          </div>			  					
        </div>
    </div> --}}
      <div class="container main-menu">
        <div class="row align-items-center justify-content-between d-flex">
          <div id="logo">
            <a href="/" style="font-family: 'Viga', sans-serif; font-size: 20px; color: #ffff"><img src="{{ asset('/frontend') }}/img/logo-smk.png" width="50px" height="auto" alt="" title="" /> &nbsp; SMK Nasional Bandung</a>
          </div>
          <nav id="nav-menu-container">
            <ul class="nav-menu">
              <li><a href="/" style="font-family: 'Raleway', sans-serif;">Beranda</a></li>
              <li class="menu-has-children"><a href="" style="font-family: 'Raleway', sans-serif;">Profil Kami</a>
                <ul>
                  <li><a href="/profil" style="font-family: 'Raleway', sans-serif;">Profil Sekolah</a></li>
                  <li><a href="/instruktur" style="font-family: 'Raleway', sans-serif;">Instruktur</a></li>
                  <li><a href="/sapras" style="font-family: 'Raleway', sans-serif;">Sarana & Pra Sarana</a></li>
                  <li><a href="/kegiatan" style="font-family: 'Raleway', sans-serif;">Kegiatan</a>
                    <ul>
                      <li>
                        <a href="/eskul" style="font-family: 'Raleway', sans-serif;">Ekstrakurikuler</a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </li>	
              <li class="menu-has-children"><a href="" style="font-family: 'Raleway', sans-serif;">Kompetensi</a>
                <ul>
                    <li><a href="/em" style="font-family: 'Raleway', sans-serif;">Elektromedik</a></li>		
                    <li><a href="/mmd" style="font-family: 'Raleway', sans-serif;">Multimedia</a></li>		
                    <li><a href="/tkj" style="font-family: 'Raleway', sans-serif;">Teknik Komputer Jaringan</a></li>
                    <li><a href="/otkp" style="font-family: 'Raleway', sans-serif;">Otomatisasi dan Tata Kelola Perkantoran</a></li>				                		
                </ul>
              </li>					          					          		          
              <li><a href="/news" style="font-family: 'Raleway', sans-serif;">News & Event</a></li>
              <li><a href="#" class="btn btn-primary" style="font-family: 'Raleway', sans-serif;">Info PPDB</a></li>
            </ul>
          </nav><!-- #nav-menu-container -->		    		
        </div>
      </div>
    </header><!-- #header -->

    @yield('content')
          
    <!-- start footer Area -->		
    <footer class="footer-area section-gap">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-4 col-xs-12">
            <div class="single-footer-widget">
              <h4>Created By :</h4>
             <img src="{{ asset('/frontend/img/logo-smk.png') }}" width="100px" height="auto" alt="">
             &nbsp;
             &nbsp;
             &nbsp;
             <img src="{{ asset('/frontend/img/nvs.png') }}" width="100px" height="auto" alt="">	
             <br>
             <br>
            </div>
          </div>
          <div class="col-lg-4 col-md-4 col-xs-12">
            <div class="single-footer-widget">
              <h4>Informasi</h4>
              <ul style="color: #ffff">
                <li><i class="fa fa-map-marker"></i><a href="" style="font-family: 'Crimson Text', serif; font-size: 16px; color: #ffff">&nbsp;  Jl. Sadang Serang No. 17 Bandung 40134</a></li>
                <li><i class="fa fa-phone"></i><a href="" style="font-family: 'Crimson Text', serif; font-size: 16px; color: #ffff">&nbsp; (022) 20458616</a></li>
                <li><i class="fa fa-envelope"></i><a href=""  style="font-family: 'Crimson Text', serif; font-size: 16px; color: #ffff" >&nbsp; smknasbdg@gmail.com</a></li>
                <li><i class="fa fa-calendar"> </i><a href="" style="font-family: 'Crimson Text', serif; font-size: 16px; color: #ffff">&nbsp; Senin - Sabtu 08:00 - 16:00</a></li>
              </ul>								
            </div>
          </div>	
          <div class="col-lg-4 col-md-4 col-xs-12">
            <div class="single-footer-widget">
              <h4>Scan Me</h4>
                <img src="{{ asset('/frontend/img/PPDB.png') }}" width="100px" height="auto" alt="">
                &nbsp;
                &nbsp;
                <img src="{{ asset('/frontend/img/Gmaps.png') }}" width="100px" height="auto" alt="">
            </div>
          </div>																												
        </div>
        <div class="footer-bottom row align-items-center justify-content-between">
          <p class="footer-text m-0 col-lg-6 col-md-12" style="font-family: 'PT Serif', serif; font-size: 18px;" ><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | by SMK Nasional Bandung
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          <div class="col-lg-6 col-sm-12 footer-social">
            <a href="https://www.facebook.com/Smk-Nasional-Bandung-381393871924311"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="https://www.instagram.com/smknasionalbandung"><i class="fa fa-instagram"></i></a>
            <a href="https://www.youtube.com/channel/UCtwMIlaH08cca4_jcM-af-w"><i class="fa fa-youtube"></i></a>
          </div>
        </div>						
      </div>
    </footer>	
    <!-- End footer Area -->	


    <script src="{{ asset('/frontend') }}/js/vendor/jquery-2.2.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="{{ asset('/frontend') }}/js/vendor/bootstrap.min.js"></script>			
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
    <script src="{{ asset('/frontend') }}/js/easing.min.js"></script>			
    <script src="{{ asset('/frontend') }}/js/hoverIntent.js"></script>
    <script src="{{ asset('/frontend') }}/js/superfish.min.js"></script>	
    <script src="{{ asset('/frontend') }}/js/jquery.ajaxchimp.min.js"></script>
    <script src="{{ asset('/frontend') }}/js/jquery.magnific-popup.min.js"></script>	
      <script src="{{ asset('/frontend') }}/js/jquery.tabs.min.js"></script>						
    <script src="{{ asset('/frontend') }}/js/jquery.nice-select.min.js"></script>	
    <script src="{{ asset('/frontend') }}/js/owl.carousel.min.js"></script>									
    <script src="{{ asset('/frontend') }}/js/mail-script.js"></script>	
    <script src="{{ asset('/frontend') }}/js/main.js"></script>	
  </body>
</html>