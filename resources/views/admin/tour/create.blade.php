@extends('layouts.admin')
@section('content')
@extends('layouts.admin')
@section('content')
<div class="row justify-content-center">
  <div class="col-md-6 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Input Paket Wisata</h4>
        <p class="card-description">
          Menambahkan data paket wisata Janu-Transport
        </p>
        <hr>
        <form action="/admin/tour" class="forms-sample" method="POST" enctype="multipart/form-data">
          @csrf

          <input type="hidden" name="status" value="1">
          <div class="form-group">
              <label for="kategori">Kategori Paket</label>
              <select name="category" class="form-control" id="kategori"  id="kategori">
                  <option value="4">Pilih Kategori Paket Wisata</option>
                  <option value="1">Wisata dan Hotel</option>
                  <option value="2">Wisata Tanpa Hotel</option>
                  <option value="3">Adventure</option>
                  <option value="4">Honeymoon</option>
              </select>       
          </div>
          <div class="form-group">
            <label for="exampleInputUsername1">Nama Paket</label>
            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="" placeholder="Nama Paket WIsata" required autocomplete="name" autofocus >
            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
          </div>
          <div class="form-group d-none" id="tipe">
              <label for="tipe">Tipe Paket</label>
              <select name="type" class="form-control" >
                  <option value="">pilih tipe paket wisata</option>
                  <option value="1">2 hari 1 malam</option>
                  <option value="2">3 hari 2 malam</option>
                  <option value="3">4 hari 3 malam</option>
              </select>       
          </div>

          <div class="form-group">
            <label for="name">Gambar Utama</label>
            <input type="file" name="image" class="form-control" placeholder="image">
          </div>
          <div class="form-group">
            <label for="name">Gambar Fasilitas</label>
            <input type="file" name="facility" class="form-control" placeholder="image">
          </div>
          
          <div class="row justify-content-end">
            <div class="col-2">
              <button class="btn btn-light">Batal</button>
            </div>
            <div class="col-3">
              <button type="submit" class="btn btn-primary me-2">Simpan</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
@endsection