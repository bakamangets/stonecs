@extends('adminlte::page')

@section('title', 'Detail Pesanan')

@section('content_header')
    <h1>Detail Pesanan</h1>
@stop

@section('content')
@role('owner')
<h1></h1>
        <div class="card-body">
          <div class="row">
            <div class="col-12 col-sm-6">
              <h3 class="d-inline-block d-sm-none"></h3>
              <div class="col-12">
                <img src="{{ asset('gambar_pesan/' .$pesan->Gambar) }}" class="product-image" alt="Product Image">
              </div>             
            </div>
            <div class="col-12 col-sm-6">
              <h3 class="my-3">{{ $pesan->AlatMusik }} {{ $pesan->Headstock }} {{ $pesan->Body }}</h3>
              <p>Dipesan pada {{ $pesan->TglPesan }}</p>
              <p>Kode Pesanan : {{ $pesan->KodePesan }}</p>
              <p>Nama Pemesan : {{ $pesan->KodePelanggan }}</p>
			  
              <p>Status Pesanan : {{ $pesan->StatusPesan }}</p>
              <p>DP Harus Dibayar : Rp.{{ number_format($pesan->DP) }},-</p>

              <div class="mt-4">
                <div class="btn btn-default btn-lg btn-flat">
                  <i class="fas fa-share fa-lg mr-2"></i> 
                  <a href="{{ route('pesan') }}">Kembali</a>
                </div>
              </div>


            </div>
          </div>
          <div class="row mt-4">
            <nav class="w-100">
              <div class="nav nav-tabs" id="product-tab" role="tablist">
                <a class="nav-item nav-link active" id="product-desc-tab" data-toggle="tab" href="#product-desc" role="tab" aria-controls="product-desc" aria-selected="true">Spesifikasi</a>
                <a class="nav-item nav-link" id="product-comments-tab" data-toggle="tab" href="#product-comments" role="tab" aria-controls="product-comments" aria-selected="false">Komentar Tambahan</a>
              </div>
            </nav>
            <div class="tab-content p-3" id="nav-tabContent">
              <div class="tab-pane fade show active" id="product-desc" role="tabpanel" aria-labelledby="product-desc-tab">
              {{$pesan->Bahan}} {{$pesan->Motif}} {{$pesan->Ukuran}} {{$pesan->Model}}
              </div>
              <div class="tab-pane fade" id="product-comments" role="tabpanel" aria-labelledby="product-comments-tab">{{$pesan->Komentar}}</div>
            </div>
          </div>
        </div>
@elserole('admin')
<h1></h1>
        <div class="card-body">
          <div class="row">
            <div class="col-12 col-sm-6">
              <h3 class="d-inline-block d-sm-none"></h3>
              <div class="col-12">
                <img src="{{ asset('gambar_pesan/' .$pesan->Gambar) }}" class="product-image" alt="Product Image">
              </div>             
            </div>
            <div class="col-12 col-sm-6">
              <h3 class="my-3">{{ $pesan->JenisFurniture }}</h3>
              <p>Dipesan pada {{ $pesan->TglPesan }}</p>
              <p>Kode Pesanan : {{ $pesan->KodePesan }}</p>
              <p>Nama Pemesan : {{ $pesan->KodePelanggan }}</p>
			  <p>Telp Pemesan : {{ $pesan->TelpPelanggan }}</p>
              <p>Status Pesanan : {{ $pesan->StatusPesan }}</p>
              <p>DP Harus Dibayar : Rp.{{ number_format($pesan->DP) }},-</p>
              <p>Alamat Pengiriman : {{ $pesan->AlamatKirim }}</p>

              <div class="mt-4">
                <div class="btn btn-default btn-lg btn-flat">
                  <i class="fas fa-share fa-lg mr-2"></i> 
                  <a href="{{ route('pesan') }}">Kembali</a>
                </div>
              </div>


            </div>
          </div>
          <div class="row mt-4">
            <nav class="w-100">
              <div class="nav nav-tabs" id="product-tab" role="tablist">
                <a class="nav-item nav-link active" id="product-desc-tab" data-toggle="tab" href="#product-desc" role="tab" aria-controls="product-desc" aria-selected="true">Spesifikasi</a>
                <a class="nav-item nav-link" id="product-comments-tab" data-toggle="tab" href="#product-comments" role="tab" aria-controls="product-comments" aria-selected="false">Komentar Tambahan</a>
              </div>
            </nav>
            <div class="tab-content p-3" id="nav-tabContent">
              <div class="tab-pane fade show active" id="product-desc" role="tabpanel" aria-labelledby="product-desc-tab">
              {{$pesan->Bahan}} {{$pesan->Motif}} {{$pesan->Ukuran}} {{$pesan->Model}}
              </div>
              <div class="tab-pane fade" id="product-comments" role="tabpanel" aria-labelledby="product-comments-tab">{{$pesan->Komentar}}</div>
            </div>
          </div>
        </div>
@else
<h1></h1>
        <div class="card-body">
          <div class="row">
            <div class="col-12 col-sm-6">
              <h3 class="d-inline-block d-sm-none"></h3>
              <div class="col-12">
                <img src="{{ asset('gambar_pesan/' .$pesan->Gambar) }}" class="product-image" alt="Product Image">
              </div>             
            </div>
            <div class="col-12 col-sm-6">
              <h3 class="my-3">{{ $pesan->JenisFurniture }}</h3>
              <p>Dipesan pada {{ $pesan->TglPesan }}</p>
              <p>Kode Pesanan : {{ $pesan->KodePesan }}</p>
              <p>Status Pesanan : {{ $pesan->StatusPesan }}</p>
              <p>DP Harus Dibayar : Rp.{{ number_format($pesan->DP) }},-</p>
              <p>Alamat Pengiriman : {{ $pesan->AlamatKirim }}</p>

              <div class="bg-gray py-2 px-3 mt-4">
                <h4 class="mt-0">
                  <small> *Silahkan transfer DP menuju nomor rekening 567-678-890 </small>
                </h4>
              </div>

              <div class="mt-4">
                <div class="btn btn-default btn-lg btn-flat">
                  <i class="fas fa-share fa-lg mr-2"></i> 
                  <a href="{{ route('pesan') }}">Kembali</a>
                </div>
              </div>


            </div>
          </div>
          <div class="row mt-4">
            <nav class="w-100">
              <div class="nav nav-tabs" id="product-tab" role="tablist">
                <a class="nav-item nav-link active" id="product-desc-tab" data-toggle="tab" href="#product-desc" role="tab" aria-controls="product-desc" aria-selected="true">Spesifikasi</a>
                <a class="nav-item nav-link" id="product-comments-tab" data-toggle="tab" href="#product-comments" role="tab" aria-controls="product-comments" aria-selected="false">Komentar Tambahan</a>
              </div>
            </nav>
            <div class="tab-content p-3" id="nav-tabContent">
              <div class="tab-pane fade show active" id="product-desc" role="tabpanel" aria-labelledby="product-desc-tab">
              {{$pesan->Bahan}} {{$pesan->Motif}} {{$pesan->Ukuran}} {{$pesan->Model}}
              </div>
              <div class="tab-pane fade" id="product-comments" role="tabpanel" aria-labelledby="product-comments-tab">{{$pesan->Komentar}}</div>
            </div>
          </div>
        </div>
@endrole
@endsection