@extends('layout.frontend')

@section('content')

@section('title','Otomatisasi dan Tata Kelola Perkantoran')

	<!-- start banner Area -->
    <section class="banner-area relative about-banner" id="home" style="background: url('{{ config('sekolah.image_otkp_banner') }}');">	
        <div class="overlay overlay-bg"></div>
        <div class="container">				
            <div class="row d-flex align-items-center justify-content-center">
                <div class="about-content col-lg-12">
                    <h1 class="text-white">
                        Otomatisasi dan Tata Kelola Perkantoran		
                    </h1>	
                    <p class="text-white link-nav"><a href="/">Beranda </a>  <span class="lnr lnr-arrow-right"></span>  <a href="/otkp"> Otomatisasi dan Tata Kelola Perkantoran</a></p>
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
                            <img class="img-fluid" src="{{ asset('/frontend') }}/img/otkp.png" width="100px" height="auto" alt="">
                            &nbsp;
                            &nbsp;
                            Otomatisasi dan Tata Kelola Perkantoran
                        </a>
                    </div>
                    <div class="jq-tab-wrapper" id="horizontalTab">
                        <div class="jq-tab-menu">
                            <div class="jq-tab-title active" data-tab="1">Tentang OTKP</div>
                            <div class="jq-tab-title" data-tab="2">Kompetensi OTKP</div>
                        </div>
                        <div class="jq-tab-content-wrapper">
                            <div class="jq-tab-content active" data-tab="1">
                              Merupakan Kristalisasi dari program keahlian yang harus dikuasai oleh peserta didik untuk 
                              dapat bekerja sesuai dengan Standar Kompetensi Kerja Nasional Indonesia (SKKNI) atau Standar Paket Keahlian : Administrasi Perkantoran
                            </div>
                            <div class="jq-tab-content" data-tab="2">
                                <h3><b style="color: black">Kompetensi</b></h3>
                                <br>
                                    - Pengantar Ekonomi Bisnis
                                <br>
                                    - Pengantar Administrasi Perkantoran
                                <br>
                                    - Pengantar Akutansi
                                <br>
                                    - Korespondensi
                                <br>
                                    - Administrasi Humas dan Keprotokolan
                                <br>
                                    - Kearsipan
                                <br>
                                    - Simulasi Komunikasi Digital
                                <br>
                                    - Administrasi Kepegawaian
                                <br>
                                    - Administrasi Keuangan
                                <br>
                                    - Administrasi Sarana Prasarana 
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
                &nbsp;
                &nbsp;	
                <div class="single-popular-carusel col-lg-3 col-md-6">
                    <div class="thumb-wrap relative">
                        <div class="thumb relative">
                            <div class="overlay overlay-bg"></div>	
                            <img class="img-fluid" src="{{ asset('/frontend') }}/img/mmd.png" alt="">
                        </div>									
                    </div>
                    <div class="details">
                        <a href="/mmd">
                            <center>
                                <h4>
                                    Multimedia
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
                        <a href="/em">
                            <center>
                                <h4>
                                    Teknik Komputer Jaringan
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