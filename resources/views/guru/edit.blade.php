@extends('layout.admin')

@section('title','Edit Data Guru')

@section('content')

<br>
<br>
<br>

<div class="container">
  <h2>Edit Data Guru</h2>
  @if(session('sukses'))
    <div class="alert alert-success" role="alert">
        {{ session('sukses') }}
    </div>
 @endif
  <div class="row">
      <div class="col-lg-12">
          <form action="/guru/{{ $guru->id }}/update" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="form-group">
                <label for="exampleInputEmail1">Nama</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="nama" placeholder="Nama Lengkap" value="{{ $guru->nama }}">
              </div>

              <div class="form-group">
                  <label for="exampleInputEmail1">Jabatan</label>
                  <select name="jabatan" class="form-control" id="exampleFormControlSelect1">
                      <option value="Kepala Sekolah" @if($guru->jabatan == 'Kepala Sekolah') selected @endif>Kepala Sekolah</option>
                      <option value="Wakasek Humas" @if($guru->jabatan == 'Wakasek Humas') selected @endif>Wakasek Humas</option>
                      <option value="Wakasek Sapras" @if($guru->jabatan == 'Wakasek Sapras') selected @endif>Wakasek Sapras</option>
                      <option value="Wakasek Kurikulum" @if($guru->jabatan == 'Wakasek Kurikulum') selected @endif>Wakasek Kurikulum</option>
                      <option value="Wakasek Kesiswaan" @if($guru->jabatan == 'Wakasek Kesiswaan') selected @endif>Wakasek Kesiswaan</option>
                      <option value="Ka. Prodi TKJ" @if($guru->jabatan == 'Ka. Prodi TKJ') selected @endif>Ka. Prodi TKJ</option>
                      <option value="Ka. Prodi MMD" @if($guru->jabatan == 'Ka. Prodi MMD') selected @endif>Ka. Prodi MMD</option>
                      <option value="Ka. Prodi OTKP" @if($guru->jabatan == 'Ka. Prodi OTKP') selected @endif>Ka. Prodi OTKP</option>
                      <option value="Ka. Prodi EM" @if($guru->jabatan == 'Ka. Prodi EM') selected @endif>Ka. Prodi EM</option>
                      <option value="Instruktur TKJ" @if($guru->jabatan == 'Instruktur TKJ') selected @endif>Instruktur TKJ</option>
                      <option value="Instruktur MMD" @if($guru->jabatan == 'Instruktur MMD') selected @endif>Instruktur MMD</option>
                      <option value="Instruktur OTKP" @if($guru->jabatan == 'Instruktur OTKP') selected @endif>Instruktur OTKP</option>
                      <option value="Instruktur EM" @if($guru->jabatan == 'Instruktur EM') selected @endif>Instruktur EM</option>
                      <option value="MGMP" @if($guru->jabatan == 'MGMP') selected @endif>MGMP</option>
                  </select>
              </div>
              <div class="form-group">
                  <label for="exampleFormControlTextarea1">Riwayat Pendidikan</label>
                  <textarea name="mapel" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$guru->mapel}}</textarea>
              </div>
              <div class="form-group">
                <label for="exampleFormControlTextarea1">Avatar</label>
                <input type="file" name="avatar" class="form-control">
            </div>
                  <button type="submit" class="btn btn-warning">Update</button>
                  <button type="reset" class="btn btn-secondary">Reset</button>
          </form>
      </div>
  </div>
</div>

@endsection