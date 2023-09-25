@extends('layouts.guest')
@section('content')
<section class="trending-product section" style="margin-top: 12px;">
  <div class="container">
      <div class="row">
          <div class="col-12">
              <div class="section-title">
                @switch($category)
                    @case(1)
                      <h2>Daftar Harga Paket Wisata dan Hotel </h2>
                      @break
                      @case(2)
                      <h2>Daftar Harga Paket Wisata tanpa Hotel </h2>
                      @break
                      @case(3)
                      <h2>Daftar Harga Paket Wisata Adventure </h2>
                      @break
                      @case(4)
                      <h2>Daftar Harga Paket Wisata Honeymoon </h2>
                      @break
                    @default
                @endswitch
                  <p>Pilih Paket Wisata yang kamu inginkan, isi data diri, Admin akan menghubungi anda, selamat liburan!!</p>
              </div>
          </div>
      </div>

      @if ($tours->first()->type !== null)
        <div class="row mb-5 justify-content-center">
          <div class="section-title">
            <h2>2 Hari 1 Malam</h2>
          </div>
          @foreach ($tours as $data)
          @if ($data->type == 1)
          @if ($data->status == 1)
          <div class="col-md-3 mb-3">
            <div class="card">
              <div class="card-header">
                <div class="flip-card">
                  <div class="flip-card-inner">
                    <div class="flip-card-front">
                      <img src="{{ asset('images/tour/profile/' . $data->image) }}" alt="Avatar" style="width:300px;height:400px;">
                    </div>
                    <div class="flip-card-back">
                      <img src="{{ asset('images/tour/facility/' . $data->facility) }}" alt="Avatar" style="width:300px;height:400px;">
                    </div>
                  </div>
                </div> 
              </div>
              <div class="card-body">
                <form action="/order/tour" method="POST">
                  @csrf
                  <input type="hidden" name="tour_id" value="{{ $data->id }}">
                  <div class="row justify-content-center">
                    <div class="col-8">
                      <div class="button">
                        <button  type="submit" class="btn">Pesan Sekarang</button>
                      </div>
                    </div>
                  
                  </div>
                </form>
              </div>
            </div>    
          </div>
          @endif   
          @endif
          @endforeach
          

        </div>
        <div class="row mb-5 justify-content-center">
          <div class="section-title">
            <h2>3 Hari 2 Malam</h2>
          </div>
          @foreach ($tours as $data)
          @if ($data->type == 2)
          @if ($data->status == 1)
          <div class="col-md-3 mb-3">
            <div class="card">
              <div class="card-header">
                <div class="flip-card">
                  <div class="flip-card-inner">
                    <div class="flip-card-front">
                      <img src="{{ asset('images/tour/profile/' . $data->image) }}" alt="Avatar" style="width:300px;height:400px;">
                    </div>
                    <div class="flip-card-back">
                      <img src="{{ asset('images/tour/facility/' . $data->facility) }}" alt="Avatar" style="width:300px;height:400px;">
                    </div>
                  </div>
                </div> 
              </div>
              <div class="card-body">
                <form action="/order/tour" method="POST">
                  @csrf
                  <input type="hidden" name="tour_id" value="{{ $data->id }}">
                  <div class="row justify-content-center">
                    <div class="col-8">
                      <div class="button">
                        <button  type="submit" class="btn">Pesan Sekarang</button>
                      </div>
                    </div>
                  
                  </div>
                </form>
              </div>
            </div>    
          </div>
          @endif   
          @endif
          @endforeach
          

        </div>
        <div class="row mb-5 justify-content-center">
          <div class="section-title">
            <h2>4 Hari 3 Malam</h2>
          </div>
          @foreach ($tours as $data)
          @if ($data->type == 3)
          @if ($data->status == 1)
          <div class="col-md-3 mb-3">
            <div class="card">
              <div class="card-header">
                <div class="flip-card">
                  <div class="flip-card-inner">
                    <div class="flip-card-front">
                      <img src="{{ asset('images/tour/profile/' . $data->image) }}" alt="Avatar" style="width:300px;height:400px;">
                    </div>
                    <div class="flip-card-back">
                      <img src="{{ asset('images/tour/facility/' . $data->facility) }}" alt="Avatar" style="width:300px;height:400px;">
                    </div>
                  </div>
                </div> 
              </div>
              <div class="card-body">
                <form action="/order/tour" method="POST">
                  @csrf
                  <input type="hidden" name="tour_id" value="{{ $data->id }}">
                  <div class="row justify-content-center">
                    <div class="col-8">
                      <div class="button">
                        <button  type="submit" class="btn">Pesan Sekarang</button>
                      </div>
                    </div>
                  
                  </div>
                </form>
              </div>
            </div>    
          </div>
          @endif   
          @endif
          @endforeach
          

        </div>
        
        
      @else
        <div class="row mb-5 justify-content-center">
          @foreach ($tours as $data)
            <div class="col-md-3 mb-3">
              <div class="card">
                <div class="card-header">
                  <div class="flip-card">
                    <div class="flip-card-inner">
                      <div class="flip-card-front">
                        <img src="{{ asset('images/tour/profile/' . $data->image) }}" alt="Avatar" style="width:300px;height:400px;">
                      </div>
                      <div class="flip-card-back">
                        <img src="{{ asset('images/tour/facility/' . $data->facility) }}" alt="Avatar" style="width:300px;height:400px;">
                      </div>
                    </div>
                  </div> 
                </div>
                <div class="card-body">
                  <form action="/order/tour" method="POST">
                    @csrf
                    <input type="hidden" name="tour_id" value="{{ $data->id }}">
                    <div class="row justify-content-center">
                      <div class="col-8">
                        <div class="button">
                          <button  type="submit" class="btn">Pesan Sekarang</button>
                        </div>
                      </div>
                    
                    </div>
                  </form>
                </div>
              </div>    
            </div>
            @endforeach
        </div>
      @endif
      
      

  </div>
</section>
@endsection