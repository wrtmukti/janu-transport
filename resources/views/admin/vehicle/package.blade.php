@extends('layouts.admin')
@section('content')
<?php $vehicle = App\Models\Vehicle::where('id', $vehicle_id)->first(); ?> 
<div class="row justify-content-center">
  <div class="col-md-6 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Input Paket Kendaraan "{{ $vehicle->name }}"</h4>
        <p class="card-description">
          Menambahkan paket kendaraan Janu-Transport
        </p>
        <hr>
        <form action="/admin/vehicle/packagestore" class="forms-sample" method="POST">
          @csrf
          <input type="hidden" name="vehicle_id" class="form-control" value="{{ $vehicle_id }}">
          <div class="form-group">
            <label for="exampleFormControlSelect1">Pilihan Paket Juno-Transport </label>
            <select name="name" class="form-control" id="exampleFormControlSelect1"  id="exampleFormControlSelect1">
              @switch($vehicle->category)
                  @case(1)
                      <option value="Motor Lepas Kunci (MOK) ">Motor Lepas Kunci</option>
                      <option value="Motor Dan Supir (MOS)">Motor Dan Supir </option>
                      <option value="Motor, Supir dan BBM (MOSB)">Motor, Supir dan BBM</option>   
                      @break
                  @case(2)
                      <option value="Mobil Lepas Kunci (MK)">Mobil Lepas Kunci</option>
                      <option value="Mobil Dan Supir (MS)">Mobil Dan Supir </option>
                      <option value="Mobil, Supir dan BBM (MSB)">Mobil, Supir dan BBM</option>    
                      @break
                  @case(3)
                      <option value="Bus Lepas Kunci (B)">Bus Lepas Kunci</option>
                      <option value="Bus Dan Supir (BS)">Bus Dan Supir </option>
                      <option value="Bus, Supir dan BBM (BSB)">Bus, Supir dan BBM</option>    
                      @break
                  @case(4)
                      <option value="Helikopter Lepas Kunci (H)">Helikopter Lepas Kunci</option>
                      <option value="Helikopter Dan Supir (HS)">Helikopter Dan Supir </option>
                      <option value="Helikopter, Supir dan BBM (HSB)">Helikopter, Supir dan BBM</option>    
                      @break
                  @default
                      
              @endswitch
            </select>
          </div>
          <div class="form-group">
            <label for="exampleInputUsername1">Harga Tambahan </label>
            <input id="price" type="number" class="form-control @error('price') is-invalid @enderror" name="price" placeholder="Harga Paket belum termasuk mobil" required autocomplete="price" autofocus >
            @error('price')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
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