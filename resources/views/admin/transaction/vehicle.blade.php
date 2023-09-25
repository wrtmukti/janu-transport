@extends('layouts.admin')
@section('content')
<div class="row">
  <div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Tabel Riwayat Transaksi Sewa Kendaraan</h4>
        <p class="card-description">
          Semua Riwayat Transaksi Sewa Kendaraan<code>Janu-Transport</code>
        </p>
        <div class="table-responsive">
          <table class="table table-hover" id="example">
            <thead>
              <tr>
                <th class="text-center">Nama Pemesan</th>
                <th class="text-center">Whatsapp</th>
                <th class="text-center">Kendaraan</th>
                <th class="text-center">Sewa Mulai</th>
                <th class="text-center">Jangka Waktu</th>
                <th class="text-center">Status</th>
                <th class="text-center">Aksi</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($orders as $data)
              <tr>
                <td class="text-center"> <a href="/admin/order/vehicle/{{ $data->id }}" class="nav-link">{{ $data->username }}</a></td>                
                <td class="text-center"> <a role="button" href="https://wa.me/+62{{ $data->whatsapp }}" class=" btn btn-outline-success py-2 px-4" target="_blank">Hubungi</a></td>                
                <td class="text-center"> {{ $data->vehicles()->count() }}</i></td>
                <td  class="text-center"> {{ date('d M Y', strtotime( $data->date)) }} </td>
                <td  class="text-center"> 
                  @if ($data->time / 24 < 1)
                    {{ $data->time }} Jam
                  @else
                    {{ $data->time / 24 }} Hari
                  @endif
                </td>
                <td  class="text-center">
                  @switch($data->status)
                    @case(0)
                    <label class="badge badge-dark"> Ditolak</label>
                    @break
                    @case(1)
                    <label class="badge badge-danger">Menunggu konfirmasi</label>
                    @break
                    @case(2)
                    <label class="badge badge-warning">Dalam Proses</label>
                    @break
                    @case(3)
                    <label class="badge badge-success">Selesai</label>
                    @break
                    @default
                  @endswitch
                </td>
                <td class="text-center">
                  @switch($data->status)
                      @case(0)
                          <form action="/admin/order/vehicle/delete/{{ $data->id }}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-danger px-4 py-2">Hapus</button>
                          </form>
                          @break
                      @case(2)
                          <form action="/admin/order/vehicle/{{ $data->id }}" method="POST">
                            @csrf
                            <input type="hidden" name="status" value="3">
                            <button type="submit" class="btn btn-success px-4 py-2">Selesai</button>
                          </form>
                          @break
                      @case(3)
                          <form action="/admin/order/vehicle/delete/{{ $data->id }}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-danger px-4 py-2">Hapus</button>
                          </form>
                          @break
                      @default
                          
                  @endswitch
                  
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