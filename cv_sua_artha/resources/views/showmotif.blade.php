@extends('adminlte::page')

@section('title', 'Detail Motif')

@section('content_header')
    <h1>Detail Motif</h1>
@stop

@section('content')
    @role('admin')
        <h1></h1>
        <div class="card-body">
          <div class="row">
            <div class="col-12 col-sm-6">
              <h3 class="d-inline-block d-sm-none"></h3>
              <div class="col-12">
                <img src="{{ asset('gambar_motif/' .$motif->Gambar) }}" class="product-image" alt="Motif Image">
              </div>             
            </div>
            <div class="col-12 col-sm-6">
              <h3 class="my-3">{{ $motif->NamaMotif }}</h3>
              <p>{{ $motif->KodeJenis }}</p>

              <hr>

              <div class="mt-4">
                <div class="btn btn-default btn-lg btn-flat">
                  <i class="fas fa-share fa-lg mr-2"></i> 
                  <a href="{{ route('settingpesan') }}">Kembali</a>
                </div>
              </div>


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
                <img src="{{ asset('gambar_produk/' .$produk->Gambar) }}" class="product-image" alt="Product Image">
              </div>
            </div>
            <div class="col-12 col-sm-6">
              <h3 class="my-3">{{ $produk->NamaProduk }}</h3>
              <p>{{ $produk->KodeJenis }}</p>

              <hr>

              <div class="bg-gray py-2 px-3 mt-4">
                <h2 class="mb-0">
                  Rp.{{number_format($produk->Harga)}},-
                </h2>
                <h4 class="mt-0">
                  <small> *Harga sudah termasuk pajak & ongkos kirim. </small>
                </h4>
              </div>

              <div class="mt-4">
                <div class="btn btn-success btn-lg btn-flat">
                  <i class="fas fa-cart-plus fa-lg mr-2"></i> 
                  <a href="{{ route('tambahkeranjang', $produk->KodeProduk) }}" class="text-white">Beli</a>
                </div>

                <div class="btn btn-default btn-lg btn-flat">
                  <i class="fas fa-share fa-lg mr-2"></i> 
                  <a href="{{ route('home') }}">Kembali</a>
                </div>
              </div>

            </div>
          </div>
          <div class="row mt-4">
            <nav class="w-100">
              <div class="nav nav-tabs" id="product-tab" role="tablist">
                <a class="nav-item nav-link active" id="product-desc-tab" data-toggle="tab" href="#product-desc" role="tab" aria-controls="product-desc" aria-selected="true">Deskripsi</a>
                <a class="nav-item nav-link" id="product-comments-tab" data-toggle="tab" href="#product-comments" role="tab" aria-controls="product-comments" aria-selected="false">Tersedia</a>
              </div>
            </nav>
            <div class="tab-content p-3" id="nav-tabContent">
              <div class="tab-pane fade show active" id="product-desc" role="tabpanel" aria-labelledby="product-desc-tab">{{$produk->Deskripsi}}</div>
              <div class="tab-pane fade" id="product-comments" role="tabpanel" aria-labelledby="product-comments-tab">{{$produk->Stok}} pcs</div>
            </div>
          </div>
        </div>
      @endrole
    
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop