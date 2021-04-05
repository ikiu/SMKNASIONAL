@extends('layout.frontend')

@section('content')

@section('title','Multimedia')

	<!-- start banner Area -->
    <section class="banner-area relative about-banner" id="home" style="background: url('{{ config('sekolah.image_mm_banner') }}');">	
        <div class="overlay overlay-bg"></div>
        <div class="container">				
            <div class="row d-flex align-items-center justify-content-center">
                <div class="about-content col-lg-12">
                    <h1 class="text-white">
                        Multimedia		
                    </h1>	
                    <p class="text-white link-nav"><a href="/">Beranda </a>  <span class="lnr lnr-arrow-right"></span>  <a href="/mmd"> Multimedia</a></p>
                </div>	
            </div>
        </div>
    </section>
    <!-- End banner Area -->	

    <!-- Start course-details Area -->
    <section class="course-details-area pt-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 left-contents">
                    <div class="main-image">
                        <a href="/" style="font-family: 'Viga', sans-serif; font-size: 50px; color: black">
                            <img class="img-fluid" src="{{ asset('/frontend') }}/img/mmd.png" width="100px" height="auto" alt="">
                            &nbsp;
                            &nbsp;
                            Multimedia
                        </a>
                    </div>
                    <div class="jq-tab-wrapper" id="horizontalTab">
                        <div class="jq-tab-menu">
                            <div class="jq-tab-title active" data-tab="1">Tentang Multimedia</div>
                            <div class="jq-tab-title" data-tab="2">Kompetensi Multimedia</div>
                        </div>
                        <div class="jq-tab-content-wrapper">
                            <div class="jq-tab-content active" data-tab="1">
                               Kompetensi Keahlian Multimedia di SMK Nasional Bandung Secara Khusus memekali peserta didik dengan keterampilan,
                               pengetahuan dan sikap agar kompeten dalam : 
                                <br>
                               - Mengoperasikan <i>Software peripheral digital illustration, digital imaging dan web design</i>  
                                <br>
                                - Mengoperasikan <i>Software & peripheral Multimedia presentation, 2D animation & 3D animation</i>
                                <br>
                                - Mengoperasikan <i>Software peripheral digital audio, video & visual effect</i>
                                <br>
                                <br>
                            </div>
                            <div class="jq-tab-content" data-tab="2">
                                <h3><b style="color: black">Kompetensi</b></h3>
                                <br>
                                    - Desain Multimedia
                                <br>
                                    - Pengolahan Citra Digital
                                <br>
                                    - Teknik Animasi 2D & 3D
                                <br>
                                    - Komposisi Foto Digital
                                <br>
                                    - Teknik Pengambilan Gambar Bergerak
                                <br>
                                    - Teknik Pengolahan Video & Audio
                                <br>
                                    - Desain Multimedia Interaktif 
                            </div>                               
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 right-contents">
                    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                            <img src="..." class="d-block w-100" alt="...">
                          </div>
                          <div class="carousel-item">
                            <img src="..." class="d-block w-100" alt="...">
                          </div>
                          <div class="carousel-item">
                            <img src="..." class="d-block w-100" alt="...">
                          </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>	
    </section>
    <!-- End course-details Area -->
    

    <!-- Start popular-courses Area --> 
    <section class="popular-courses-area section-gap courses-page">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="menu-content pb-70 col-lg-8">
                    <div class="title text-center">
                        <h1 class="mb-10">Program Studi</h1>
                        <p>Telusuri yang lainnya</p>
                    </div>
                </div>
            </div>						
            <div class="row">	
                <div class="single-popular-carusel col-lg-3 col-md-6">
                    <div class="thumb-wrap relative">
                        <div class="thumb relative">
                            <div class="overlay overlay-bg"></div>	
                            <img class="img-fluid" src="{{ asset('/frontend') }}/img/otkp.png" alt="">
                        </div>									
                    </div>
                    <div class="details">
                        <a href="/otkp">
                            <center>
                                <h4>
                                    Otomatisasi dan Tata Kelola Perkantoran
                                </h4>
                            </center>
                        </a>
                    </div>
                </div>
                &nbsp;
                &nbsp;	
                <div class="single-popular-carusel col-lg-3 col-md-6">
                    <div class="thumb-wrap relative">
                        <div class="thumb relative">
                            <div class="overlay overlay-bg"></div>	
                            <img class="img-fluid" src="{{ asset('/frontend') }}/img/tkj.png" alt="">
                        </div>									
                    </div>
                    <div class="details">
                        <a href="/tkj">
                            <center>
                                <h4>
                                    Teknik Komputer Jaringan
                                </h4>
                            </center>
                        </a>
                    </div>
                </div>
                &nbsp;
                &nbsp;
                <div class="single-popular-carusel col-lg-3 col-md-6">
                    <div class="thumb-wrap relative">
                        <div class="thumb relative">
                            <div class="overlay overlay-bg"></div>	
                            <img class="img-fluid" src="{{ asset('/frontend') }}/img/em.png" alt="">
                        </div>									
                    </div>
                    <div class="details">
                        <a href="/em">
                            <center>
                                <h4>
                                    Elektromedik
                                </h4>
                            </center>
                        </a>
                    </div>
                </div>
            </div>
        </div>	
    </section>
    <!-- End popular-courses Area -->					

@endsection