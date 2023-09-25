@extends('layouts.admin')
@section('content')

<div class="row ">
  <div class="col-md-4 me-5 ">
    @foreach ($order->vehicles as $data)
      <div class="row justify-content-center">
        <div class="card mb-3">
          <div class="row justify-content-center">
            <div class="col-md-5 ps-3 py-3">
              <img src="{{ asset('images/vehicle/' . $data->image) }}" class="" style="max-width: 100%"  alt="...">
            </div>
            <div class="col-md-7">
              <div class="p-3">
                <h5 class="text-center mt-3 fw-bold"> 
                  {{ $data->name }} 
                  @if ($data->status == 1)
                  <label class="badge badge-success">Ready</label>
                  @else
                  <label class="badge badge-success">Kosong</label>
                  @endif
                </h5>
                <hr>
                <?php $package = \App\Models\Package::where('id', $data->pivot->package_id)->first(); ?>
                <p class="mt-2 text-center">Paket  {{ $package->name }}</p>     
                
              </div>
            </div>
          </div>
        </div>  
      </div>
    @endforeach
  </div>
  <div class="col-md-7">
    <div class="row justify-content-center">
      <div class="card p-3">
        <div class="row">
          @if ($order->status !== 1)
          <h2 class="text-center fw-bold"> Transaksi ID #{{ $order->id }}</h2>
          @else
          <h2 class="text-center fw-bold"> Pesanan ID #{{ $order->id }}</h2>
          @endif
        </div>
        <div class="row justify-content-center mb-5">
          <div class="col-4 text-center">
            @switch($order->status)
                @case(0)
                    <label class="badge badge-dark">Ditolak</label>
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
          </div>
        </div>
        <div class="row">
          <div class="col">
            <div class="form-group ">
              <label for="username">Nama Penyewa</label>
              <input type="text" class="form-control" id="username" value="{{ $order->username }}" aria-describedby="emailHelp"  readonly>
            </div>
          </div>
          <div class="col">
            <div class="form-group">
              <label for="whatsapp">No Whatsapp</label>
              <div class="row justify-content-start">
                <div class="col"><input type="text" class="form-control" id="whatsapp" value="+62{{ $order->whatsapp }}" aria-describedby="emailHelp"  readonly></div>
                <div class="col"> <a role="button" href="https://wa.me/+62{{ $order->whatsapp }}" class=" btn btn-outline-success py-2 px-4" target="_blank">Hubungi</a></div>
              </div>

            </div>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <div class="form-group">
              <label for="date">Tanggal Penyewaan</label>
              <input type="text" class="form-control" id="date" value="{{ date('d M Y', strtotime( $order->date)) }}" aria-describedby="emailHelp"  readonly>
            </div>
          </div>
          <div class="col">
            <div class="form-group">
              <label for="date">Jangka Waktu</label>
              @if ($order->time / 24 < 1)
              <input type="text" class="form-control" id="date" value="{{ $order->time }} Jam" aria-describedby="emailHelp"  readonly>
              @else
              <input type="text" class="form-control" id="date" value="{{ $order->time / 24 }} Hari" aria-describedby="emailHelp"  readonly>
              @endif
            </div>
          </div>
        </div>        
        <div class="row">
          <div class="col">
            <div class="col">
              <div class="form-group">
                <label for="vehicle">Jumlah Kendaraan</label>
                <input type="text" class="form-control" id="vehicle" value="{{ $order->vehicles()->count() }}" aria-describedby="emailHelp"  readonly>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="form-group">
              <label for="total">Total Pembayaran</label>
              <input type="text" class="form-control" id="total" value="Rp. {{ number_format($order->total_price, 0, ',', '.') }},-" aria-describedby="emailHelp"  readonly>
            </div>
          </div>
        </div>        
        <div class="row justify-content-end me-4">
          
          @switch($order->status)
              @case(0)
                  <div class="col-2">
                    <form action="/admin/order/vehicle/delete/{{ $data->id }}" method="POST">
                      @csrf
                      <button type="submit" class="btn btn-danger px-4 py-2">Hapus</button>
                    </form>
                  </div>
                  @break
              @case(1)
                  <div class="col-2">
                    <form action="/admin/order/vehicle/{{ $order->id }}" method="POST">
                      @csrf
                      <input type="hidden" name="status" value="0">
                      <button type="submit" class="btn btn-dark px-4 py-2">Tolak</button>
                    </form>
                  </div>
                  <div class="col-2">
                    <form action="/admin/order/vehicle/{{ $order->id }}" method="POST">
                      @csrf
                      <input type="hidden" name="status" value="2">
                      <button type="submit" class="btn btn-warning px-4 py-2">Terima</button>
                    </form>
                  </div>
                  @break
              @case(2)
                  <div class="col-2">
                    <form action="/admin/order/vehicle/delete/{{ $data->id }}" method="POST">
                      @csrf
                      <button type="submit" class="btn btn-danger px-4 py-2">Hapus</button>
                    </form>
                  </div>
                  <div class="col-2">
                    <form action="/admin/order/vehicle/{{ $order->id }}" method="POST">
                      @csrf
                      <input type="hidden" name="status" value="3">
                      <button type="submit" class="btn btn-success px-4 py-2">Selesai</button>
                    </form>
                  </div>
                  @break
              @case(3)
                  <div class="col-2">
                    <form action="/admin/order/vehicle/delete/{{ $data->id }}" method="POST">
                      @csrf
                      <button type="submit" class="btn btn-danger px-4 py-2">Hapus</button>
                    </form>
                  </div>
                  @break
              @default
                  
          @endswitch
        </div>
      </div>
    </div>
  </div>
</div>




@endsection