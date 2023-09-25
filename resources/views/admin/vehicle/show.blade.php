@extends('layouts.admin')
@section('content')
<div class="card mb-3">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <div class=" p-2">
        <div class="imgCover">
          <img src="{{ asset('images/vehicle/' . $vehicle->image) }}" class="imgProduct" alt="...">
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="p-3">
         <h2 class="text-center mt-4 fw-bold"> {{ $vehicle->name }}</h2>
         <hr>
         @switch($vehicle->category)
             @case(1)
                <h4 class="mt-2 ">Kategori Motor</h4>     
                @break
                @case(2)
                <h4 class="mt-2 ">Kategori Mobil</h4>     
                 @break
                @case(3)
                <h4 class="mt-2 ">Kategori Bus</h4>     
                 @break
                @case(4)
                <h4 class="mt-2 ">Kategori Helikopter</h4>     
                 @break
             @default
                 
         @endswitch
         <h4 class="my-2">Sudah diorder sebanyak {{ $vehicle->orders()->count() }} kali</h4>
         <h4 class="mb-3">Harga per 6 jam Rp. {{ number_format($vehicle->price, 0, ',', '.') }},-</h4>
          @if ($vehicle->status == 0)
            <td>Status <label class="badge badge-danger">Sold</label></td>
          @else
            <td>Status <label class="badge badge-success">Ready</label></td>
          @endif
          <div class="mt-3">
            @switch($vehicle->status)
                @case(0)
                    <td class="text-center">
                      <form action="/admin/vehicle/{{ $vehicle->id }}" method="POST">
                        @csrf
                        <input type="hidden" name="status" value="1">
                        <button type="submit" class="btn btn-success px-4 py-2">Aktifkan</button>
                      </form>
                    </td>
                    @break
                @case(1)
                    <td class="text-center">
                      <form action="/admin/vehicle/{{ $vehicle->id }}" method="POST">
                        @csrf
                        <input type="hidden" name="status" value="0">
                        <button type="submit" class="btn btn-dark px-4 py-2">Nonaktifkan</button>
                      </form>
                    </td>
                    @break
                @default
                    
            @endswitch
          </div>
      </div>
    </div>
  </div>
</div>
<div class="card p-3">
  <div class="row">
    <h2 class="text-center fw-bold"> Pilihan Paket Penyewaan</h2>
  </div>
  <div class="row">
    <div class="col-2">
      <form action="/admin/vehicle/package" method="POST">
        @csrf
      <input type="hidden" name="vehicle_id" value="{{ $vehicle->id }}">
      <button type="submit" class="btn btn-primary">Tambah Paket</button>
      </form>
    </div>
  </div>
  <div class="row">
    <div class="table-responsive">
      <table class="table table-hover" id="example">
        <thead>
          <thead>
            <tr>
              <th class="text-center">No</th>
              <th class="text-center">Nama</th>
              <th class="text-center">Harga Tambahan</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($vehicle->packages as $item)
            <tr>
              <td class="text-center">{{ $loop->iteration }}</td>
              <td class="text-center">{{ $item->name }}</td>
              <td class="text-center">Rp. {{ number_format($item->price, 0, ',', '.') }},-</td>
            </tr>
            @endforeach
           
          </tbody>
        </table>  
  </div>
</div>
@endsection