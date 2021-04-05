@extends('layout.admin')

@section('title','Profil Guru')

@section('content')

<section class="section">
      <div class="section-header">
        <h1>Profile</h1>
        <div class="section-header-breadcrumb">
          <div class="breadcrumb-item active"><a href="/dashboard">Dashboard</a></div>
          <div class="breadcrumb-item">Profile</div>
        </div>
      </div>
      <div class="section-body">
        <h2 class=""> <img alt="image" src="{{ $guru->getAvatar() }}" width="80px" height="auto" class="rounded-circle"> {{ $guru->nama }}</h2>
        
        <div class="row mt-sm-4">
          <div class="col-lg-12">
            <div class="card profile-widget">
              <div class="profile-widget-header">
                <div class="profile-widget-items">
                  <div class="profile-widget-item">
                    <div class="profile-widget-item-label">Jabatan</div>
                    <div class="profile-widget-item-value">{{ $guru->jabatan }}</div>
                  </div>
                  <div class="profile-widget-item">
                    <div class="profile-widget-item-label">Mata Pelajaran</div>
                    <div class="profile-widget-item-value">{{ $guru->mapel }}</div>
                  </div>
                  <div class="profile-widget-item">
                    <div class="profile-widget-item-label">Jumlah Posting Artikel</div>
                    <div class="profile-widget-item-value">0</div>
                  </div>
                </div>
              </div>
              <center>
                  <div class="profile-widget-description">
                    <a href="/guru/{{ $guru->id }}/edit"><div class="profile-widget-name">Edit Profil</div></a>
                  </div>
              </center>
            </div>
          </div>
          {{-- <div class="col-12 col-md-12 col-lg-7">
            <div class="card">
              <form method="post" class="needs-validation" novalidate="">
                <div class="card-header">
                  <h4>Edit Profile</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                      <div class="form-group col-md-12">
                        <label>Nama</label>
                        <input type="text" class="form-control" value="{{ $guru->nama }}" required="">
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-md-12">
                        <label>Jabatan</label>
                        <input type="text" class="form-control" value="{{ $guru->jabatan }}" required="">
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-12">
                        <label>Matpel</label>
                        <textarea class="form-control summernote-simple">{{ $guru->mapel }}</textarea>
                      </div>
                    </div>
                </div>
                <div class="card-footer text-right">
                  <button class="btn btn-primary" type="submit">Save Changes</button>
                </div>
              </form>
            </div>
          </div> --}}
        </div>
      </div>
</section>


@endsection