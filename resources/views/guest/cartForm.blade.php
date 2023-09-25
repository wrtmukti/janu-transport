@extends('layouts.vehicle')
@section('content')
<section>
  <div class="container">
    <div class="row mt-5">
      <div class="col-12">
        <div class="section-title">
          <h2>Formulir Data Penyewaan kendaraan</h2>
          <form action="/order/cart/store" method="POST" enctype="multipart/form-data">
            @csrf
            </div>
            <?php 
              $paket = 0;
              $kendaraan = 0;
                for ($i = 0; $i < count($vehicle_id); $i++){
                  for ($j=0; $j < $amount[$i] ; $j++) { 
                    
                    $vehicles = \App\Models\Vehicle::where('id', $vehicle_id[$i])->get();
                    ?>
                    @foreach ($vehicles as $vehicle)
                    <input type="hidden" name="" id="cart-vehicle-price{{ $kendaraan }}" value="{{ $vehicle->price }}">
                    <input type="hidden" name="vehicle_id[]" value="{{ $vehicle->id }}">

                    <div class="row justify-content-center">
                      <div class="col-6">
                        <div class="card p-4 shadow count_vehicle" >
                          <div class="row">
                            <div class="col-5">
                              <img src="{{ asset('images/vehicle/' . $vehicle->image) }}" class="imgProduct" alt="#">
                            </div>
                            <div class="col-6">
                              <div class="row">
                                <h4 class="fw-bold mb-2 "> {{ $vehicle->name }}</h4>
                                <div class="form-group mb-3">
                                  <label for="exampleFormControlSelect1">Pilihan Paket </label>
                                  <select id="cart-select-package" name="package_id[]" class="cartForm paketke-{{ $paket }} form-control">
                                    <option >Pilih Paket Penyewaan Kendaraan</option>
                                    @foreach ($vehicle->packages as $item)
                                    <option value="{{ $item->id }}" price="{{ $item->price }}" >{{ $item->name }}{{ $item->price }}</option>
                                    @endforeach
                                  </select>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    @endforeach
                    <?php 
                  $paket += 1;
                  $kendaraan += 1;
                  }

                }
                
            ?>
        
            <div class="row justify-content-center">
              <div class="col-6">
                <div class="card rounded shadow p-5">
                  <div class="row">
                    <h4 class="fw-bold mb-4 "> Data Diri Penyewa</h4>
                  </div>

                  <input type="hidden" id="cart-real-time" name="time" value="">

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

                  <div class="form-group mb-3">
                    <label for="time">Jangka Waktu Sewa </label>
                    <select  class=" cartForm form-control" id="cart-select-time"  >
                      <option >Pilih Jangka Waktu Penyewaan Kendaraan</option>
                      <option value="6">6 Jam</option>
                      <option value="12">12 Jam</option>
                      <option value="24">1 Hari</option>
                      <option value="custom" >Masukan Jumlah Hari Secara Manual</option>
                    </select>
                  </div>

                  <div class="form-group mb-3 d-none" id="cart-custom-time">
                    <label for="exampleInputUsername1">Jumlah Hari</label>
                    <input id="cart-number-time" type="number"  class="cartForm form-control @error('number-time') is-invalid @enderror"  value="" placeholder="Jumlah Hari Penyewaaan" autocomplete="number-time" autofocus >
                    @error('number-time')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div> 

                  <div class="form-group mb-3">
                    <label for="exampleInputUsername1">Total Harga</label>
                    <input id="cart-total-price" type="text" class="form-control @error('total_price') is-invalid @enderror" name="total_price" value="" required readonly>
                    @error('total_price')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>
    
                  <div class="form-group">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                  </div>
                </div>
              </div>
            </div>
          </form>
      </div>
    </div>
  </div>
</section>







@endsection