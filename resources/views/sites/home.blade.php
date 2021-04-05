@extends('layout.frontend')

@section('content')

@section('title','SMK Nasional Bandung')

    <!-- start banner Area -->
    <section class="banner-area relative" id="home" style="background: url('{{ config('sekolah.image_banner_url') }}');">
		<div class="overlay overlay-bg"></div>	
		<div class="container">
		  <div class="row fullscreen d-flex align-items-center justify-content-between">
			<div class="banner-content col-lg-9 col-md-12">
			  <h1 class="text-uppercase">
				Selamat Datang Di Official Website SMK Nasional Bandung 			
			  </h1>
			  <p class="pt-10 pb-10" style="font-family: 'Lora', serif; font-size: 20px;">
				We Can Do It.
			  </p>
			  <a href="#" class="primary-btn text-uppercase">Telusuri</a>
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
                <img class="img-fluid" src="{{ asset('/frontend') }}/img/dedy.jpeg" alt="">
				<br>
				<br>
				<center>
					<h3>Ir. Dedy Hermadi</h3>
					<br>
					<h5>Kepala Sekolah SMK Nasional Bandung</h5>
				</center>
            </div>
            <div class="col-lg-6 info-area-right">
                <h1>Sambutan Kepala Sekolah</h1>
                <p>Selamat datang di website resmi SMK Nasional Bandung.</p>
                <br>
                <p>
                    Website ini kami tujukan untuk seluruh Instruktur, Karyawan, Siswa serta Masyarakat umum agar dapat mengakses seluruh informasi
					tentang profil, aktifitas/kegiatan serta fasilitas sekolah.
                </p>
                <br>
                <p>
                    Tentunya website ini masih terdapat banyak kekurangan. semoga dengan digunakan nya website ini sebagai salah satu media 
					komunikasi dan dapat dijadikan sebagai wahana interaksi yang positif antara civitas akademik maupun masyarakat pada umumnya.
					Mari, kita terus bekerja dan berkarya seiring dengan perkembangan teknologi guna menyiapkan generasi penerus bangsa yang berintegrasi dan berprestasi.
					<br>
					<br>

					SMK Nasional, <i>We Can Do It</i>
                </p>
                <br>
                <p>
                    
                </p>
            </div>
        </div>
    </div>	
</section>
<!-- End info Area -->

	  <section class="upcoming-event-area section-gap">
		<div class="container">
			<div class="row d-flex justify-content-center">
				<div class="menu-content pb-70 col-lg-8">
					<div class="title text-center">
						<h1 class="mb-10">Program Studi</h1>
					</div>
				</div>
			</div>								
			<div class="row">
				<div class="active-upcoming-event-carusel">
					<div class="single-carusel row align-items-center">
						<div class="col-12 col-md-6 thumb">
							<img class="img-fluid" src="{{ asset('/frontend') }}/img/EM.png" width="50px" height="50px" alt="">
						</div>
						<div class="detials col-12 col-md-6">
							<a href="#"><h4>Elektromedik</h4></a>
							<p>
								Bagi Kalian yang ingin mempelajari ilmu pengetahuan dan teknologi dan menerapkannya di bidang kesehatan ?
								Nah, Maka Jurusan <b>Elektromedik</b> sangat cocok untuk kalian yang ingin memahami IPTEK dan menerapkannya di bidang kesehatan.
							</p>
						</div>
					</div>
					<div class="single-carusel row align-items-center">
						<div class="col-12 col-md-6 thumb">
							<img class="img-fluid" src="{{ asset('/frontend') }}/img/mmd.png" width="50px" height="50px" alt="">
						</div>
						<div class="detials col-12 col-md-6">
							<a href="#"><h4>Multimedia</h4></a>
							<p>
								Kalian suka <i>photography</i> atau <i>Desain</i> ? Pas Banget jika kalian memilih jurusan <b>Multimedia</b>
								Disini, selain belajar <i>photography</i>, kalian juga akan mempelajari Desain Multimedia, Animasi 2D & 3D, 
								Teknik Pengambilan Gambar bergerak, Teknik Pengolahan Audio & Video, dll.
							</p>
						</div>
					</div>	
					<div class="single-carusel row align-items-center">
						<div class="col-12 col-md-6 thumb">
							<img class="img-fluid" src="{{ asset('/frontend') }}/img/otkp.png" width="50px" height="50px" alt="">
						</div>
						<div class="detials col-12 col-md-6">
							<a href="#"><h4>Otomatisasi dan Tata Kelola Perkantoran</h4></a>
							<p>
								Ingin menjadi seorang Akuntan yang handal ? mungkin, jurusan <b>Otomatisasi dan Tata Kelola Perkantoran</b> cocok untuk kalian. 
								Disini, kalian akan mempelajari, Pengantar Ekonomi Bisnis, Pengantar Akuntansi, Korespondensi, dll.
							</p>
						</div>
					</div>	
					<div class="single-carusel row align-items-center">
						<div class="col-12 col-md-6 thumb">
							<img class="img-fluid" src="{{ asset('/frontend') }}/img/tkj.png" width="50px" height="50px" alt="">
						</div>
						<div class="detials col-12 col-md-6">
							<a href="#"><h4>Teknik Komputer Jaringan</h4></a>
							<p>
								Ingin tahu lebih dalam mengenai seperti apa Jaringan Komputer, lalu bagaimana membuat sebuah <i>website</i> dll ?
								<i>So, Join with Computer Networking and Engineering</i> alias <b>Teknik Komputer Jaringan.</b>  
								Disini, kalian akan mempelajari perakitan komputer, jaringan dasar, pemrograman web, dll
							</p>
						</div>
					</div>																							
				</div>
			</div>
		</div>	
	</section>

	    {{-- <!-- Start blog Area -->
		<section class="blog-area section-gap" id="blog">
			<div class="container">
			  <div class="row d-flex justify-content-center">
				<div class="menu-content pb-70 col-lg-8">
				  <div class="title text-center">
					<h1 class="mb-10">Latest posts from our Blog</h1>
					<p>In the history of modern astronomy there is.</p>
				  </div>
				</div>
			  </div>					
			  <div class="row">
				<div class="col-lg-3 col-md-6 single-blog">
				  <div class="thumb">
					<img class="img-fluid" src="img/b1.jpg" alt="">								
				  </div>
				  <p class="meta">25 April, 2018  |  By <a href="#">Mark Wiens</a></p>
				  <a href="blog-single.html">
					<h5>Addiction When Gambling Becomes A Problem</h5>
				  </a>
				  <p>
					Computers have become ubiquitous in almost every facet of our lives. At work, desk jockeys spend hours in front of their.
				  </p>
				  <a href="#" class="details-btn d-flex justify-content-center align-items-center"><span class="details">Details</span><span class="lnr lnr-arrow-right"></span></a>		
				</div>
				<div class="col-lg-3 col-md-6 single-blog">
				  <div class="thumb">
					<img class="img-fluid" src="img/b2.jpg" alt="">								
				  </div>
				  <p class="meta">25 April, 2018  |  By <a href="#">Mark Wiens</a></p>
				  <a href="blog-single.html">
					<h5>Computer Hardware Desktops And Notebooks</h5>
				  </a>
				  <p>
					Ah, the technical interview. Nothing like it. Not only does it cause anxiety, but it causes anxiety for several different reasons. 
				  </p>
				  <a href="#" class="details-btn d-flex justify-content-center align-items-center"><span class="details">Details</span><span class="lnr lnr-arrow-right"></span></a>						
				</div>
				<div class="col-lg-3 col-md-6 single-blog">
				  <div class="thumb">
					<img class="img-fluid" src="img/b3.jpg" alt="">								
				  </div>
				  <p class="meta">25 April, 2018  |  By <a href="#">Mark Wiens</a></p>
				  <a href="blog-single.html">
					<h5>Make Myspace Your Best Designed Space</h5>
				  </a>
				  <p>
					Plantronics with its GN Netcom wireless headset creates the next generation of wireless headset and other products such as wireless.
				  </p>
				  <a href="#" class="details-btn d-flex justify-content-center align-items-center"><span class="details">Details</span><span class="lnr lnr-arrow-right"></span></a>									
				</div>
				<div class="col-lg-3 col-md-6 single-blog">
				  <div class="thumb">
					<img class="img-fluid" src="img/b4.jpg" alt="">								
				  </div>
				  <p class="meta">25 April, 2018  |  By <a href="#">Mark Wiens</a></p>
				  <a href="blog-single.html">
					<h5>Video Games Playing With Imagination</h5>
				  </a>
				  <p>
					About 64% of all on-line teens say that do things online that they wouldn’t want their parents to know about.   11% of all adult internet 
				  </p>
				  <a href="#" class="details-btn d-flex justify-content-center align-items-center"><span class="details">Details</span><span class="lnr lnr-arrow-right"></span></a>							
				</div>							
			  </div>
			</div>	
		  </section>
		  <!-- End blog Area --> --}}

		  	<!-- Start popular-course Area -->
			<section class="popular-course-area section-gap">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-70 col-lg-8">
							<div class="title text-center">
								<h1 class="mb-10">Partner Kami</h1>
							</div>
						</div>
					</div>						
					<div class="row">
						<div class="active-popular-carusel">
							<div class="single-popular-carusel">
								<div class="thumb-wrap relative">
									<div class="thumb relative">
										<div class="overlay overlay-bg"></div>	
										<img class="img-fluid" src="{{ asset('/frontend') }}/img/edulogy.png" alt="">
									</div>									
								</div>
							</div>	
							<div class="single-popular-carusel">
								<div class="thumb-wrap relative">
									<div class="thumb relative">
										<div class="overlay overlay-bg"></div>	
										<img class="img-fluid" src="{{ asset('/frontend') }}/img/netkrom.jpg" alt="">
									</div>									
								</div>
							</div>	
							<div class="single-popular-carusel">
								<div class="thumb-wrap relative">
									<div class="thumb relative">
										<div class="overlay overlay-bg"></div>	
										<img class="img-fluid" src="{{ asset('/frontend') }}/img/piksi.jpg" alt="">
									</div>									
								</div>
							</div>	
							<div class="single-popular-carusel">
								<div class="thumb-wrap relative">
									<div class="thumb relative">
										<div class="overlay overlay-bg"></div>	
										<img class="img-fluid" src="{{ asset('/frontend') }}/img/pptik.png" alt="">
									</div>									
								</div>
							</div>
							<div class="single-popular-carusel">
								<div class="thumb-wrap relative">
									<div class="thumb relative">
										<div class="overlay overlay-bg"></div>	
										<img class="img-fluid" src="{{ asset('/frontend') }}/img/isi.jpg" alt="">
									</div>									
								</div>
							</div>	
							<div class="single-popular-carusel">
								<div class="thumb-wrap relative">
									<div class="thumb relative">
										<div class="overlay overlay-bg"></div>	
										<img class="img-fluid" src="{{ asset('/frontend') }}/img/ieduc.png" alt="">
									</div>									
								</div>
							</div>	
							<div class="single-popular-carusel">
								<div class="thumb-wrap relative">
									<div class="thumb relative">
										<div class="overlay overlay-bg"></div>	
										<img class="img-fluid" src="{{ asset('/frontend') }}/img/jayakarta.jpg" alt="">
									</div>									
								</div>
							</div>							
						</div>
					</div>
				</div>	
			</section>
			<!-- End popular-course Area -->

			<!-- Start events-list Area -->
			<section class="events-list-area section-gap event-page-lists">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-70 col-lg-8">
							<div class="title text-center">
								<h1 class="mb-10">Berita & Event SMK Nasional Bandung</h1>
							</div>
						</div>
					</div>
					<div class="row align-items-center">
						<div class="col-lg-6 pb-30">
							<div class="single-carusel row align-items-center">
								<div class="col-12 col-md-6 thumb">
									<img class="img-fluid" src="img/e1.jpg" alt="">
								</div>
								<div class="detials col-12 col-md-6">
									<p>25th February, 2018</p>
									<a href="event-details.html"><h4>The Universe Through
									A Child S Eyes</h4></a>
									<p>
										For most of us, the idea of astronomy is something we directly connect to “stargazing”, telescopes and seeing magnificent displays in the heavens.
									</p>
								</div>
							</div>
						</div>
						<div class="col-lg-6 pb-30">
							<div class="single-carusel row align-items-center">
								<div class="col-12 col-md-6 thumb">
									<img class="img-fluid" src="img/e2.jpg" alt="">
								</div>
								<div class="detials col-12 col-md-6">
									<p>25th February, 2018</p>
									<a href="event-details.html"><h4>The Universe Through
									A Child S Eyes</h4></a>
									<p>
										For most of us, the idea of astronomy is something we directly connect to “stargazing”, telescopes and seeing magnificent displays in the heavens.
									</p>
								</div>
							</div>
						</div>
						<div class="col-lg-6 pb-30">
							<div class="single-carusel row align-items-center">
								<div class="col-12 col-md-6 thumb">
									<img class="img-fluid" src="img/e1.jpg" alt="">
								</div>
								<div class="detials col-12 col-md-6">
									<p>25th February, 2018</p>
									<a href="event-details.html"><h4>The Universe Through
									A Child S Eyes</h4></a>
									<p>
										For most of us, the idea of astronomy is something we directly connect to “stargazing”, telescopes and seeing magnificent displays in the heavens.
									</p>
								</div>
							</div>
						</div>
						<div class="col-lg-6 pb-30">
							<div class="single-carusel row align-items-center">
								<div class="col-12 col-md-6 thumb">
									<img class="img-fluid" src="img/e2.jpg" alt="">
								</div>
								<div class="detials col-12 col-md-6">
									<p>25th February, 2018</p>
									<a href="event-details.html"><h4>The Universe Through
									A Child S Eyes</h4></a>
									<p>
										For most of us, the idea of astronomy is something we directly connect to “stargazing”, telescopes and seeing magnificent displays in the heavens.
									</p>
								</div>
							</div>
						</div>																				
						<a href="/news" class="text-uppercase primary-btn mx-auto mt-40">Selengkapnya</a>		
					</div>
				</div>	
			</section>
			<!-- End events-list Area -->

			

@endsection