@extends('layouts.admin')
@section('content')
<div class="row">
  <div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Tabel Kendaraan</h4>
        <p class="card-description">
          Semua Jenis Kendaraan <code>Janu-Transport</code>
        </p>
        <div class="table-responsive">
          <table class="table table-hover" id="example">
            <thead>
              <tr>
                <th class="text-center">Nama</th>
                <th class="text-center">Kategori</th>
                <th class="text-center">Total Order</th>
                <th class="text-center">Status</th>
                <th class="text-center">Aksi</th>
                <th class="text-center">Hapus</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($vehicles as $data)
              <tr>
                <td class="text-center"> <a href="/admin/vehicle/{{ $data->id }}" class="nav-link">{{ $data->name }}</a></td>
                <td class="text-center">
                  @switch($data->category)
                      @case(1)
                          Motor
                          @break
                      @case(2)
                          Mobil
                          @break
                      @case(3)
                          Bus
                          @break
                      @case(4)
                          Helikopter
                          @break
                      @default
                          N/A
                  @endswitch
                </td>
                <td class="text-center"> {{ $data->orders()->count() }}</i></td>
                @switch($data->status)
                    @case(0)
                        <td class="text-center"><label class="badge badge-dark">Sold</label></td>
                        <td class="text-center">
                          <form action="/admin/vehicle/{{ $data->id }}" method="POST">
                            @csrf
                            <input type="hidden" name="status" value="1">
                            <button type="submit" class="btn btn-success px-4 py-2">Aktifkan</button>
                          </form>
                        </td>
                        @break
                    @case(1)
                        <td class="text-center"><label class="badge badge-success">Ready</label></td>
                        <td class="text-center">
                          <form action="/admin/vehicle/{{ $data->id }}" method="POST">
                            @csrf
                            <input type="hidden" name="status" value="0">
                            <button type="submit" class="btn btn-dark px-4 py-2">Nonaktifkan</button>
                          </form>
                        </td>
                        @break
                    @default
                        
                @endswitch
                <td class="text-center">
                  <form action="/admin/vehicle/delete/{{ $data->id }}" method="POST">
                    @csrf
                    @method('DELETE')
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

  {{-- @foreach ($vehicles as $data)    
  <div class="col-md-3">
    <div class="card p-2" style="width: 18rem;">
      <div class="imgCover">
        <img src="{{ asset('images/vehicle/' . $data->image) }}" class="imgProduct" alt="...">
      </div>
      <div class="card-body">
        <h5 class="card-title">{{ $data->name }}</h5>
        <p class="card-text">Rp. {{ $data->price }},-</p>
        <a href="#" class="btn btn-primary">Detail</a>
      </div>
    </div>
  </div>
  @endforeach --}}