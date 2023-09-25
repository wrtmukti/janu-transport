@extends('layouts.admin')
@section('content')
<div class="row">
  <div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Tabel Pesanan Sewa Kendaraan</h4>
        <p class="card-description">
          Semua Pesanan Sewa Kendaraan <code>Janu-Transport</code>
        </p>
        <div class="table-responsive">
          <table class="table table-hover" id="example">
            <thead>
              <tr>
                <th class="text-center">Dikirim Pada</th>
                <th class="text-center">Nama </th>
                <th class="text-center">Whatsapp</th>
                <th class="text-center">Jumlah </th>
                <th class="text-center">Sewa Untuk</th>
                <th class="text-center">Status</th>
                <th class="text-center">Aksi</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($orders as $data)
              <tr>
                <td  class="text-center"> 
                  <div class="row justify-content-center mb-1">
                    {{ date('d M Y', strtotime( $data->created_at)) }} 
                  </div>
                  <div class="row justify-content-center">
                    {{ date('H:m:s', strtotime( $data->created_at)) }}
                  </div>
                </td>
                <td class="text-center"> <a href="/admin/order/vehicle/{{ $data->id }}" class="nav-link">{{ $data->username }}</a></td>                
                <td class="text-center"> <a role="button" href="https://wa.me/+62{{ $data->whatsapp }}" class=" btn btn-outline-success py-2 px-4" target="_blank">Hubungi</a></td>                
                <td  class="text-center"> {{ $data->vehicles()->count() }}</i></td>  
                <td  class="text-center"> {{ date('d M Y', strtotime( $data->date)) }} </td>
                <td class="text-center"><label class="badge badge-danger">Menunggu konfirmasi</label></td>
                <td class="text-center">
                  <form action="/admin/order/vehicle/{{ $data->id }}" method="POST">
                    @csrf
                    <input type="hidden" name="status" value="2">
                    <button type="submit" class="btn btn-warning px-3 py-2">Terima</button>
                  </form>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection