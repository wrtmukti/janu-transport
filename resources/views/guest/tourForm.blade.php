@extends('layouts.guest')
@section('content')
<div class="container">
   
  <div class="row mt-5">
    <div class="col-12">
      <div class="section-title">
        <h2>Formulir Data Pemesanan Paket Wisata</h2>
        {{-- <p>Pilih Paket Wisata yang kamu inginkan, isi data diri dan paket penyewaan, kendaaraan akan diantar, selamat liburan!!</p> --}}
      </div>
      <div class="row mt-5 justify-content-center">
        <div class="col-6">
          <div class="card p-4 shadow">
            <div class="row">
              <div class="col-5 ">
                <img src="{{ asset('images/tour/profile/' . $tour->image) }}" class="imgProduct" style="max-height: 230px" alt="#">
              </div>
              <div class="col-6">
                <div class="row">
                  <h4 class="fw-bold mb-4 "> Detail Paket Wisata</h4>
                  <span>{{ $tour->name }}</span>
                  @switch($tour->category)
                      @case(1)
                          <span>Wisata Dan Hotel</span>
                          @break
                          @case(2)
                          <span>Wisata Tanpa Hotel</span>
                          @break
                          @case(3)
                          <span>Adventure</span>
                          @break
                          @case(4)
                          <span>Honeymoon</span>
                          @break
                          @default
                  @endswitch
                  @switch($tour->type)
                      @case(1)
                          <span>2 Hari 1 Malam</span>
                          @break
                          @case(2)
                          <span>3 Hari 2 Malam</span>
                          @break
                          @case(3)
                          <span>4 Hari 3 Malam</span>
                          @break
                          @default
                  @endswitch
                </div>
              </div>
            </div>
          </div>
        </div>
        
      </div>
      <div class="row justify-content-center">
        <div class="col-6">
          <div class="card rounded shadow p-5">
            <div class="row">
              <h4 class="fw-bold mb-4 ">Data Diri</h4>
            </div>
            
            <form action="/order/tour/store" method="POST" enctype="multipart/form-data">
              @csrf
              <input type="hidden" name="tour_id" value="{{ $tour->id }}">

              <div class="form-group mb-3">
                <label for="exampleInputUsername1">Nama </label>
                <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="" placeholder="Nama Pemesan" required autocomplete="username" autofocus >
                @error('username')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>
              <div class="form-group mb-3">
                <label for="exampleInputUsername1">Nomor WhatsApp </label>
                <div class="row justify-content-start">
                  <div class="col-2 text-end">
                    <a role="button" href="#" class="btn btn-outline-dark py-1 px-4">+62</a>
                  </div>
                  <div class="col text-start">
                    <input id="whatsapp" type="text" class="form-control @error('whatsapp') is-invalid @enderror" name="whatsapp" value="" placeholder="contoh 812xxxxxxxx" required autocomplete="whatsapp" autofocus >
                    @error('whatsapp')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>
                </div>
              </div>
             
              <div class="form-group mb-3">
                <label for="date">Tanggal Penyewaan </label>
                <div class="input-group mb-4">
                  <i class="bi bi-calendar-date input-group-text"></i>
                  <input type="date" name="date" class=" form-control" placeholder="Tanggal Penyewaan" required aria-label="Date input 3 (using aria-label)">
                </div>
              </div>

              <div class="form-group">
                <button type="submit" class="btn btn-primary">Simpan</button>
              </div>
            </form>

            
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection