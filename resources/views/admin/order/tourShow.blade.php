@extends('layouts.admin')
@section('content')
{{-- {{ dd($order->tour->image) }} --}}
<div class="row ">
  <div class="col-md-4 me-5 ">
      <div class="row justify-content-center">
        <div class="card mb-3 p-3">
          <div class="row justify-content-center">
            <img src="{{ asset('images/tour/profile/' . $order->tour->image) }}" class="" style="max-width: 100%"  alt="...">
          </div>
        </div>  
      </div>
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
              <label for="username">Nama Pemesan</label>
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
              <label for="date">Pemesanan Untuk</label>
              <input type="text" class="form-control" id="date" value="{{ date('d M Y', strtotime( $order->date)) }}" aria-describedby="emailHelp"  readonly>
            </div>
          </div>
          <div class="col">
            <div class="form-group">
              <label for="nama paket">Nama Paket</label>
              <input type="text" class="form-control" id="nama paket" value="{{ $order->tour->name}}" aria-describedby="emailHelp"  readonly>

            </div>
          </div>
        </div>        
      
        <div class="row justify-content-end me-4">
          
          @switch($order->status)
              @case(0)
                  <div class="col-2">
                    <form action="/admin/order/tour/delete/{{ $order->id }}" method="POST">
                      @csrf
                      <button type="submit" class="btn btn-danger px-4 py-2">Hapus</button>
                    </form>
                  </div>
                  @break
              @case(1)
                  <div class="col-2">
                    <form action="/admin/order/tour/{{ $order->id }}" method="POST">
                      @csrf
                      <input type="hidden" name="status" value="0">
                      <button type="submit" class="btn btn-dark px-4 py-2">Tolak</button>
                    </form>
                  </div>
                  <div class="col-2">
                    <form action="/admin/order/tour/{{ $order->id }}" method="POST">
                      @csrf
                      <input type="hidden" name="status" value="2">
                      <button type="submit" class="btn btn-warning px-4 py-2">Terima</button>
                    </form>
                  </div>
                  @break
              @case(2)
                  <div class="col-2">
                    <form action="/admin/order/tour/delete/{{ $order->id }}" method="POST">
                      @csrf
                      <button type="submit" class="btn btn-danger px-4 py-2">Hapus</button>
                    </form>
                  </div>
                  <div class="col-2">
                    <form action="/admin/order/tour/{{ $order->id }}" method="POST">
                      @csrf
                      <input type="hidden" name="status" value="3">
                      <button type="submit" class="btn btn-success px-4 py-2">Selesai</button>
                    </form>
                  </div>
                  @break
              @case(3)
                  <div class="col-2">
                    <form action="/admin/order/tour/delete/{{ $order->id }}" method="POST">
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