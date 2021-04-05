@extends('layout.frontend')

@section('content')

@section('title','Instruktur SMK Nasional Bandung')

	<!-- start banner Area -->
    <section class="banner-area relative about-banner" id="home" style="background: url('{{ config('sekolah.image_profil_banner') }}');">	
        <div class="overlay overlay-bg"></div>
        <div class="container">				
            <div class="row d-flex align-items-center justify-content-center">
                <div class="about-content col-lg-12">
                    <h1 class="text-white">
                        Instruktur SMK Nasional Bandung				
                    </h1>	
                    <p class="text-white link-nav"><a href="/">Beranda </a>  <span class="lnr lnr-arrow-right"></span>  <a href="/instruktur"> Instruktur</a></p>
                </div>	
            </div>
        </div>
    </section>
    <!-- End banner Area -->	

    <br>
    <br>
    		<!-- Start gallery Area -->
            <div class="title text-center">
                <h1 class="mb-10">Pimpinan SMK Nasional Bandung</h1>
            </div>
			<section class="gallery-area section-gap">
				<div class="container">
					<div class="row">
                        <div class="row row-cols-1 row-cols-md-2 g-4">
                            <div class="col">
                              {{-- <div class="card"> --}}
                                <img src="{{ asset('/frontend/img/Pa Dedy.png') }}" class="card-img-top" alt="...">
                                <div class="card-body">
                                  <h5 class="card-title">Ir. Dedy Hermadi</h5>
                                  <p class="card-text">Kepala Sekolah SMK Nasional Bandung</p>
                                </div>
                              {{-- </div> --}}
                            </div>
                            <div class="col">
                              {{-- <div class="card"> --}}
                                <img src="{{ asset('/frontend/img/Pa Agus.png') }}" width="50px" height="auto" class="card-img-top" alt="...">
                                <div class="card-body">
                                  <h5 class="card-title">Agus Mulyadi, S. Pd.</h5>
                                  <p class="card-text">Wakil Kepala bidang Kurikulum</p>
                                </div>
                              {{-- </div> --}}
                            </div>
                            <div class="col">
                              {{-- <div class="card"> --}}
                                <img src="{{ asset('/frontend/img/Pa Hardi.png') }}" class="card-img-top" alt="...">
                                <div class="card-body">
                                  <h5 class="card-title">Hardianto, S.Pd.</h5>
                                  <p class="card-text">Wakil Kepala bidang Humas</p>
                                </div>
                              {{-- </div> --}}
                            </div>
                            <div class="col">
                              <div class="card">
                                <img src="{{ asset('/frontend/img/PaYoki.png') }}" class="card-img-top" alt="...">
                                <div class="card-body">
                                  <h5 class="card-title">Yoki Tri Wibowo, S.Kom.</h5>
                                  <p class="card-text">Wakil Kepala bidang Kesiswaan</p>
                                </div>
                              </div>
                            </div>
                          </div>
                    </div>
				</div>
                
                <div class="container">
					        <div class="row">
                        <div class="row row-cols-1 row-cols-md-2 g-4">
                            <div class="col">
                              <div class="card">
                                <img src="{{ asset('/frontend/img/Bu Noerul.png') }}" class="card-img-top" alt="...">
                                <div class="card-body">
                                  <h5 class="card-title">Noerul Sholikhah Qifayatul Dalfa, S.Pd.</h5>
                                  <p class="card-text">Wakil Kepala Bidang Sarana dan Prasarana</p>
                                </div>
                              </div>
                            </div>
                            <div class="col">
                              <div class="card">
                                <img src="" class="card-img-top" alt="...">
                                <div class="card-body">
                                  <h5 class="card-title">Agus Mulyadi, S. Pd.</h5>
                                  <p class="card-text">Wakil Kepala bidang Kurikulum</p>
                                </div>
                              </div>
                            </div>
                            <div class="col">
                              <div class="card">
                                <img src="..." class="card-img-top" alt="...">
                                <div class="card-body">
                                  <h5 class="card-title">Hardianto, S.Pd.</h5>
                                  <p class="card-text">Wakil Kepala bidang Humas</p>
                                </div>
                              </div>
                            </div>
                            <div class="col">
                              <div class="card">
                                <img src="..." class="card-img-top" alt="...">
                                <div class="card-body">
                                  <h5 class="card-title">Yoki Tri Wibowo, S.Kom.</h5>
                                  <p class="card-text">Wakil Kepala bidang Kesiswaan</p>
                                </div>
                              </div>
                            </div>
                          </div>
                  </div>
				        </div>
			</section>
			<!-- End gallery Area -->
                                

@endsection