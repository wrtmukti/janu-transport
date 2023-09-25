@extends('layouts.vehicle')
@section('content')
<section>
  <div class="container">
   
    <div class="row mt-5">
      <div class="col-12">
        <div class="section-title">
          <h2>Formulir Data Penyewaan kendaraan</h2>
          {{-- <p>Pilih Kendaraan yang kamu inginkan, isi data diri dan paket penyewaan, kendaaraan akan diantar, selamat liburan!!</p> --}}
        </div>
        <div class="row mt-5 justify-content-center">
          <div class="col-6">
            <div class="card p-4 shadow">
              <div class="row">
                <div class="col-5 ">
                  <img src="{{ asset('images/vehicle/' . $vehicle->image) }}" class="imgProduct" alt="#">
                </div>
                <div class="col-6">
                  <div class="row">
                    <h4 class="fw-bold mb-4 "> Detail Kendaraan</h4>
                    <span>Nama : {{ $vehicle->name }}</span>
                    @switch($vehicle->category)
                        @case(1)
                            <span>Kategori Motor</span>
                            @break
                            @case(2)
                            <span>Kategori Mobil</span>
                            @break
                            @case(3)
                            <span>Kategori Bus</span>
                            @break
                            @case(4)
                            <span>Kategori Helikopter</span>
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
                <h4 class="fw-bold mb-4 "> Data Diri Penyewa</h4>
              </div>
              
              <form action="/order/direct/store" method="POST" enctype="multipart/form-data">
                @csrf

                <input type="hidden" id="real-time" name="time" value="">
                <input type="hidden" name="vehicle_id" value="{{ $vehicle->id }}">

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
                  <label for="exampleFormControlSelect1">Pilihan Paket </label>
                  <select id="select-package" name="package_id" class="directForm form-control">
                    <option >Pilih Paket Penyewaan Kendaraan</option>
                    @foreach ($vehicle->packages as $item)
                    <option value="{{ $item->id }} " price="{{ $item->price }}">{{ $item->name }}</option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group mb-3">
                  <label for="date">Tanggal Penyewaan </label>
                  <div class="input-group mb-4">
                    <i class="bi bi-calendar-date input-group-text"></i>
                    <input type="date" name="date" class=" form-control" placeholder="Tanggal Penyewaan" required aria-label="Date input 3 (using aria-label)">
                  </div>
                </div>

                <div class="form-group mb-3">
                  <label for="time">Jangka Waktu Sewa </label>
                  <select  class=" directForm form-control" id="select-time"  >
                    <option >Pilih Jangka Waktu Penyewaan Kendaraan</option>
                    <option value="6">6 Jam</option>
                    <option value="12">12 Jam</option>
                    <option value="24">1 Hari</option>
                    <option value="custom" >Masukan Jumlah Hari Secara Manual</option>
                  </select>
                </div>
                

                <div class="form-group mb-3 d-none" id="custom-time">
                  <label for="exampleInputUsername1">Jumlah Hari</label>
                  <input id="number-time" type="number"  class="directForm form-control @error('number-time') is-invalid @enderror"  value="" placeholder="Jumlah Hari Penyewaaan" autocomplete="number-time" autofocus >
                  @error('number-time')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                </div>
                
                <div class="form-group mb-3">
                  <label for="exampleInputUsername1">Total Harga</label>
                  <input id="total-price" type="text" class="form-control @error('total_price') is-invalid @enderror" name="total_price" value="" required readonly>
                  @error('total_price')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
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
</section>







@endsection