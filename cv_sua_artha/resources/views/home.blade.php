@extends('adminlte::page')

@section('title', 'Home - CV Sua Artha')

@section('content_header')

@stop

@section('content')
    @role('owner')
        <h2>Dashboard</h2>
        <div class="row">
          <div class="col-lg-3 col-6">
            
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{$huser}}</h3>

                <p>Jumlah User Saat Ini</p>
              </div>
              <div class="icon">
                <i class="fas fa-fw fa-users"></i>
              </div>
              <a href="{{ route('user') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
        
          <div class="col-lg-3 col-6">
            
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>{{$hjenis}}</h3>

                <p>Jumlah Kategori</p>
              </div>
              <div class="icon">
                <i class="fas fa-fw fa-tags"></i>
              </div>
              <a href="{{ route('jenis') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <div class="col-lg-3 col-6">
            
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>{{$hproduk}}</h3>

                <p>Total Produk</p>
              </div>
              <div class="icon">
                <i class="fas fa-fw fa-box-open"></i>
              </div>
              <a href="{{ route('produk') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <div class="col-lg-3 col-6">
            
            <div class="small-box bg-success">
              <div class="inner">
                <h3>{{$htransaksi}}</h3>

                <p>Transaksi Masuk</p>
              </div>
              <div class="icon">
                <i class="fas fa-fw fa-cash-register"></i>
              </div>
              <a href="{{ route('transaksi') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
        </div>
    @elserole ('admin')
        <h2>Dashboard</h2>
        <div class="row">
          <div class="col-lg-3 col-6">
            
            <div class="small-box bg-info">
              <div class="icon">
                <i class="fas fa-fw fa-tags" style="left:15px;" ></i>
              </div>
			  <div class="inner" style="text-align:right;" >
                <h3>{{$hjenis}}</h3>

                <p>Jumlah Kategori</p>
              </div>
              <a href="{{ route('jenis') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
        
          <div class="col-lg-3 col-6">
            
            <div class="small-box bg-danger" style="background-color:#6f42c1 !important;" >
              <div class="inner" style="text-align:right;" >
                <h3>{{$hproduk}}</h3>

                <p>Jumlah Produk</p>
              </div>
              <div class="icon">
                <i class="fas fa-fw fa-box-open" style="left:15px;" ></i>
              </div>
              <a href="{{ route('produk') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <div class="col-lg-3 col-6">
            
            <div class="small-box bg-warning">
              <div class="inner" style="text-align:right;color:white;" >
                <h3>{{$hpesan}}</h3>

                <p>Pesanan Masuk</p>
              </div>
              <div class="icon">
                <i class="fas fa-fw fa-file-alt" style="left:15px;" ></i>
              </div>
              <a href="{{ route('pesan') }}" class="small-box-footer" style="color:white !important;" >More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

          <div class="col-lg-3 col-6">
            
            <div class="small-box bg-success">
              <div class="inner" style="text-align:right;" >
                <h3>{{$htransaksi}}</h3>

                <p>Transaksi Masuk</p>
              </div>
              <div class="icon">
                <i class="fas fa-fw fa-cash-register" style="left:15px;" ></i>
              </div>
              <a href="{{ route('transaksi') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
        </div>
    @else
          <h2>Semua Produk</h2>
            <div class="col-12">
            <div class="card">
              <div class="card-header">
                <div class="card-title float-right">
                  <!-- <label>Kategori: </label>
                  <select class="form-control">
                      <option value="">Semua</option>
                        @foreach($jenis as $j)
                          <option value="">{{$j->NamaJenis}}</option>
                        @endforeach
                  </select> -->
                  <form action="{{url()->current()}}">
                  <div class="row">
                    <div class="col-md-10">
                      <input type="text" name="keyword" class="form-control" placeholder="Cari produk..."value="{{request('keyword')}}">
                    </div>
                    <div class="col-md-2 text-right">
                      <button type="submit" class="btn btn-success">
                        <i class="fas fa-fw fa-search"></i>
                      </button>
                    </div>
                  </div>
                  </form>
                </div>
              </div>
              
              <div class="card-body">
                <div class="row">
                  @foreach($produk as $p)
                  <div class="col-sm-2" style="border:1px solid #eaeaea;margin:5px;" >
                    <a href="{{ route('showproduk', $p->KodeProduk) }}" data-toggle="lightbox" data-title="sample 1 - white" data-gallery="gallery">
                      <img src="{{ asset('gambar_produk/' .$p->Gambar) }}" class="img-fluid mb-2" alt="white sample">
                    </a>
                    <label>{{$p->NamaProduk}}</label>
                    <label>Rp.{{number_format($p->Harga)}},-</label>
                  </div>
                  @endforeach
                </div>
              </div>
              {{$produk->links()}}
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