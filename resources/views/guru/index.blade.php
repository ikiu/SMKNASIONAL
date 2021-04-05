@extends('layout.admin')

@section('title','Data Guru')

@section('content')

<br>
<br>
<br>

<div class="container">
  <div class="row">
    <div class="col-lg-12">
        <h1>Data Guru</h1>
        <button type="button" class="btn btn-sm btn-primary float-right mb-2" data-toggle="modal" data-target="#exampleModal">
          Tambah Data Guru
        </button>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data Guru</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form action="/guru/create" method="POST">
                  @csrf
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="nama" placeholder="Nama Lengkap">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Email Guru Aktif">
                  </div>
  
                  <div class="form-group">
                      <label for="exampleInputEmail1">Jabatan</label>
                      <select name="jabatan" class="form-control" id="exampleFormControlSelect1">
                          <option value="Kepala Sekolah">Kepala Sekolah</option>
                          <option value="Wakasek Humas">Wakasek Humas</option>
                          <option value="Wakasek Sapras">Wakasek Sapras</option>
                          <option value="Wakasek Kurikulum">Wakasek Kurikulum</option>
                          <option value="Wakasek Kesiswaan">Wakasek Kesiswaan</option>
                          <option value="Ka. Prodi TKJ">Ka. Prodi TKJ</option>
                          <option value="Ka. Prodi MMD">Ka. Prodi MMD</option>
                          <option value="Ka. Prodi OTKP">Ka. Prodi OTKP</option>
                          <option value="Ka. Prodi EM">Ka. Prodi EM</option>
                          <option value="Instruktur TKJ">Instruktur TKJ</option>
                          <option value="Instruktur MMD">Instruktur MMD</option>
                          <option value="Instruktur OTKP">Instruktur OTKP</option>
                          <option value="Instruktur EM">Instruktur EM</option>
                          <option value="MGMP">MGMP</option>
                      </select>
                  </div>
                  <div class="form-group">
                      <label for="exampleFormControlTextarea1">Mata Pelajaran</label>
                      <textarea name="mapel" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                  </div>
                      <button type="submit" class="btn btn-primary">Simpan</button>
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              </form>
              </div>
            </div>
          </div>
        </div>

      <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nama</th>
            <th scope="col">Jabatan</th>
            <th scope="col">Mata Pelajaran</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
          @foreach($data_guru as $guru)
          <tr>
            <th scope="row">1</th>
            <td><a href="/guru/{{ $guru->id }}/profil">{{ $guru->nama }}</a></td>
            <td>{{ $guru->jabatan }}</td>
            <td>{{ $guru->mapel }}</td>
            <td>
              <a href="/guru/{{ $guru->id }}/edit" class="btn btn-sm btn-warning">Edit</a>
              <a href="/guru/{{ $guru->id }}/delete" class="btn btn-sm btn-danger" onclick="return confirm('Yakin Mau Dihapus ?')">Hapus</a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
      
    </div>
  </div>
</div>


@endsection
