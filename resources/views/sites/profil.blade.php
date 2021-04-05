@extends('layout.frontend')

@section('content')

@section('title','Profil SMK Nasional Bandung')

	<!-- start banner Area -->
    <section class="banner-area relative about-banner" id="home" style="background: url('{{ config('sekolah.image_profil_banner') }}');">	
        <div class="overlay overlay-bg"></div>
        <div class="container">				
            <div class="row d-flex align-items-center justify-content-center">
                <div class="about-content col-lg-12">
                    <h1 class="text-white">
                        Profil Kami				
                    </h1>	
                    <p class="text-white link-nav"><a href="/">Beranda </a>  <span class="lnr lnr-arrow-right"></span>  <a href="/profil"> Profil</a></p>
                </div>	
            </div>
        </div>
    </section>
    <!-- End banner Area -->	
    
    <br>
    <br>

    <!-- Start info Area -->
<section class="info-area pb-120">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-lg-6 no-padding info-area-left">
                <img class="img-fluid" src="{{ asset('/frontend') }}/img/ins1.jpg" alt="">
            </div>
            <div class="col-lg-6 info-area-right">
                <h1>Profile Kami</h1>
                <p>SMK Nasional berdiri sejak tahun 2008 yang ber alamat di Jalan Sadang Serang No. 17 Kota Bandung.</p>
                <br>
                <p>
                    Di awal berdiri, SMK Nasional hanya membuka 2 program kejuruan yakni, Multimedia dan Teknik Komputer Jaringan.
                    Kemudian, di tahun selanjutnya SMK Nasional menambah program kejuruan, yakni Otomatisasi dan Tata Kelola Perkantoran.  
                </p>
                <br>
                <p>
                    Di tahun 2020, SMK Nasional membuka 1 program kejuruan yakni, Elektromedik. Sehingga, Total hingga saat ini,
                    SMK Nasional mempunyai 4 program studi kejuruan yakni, Elektromedik, Multimedia, Otomatisasi dan Tata Kelola Perkantoran
                    dan, Teknik Komputer Jaringan.
                </p>
                <br>
                <p>
                    
                </p>
            </div>
        </div>
    </div>	
</section>
<!-- End info Area -->

<!-- Start course-mission Area -->
<section class="course-mission-area pb-120">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="menu-content pb-70 col-lg-8">
                <div class="title text-center">
                    <h1 class="mb-10">Visi Misi</h1>
                </div>
            </div>
        </div>							
        <div class="row">
            <div class="col-md-6 accordion-left">

                <!-- accordion 2 start-->
                <dl class="accordion">
                    <dt>
                        <a href="">Visi</a>
                    </dt>
                    <dd>
                        Mewujudkan peserta didik yang beriman, berakhlak mulia, kreatif, inovatif, berkemampuan
                    </dd>
                    <dt>
                        <a href="">Misi</a>
                    </dt>
                    <dd>
                        1. Menumbuhkan penghayatan terhadap ajaran agama yang dianut dan budaya bangsa yang dimilikinya sehingga bertakwa kepada Tuhan Yang Maha Esa dan menjadi sumber kearifan dalam bertindak.
                        <br>
                        <br>
                        2. Menumbuhkan penghayatan terhadap ajaran agama yang dianut dan budaya bangsa yang dimilikinya sehingga bertakwa kepada Tuhan Yang Maha Esa dan menjadi sumber kearifan dalam bertindak.
                        Melaksanakan pembelajaran dan pembimbingan secara efektif, efisien, adaptif sehingga setiap peserta didik dapat berkembang secara optimal sesuai potensi yang dimilikinya.
                        <br>
                        <br>
                        3. Mendorong dan membantu siswa mengenali dirinya, mengembangkan potensinya secara aktif, kreatif memanfaatkan situasi dan peluang yang ada serta inovatif dalam menyesuaikan perkembangan zaman.
                        <br>
                        <br>
                        4. Menyiapkan lulusan yang mandiri dan dan mampu menciptakan lapangan kerja.
                        <br>
                        <br>
                        5. Menanamkan jiwa kebangsaan, menghargai jasa para pahlawan, bekerja keras, bertanggung jawab, berjiwa ksatria serta berpikir dan bertindak cerdas.
                    </dd>                               
                </dl>
                <!-- accordion 2 end-->
            </div>
            <div class="col-md-6 video-right justify-content-center align-items-center d-flex relative">
                <div class="overlay overlay-bg"></div>
                <a class="play-btn" href="https://www.youtube.com/watch?v=ARA0AxrnHdM"><img class="img-fluid mx-auto" src="{{ asset('/frontend') }}/img/.jpg" alt=""></a>
            </div>
        </div>
    </div>	
</section>
<!-- End course-mission Area -->


	<!-- Start review Area -->
    <section class="review-area section-gap relative">
        <div class="overlay overlay-bg"></div>
        <div class="container">
            <div class="title text-center">
                <h1 class="mb-5">Testimoni</h1>
            </div>				
            <div class="row">
                <div class="active-review-carusel">
                    <div class="single-review item">
                        <div class="title justify-content-start d-flex">
                            <a href="#"><h4>Fannie Rowe</h4></a>
                        </div>
                        <p>
                            Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker. Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker.
                        </p>
                    </div>
                    <div class="single-review item">
                        <div class="title justify-content-start d-flex">
                            <a href="#"><h4>Hulda Sutton</h4></a>
                            <div class="star">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                            </div>
                        </div>
                        <p>
                            Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker. Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker.
                        </p>
                    </div>
                    <div class="single-review item">
                        <div class="title justify-content-start d-flex">
                            <a href="#"><h4>Fannie Rowe</h4></a>
                            <div class="star">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                            </div>
                        </div>
                        <p>
                            Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker. Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker.
                        </p>
                    </div>
                    <div class="single-review item">
                        <div class="title justify-content-start d-flex">
                            <a href="#"><h4>Hulda Sutton</h4></a>
                            <div class="star">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                            </div>
                        </div>
                        <p>
                            Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker. Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker.
                        </p>
                    </div>	
                    <div class="single-review item">
                        <div class="title justify-content-start d-flex">
                            <a href="#"><h4>Fannie Rowe</h4></a>
                            <div class="star">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                            </div>
                        </div>
                        <p>
                            Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker. Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker.
                        </p>
                    </div>
                    <div class="single-review item">
                        <div class="title justify-content-start d-flex">
                            <a href="#"><h4>Hulda Sutton</h4></a>
                            <div class="star">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                            </div>
                        </div>
                        <p>
                            Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker. Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker.
                        </p>
                    </div>
                    <div class="single-review item">
                        <img src="img/r1.png" alt="">
                        <div class="title justify-content-start d-flex">
                            <a href="#"><h4>Fannie Rowe</h4></a>
                            <div class="star">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                            </div>
                        </div>
                        <p>
                            Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker. Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker.
                        </p>
                    </div>
                    <div class="single-review item">
                        <div class="title justify-content-start d-flex">
                            <a href="#"><h4>Hulda Sutton</h4></a>
                            <div class="star">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                            </div>
                        </div>
                        <p>
                            Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker. Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker.
                        </p>
                    </div>																												
                </div>
            </div>
        </div>	
    </section>
    <!-- End review Area -->

            

@endsection