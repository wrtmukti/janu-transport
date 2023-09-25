@extends('layouts.admin')
@section('content')
<div class="row justify-content-center">
  <div class="col-md-6 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Input Kendaraan</h4>
        <p class="card-description">
          Menambahkan data kendaraan Janu-Transport
        </p>
        <hr>
        <form action="/admin/vehicle" class="forms-sample" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="form-group">
            <label for="form-check text-center">Kategori </label>
            <div class="row">
              <div class="col">
                <div class="form-check">
                  <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="category" id="optionsRadios1" value="1">
                    Motor
                  </label>
                </div>
              </div>
              <div class="col">
                <div class="form-check">
                  <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="category" id="optionsRadios1" value="2">
                    Mobil
                  </label>
                </div>
              </div>
              <div class="col">
                <div class="form-check">
                  <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="category" id="optionsRadios1" value="3">
                    Bus
                  </label>
                </div>
              </div>
              <div class="col">
                <div class="form-check">
                  <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="category" id="optionsRadios1" value="4">
                    Helikopter
                  </label>
                </div>
              </div>
            </div>
          </div>

          <div class="form-group">
            <label for="exampleInputUsername1">Nama </label>
            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="" placeholder="Nama Kendaraan" required autocomplete="name" autofocus >
            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
          </div>
          <div class="form-group">
            <label for="exampleInputUsername1">Harga </label>
            <input id="price" type="number" class="form-control @error('price') is-invalid @enderror" name="price" value="" placeholder="Harga  sewa kendaraan per 6 jam" required autocomplete="price" autofocus >
            @error('price')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
          </div>

          <div class="form-group">
            <label for="name">Gambar</label>
            <input type="file" name="image" class="form-control" placeholder="image">
          </div>
          
          <input type="hidden" name="status" class="form-control" value="1">

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