@extends('layouts.admin')
@section('content')
<div class="row">
  <div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Tabel Paket Wisata</h4>
        <p class="card-description">
          Semua Jenis Paket Wisata<code>Janu-Transport</code>
        </p>
        <div class="table-responsive">
          <table class="table table-hover" id="example">
            <thead>
              <tr>
                <th class="text-center">Kategori</th>
                <th class="text-center">Nama Paket</th>
                <th class="text-center">Total Order</th>
                <th class="text-center">Status</th>
                <th class="text-center">Aksi</th>
                <th class="text-center">Aksi</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($tours as $data)
              <tr>
                @switch($data->category)
                    @case(1)
                        <td class="text-center">Wisata dan Hotel</td>
                        @break
                    @case(2)
                        <td class="text-center">Wisata Tanpa Hotel</td>
                        @break
                    @case(3)
                        <td class="text-center">Wisata Adventure</td>
                        @break
                    @case(4)
                        <td class="text-center">Honeymoon</td>
                        @break
                    @default
                        <td class="text-center">N/A</td>
                @endswitch
                <td class="text-center"> {{ $data->name }}</td>
                <td class="text-center">{{ $data->orders()->count() }} </td>
                @switch($data->status)
                    @case(0)
                        <td class="text-center"><label class="badge badge-dark">Sold</label></td>
                        <td class="text-center">
                          <form action="/admin/tour/{{ $data->id }}" method="POST">
                            @csrf
                            <input type="hidden" name="status" value="1">
                            <button type="submit" class="btn btn-success px-4 py-2">Aktifkan</button>
                          </form>
                        </td>
                        @break
                    @case(1)
                        <td class="text-center"><label class="badge badge-success">Ready</label></td>
                        <td class="text-center">
                          <form action="/admin/tour/{{ $data->id }}" method="POST">
                            @csrf
                            <input type="hidden" name="status" value="0">
                            <button type="submit" class="btn btn-dark px-4 py-2">Nonaktifkan</button>
                          </form>
                        </td>
                        @break
                    @default
                        
                @endswitch
                <td class="text-center"> 
                  <form action="/admin/tour/delete/{{ $data->id }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-danger px-4 py-2">Hapus</button>
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

