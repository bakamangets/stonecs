@extends('adminlte::page')

@section('title', 'Transaksi')

@section('content_header')

@stop

@section('content')
    @role('owner')
    <h2>Data Transaksi</h2>
    <!-- <a href="{{ route('home') }}" class="btn btn-default">Kembali</a> -->
    <form action="{{route('transaksi.cetak')}}" method="GET">
    <div class="row">
        <div class="col-md-2">
            <input type="text" name="awal" class="form-control datepicker" placeholder="Tanggal Mulai" required>
        </div>
        <div class="col-md-2">
            <input type="text" name="akhir" class="form-control datepicker" placeholder="Tanggal Mulai" required>
        </div>
        <div class="col-md-2">
            <button type="submit" class="btn btn-info"><i class="fa fa-search"></i>Cetak</button>
        </div>
    </div>
    </form>
    <!-- <a href="{{ route('transaksi.cetak') }}" class="btn btn-primary">Cetak Laporan</a> -->
         <table class="table table-striped">          
                            <thead>           
                              <tr>                     
                                <th>Kode Transaksi</th>  
                                <th>Tanggal</th>                        
                                <th>Pelanggan</th>   
                                <th>Produk</th>   
                                <th>Jumlah</th>   
                                <th>Total Harga</th>   
                                <th>Status Transaksi</th>                 
                                <th colspan="3" style="text-align: center;"></th>           
                              </tr>          
                              </thead>          
                              <tbody>                     
                                <tr>      
                                @foreach ($transaksi as $i => $p) 
                                <tr>      
                                 <td>{{ $p->KodeTransaksi }}</td>
                                 <td>{{ $p->TglOrder }}</td> 
                                 <td>{{ $p->KodePelanggan }}</td>
                                 <td>{{ $p->KodeProduk }}</td>
                                 <td>{{ $p->Jumlah }}</td> 
                                 <td>Rp. {{ number_format($p->TotalBayar) }},-</td>
                                 <td>{{ $p->StatusTransaksi }}</td>                          
                                 <!-- <td style="width : 50px;">
                                  <a class="btn btn-warning" href=""> Detail</a>
                                 </td>         -->     
                                 <td style="width : 50px;">
                                  <a class="btn btn-success" href="{{ route('showtransaksi', $p->KodeTransaksi) }}">
                                    <i class="fas fa-fw fa-eye"></i>
                                  </a>
                                 </td>             
                                 <td style="width : 50px;">
                                 <form method="post" action="{{route('transaksi.destroy',$p->KodeTransaksi)}}">
                                    {{csrf_field()}}
                                    <input type="hidden" name="method" value="DELETE">
                                    <button class="btn btn-danger btn-hapus" type="submit">
                                        <i class="fas fa-fw fa-trash-alt"></i>
                                    </button>
                                 </form>            
                                 </td>
                                 </tr>
                                 @endforeach      
                                </tr>                
                            </tbody>         
                          </table>   
                          {{$transaksi->links()}}
    @elserole ('admin')    
    <h2>Data Transaksi</h2>
        <!-- <a href="{{ route('tambahtransaksi') }}" class="btn btn-primary">Tambah Data</a>    -->
        <form action="{{route('transaksi.cetak')}}" method="GET">
        <div class="row" style="margin-bottom:10px;" >
            <div class="col-md-2">
                <!-- <input type="date" name="awal" class="form-control datepicker" value="{{$awal ?? null}}" placeholder="Tanggal Mulai" required> -->
                <input class="date form-control" type="text" name="awal" id="awal" placeholder="Tanggal Awal" value="{{$awal}}" autofocus required>
                <script type="text/javascript">
                        $('.date').datepicker({  
                            format: 'yyyy-mm-dd'
                        });  
                </script>
            </div>
            <div class="col-md-2">
                <!-- <input type="date" name="akhir" class="form-control datepicker" value="{{$akhir ?? null}}" placeholder="Tanggal Akhir" required> -->
                <input class="date form-control" type="text" name="akhir" id="akhir" placeholder="Tanggal Akhir" value="{{$akhir}}" autofocus required>
                <script type="text/javascript">
                        $('.date').datepicker({  
                            format: 'yyyy-mm-dd'
                        });  
                </script>
            </div>
			<div class="col-md-2">
                <button type="button" id="search" class="btn btn-warning">Search</button>
            </div>
            <div class="col-md-2" style="margin-left:-100px;" >
                <button type="submit" class="btn btn-success"><i class="fa fa-search"></i>Cetak</button>
            </div>
        </div>
        </form>
        <!-- <a href="{{ route('transaksi.cetak') }}" class="btn btn-primary">Cetak Laporan</a> -->
        <table class="table table-bordered">          
                            <thead class="thead-dark" >           
                              <tr>                     
                                <th>Kode Transaksi</th>  
                                <th>Tanggal</th>                        
                                <th>Pelanggan</th>   
                                <th>Produk</th>   
                                <th>Jumlah</th>   
                                <th>Total Harga</th>   
                                <th>Status Transaksi</th>                 
                                <th colspan="3" style="text-align: center;"></th>           
                              </tr>          
                              </thead>          
                              <tbody>                     
                                <tr>      
                                @foreach ($transaksi as $i => $p) 
                                <tr>      
                                 <td>{{ $p->KodeTransaksi }}</td>
                                 <td>{{ $p->TglOrder }}</td> 
                                 <td>{{ $p->KodePelanggan }}</td>
                                 <td>{{ $p->KodeProduk }}</td>
                                 <td>{{ $p->Jumlah }}</td> 
                                 <td>Rp. {{ number_format($p->TotalBayar) }},-</td>
                                 <td>{{ $p->StatusTransaksi }}</td>                          
                                 <td style="width : 50px;">
                                  <a class="btn" href="{{ route('showtransaksi', $p->KodeTransaksi) }}">
                                  <i class="fas fa-fw fa-eye" style="color:green;" ></i>
                                  </a>
                                 </td>             
                                 <td style="width : 50px;">
                                  <a class="btn" href="{{ route('edittransaksi', $p->KodeTransaksi) }}">
                                      <i class="fas fa-fw fa-edit" style="color:orange;" ></i>
                                  </a>
                                 </td>             
                                 <td style="width : 50px;">
                                 <form method="post" action="{{route('transaksi.destroy',$p->KodeTransaksi)}}">
                                    {{csrf_field()}}
                                    <input type="hidden" name="method" value="DELETE">
                                    <button class="btn btn-hapus" type="submit">
                                        <i class="fas fa-fw fa-trash-alt" style="color:red;" ></i>
                                    </button>
                                 </form>            
                                 </td>
                                 </tr>
                                 @endforeach      
                                </tr>                
                            </tbody>         
                          </table>   
    @else
    <h2>Transaksi Saya</h2>
         <table class="table table-bordered">          
                            <thead class="thead-dark" >           
                              <tr>                     
                                <th>No. Transaksi</th>  
                                <th>Tanggal</th>                          
                                <th>Produk</th>   
                                <th>Jumlah</th>   
                                <th>Total Harga</th>   
                                <th>Status Transaksi</th>                 
                                <th colspan="3" style="text-align: center;"></th>           
                              </tr>          
                              </thead>          
                              <tbody>                     
                                <tr>      
                                @foreach ($transaksi as $i => $p) 
                                <tr>      
                                 <td>{{ $p->KodeTransaksi }}</td>
                                 <td>{{ $p->TglOrder }}</td> 
                                 <td>{{ $p->KodeProduk }}</td>
                                 <td>{{ $p->Jumlah }}</td> 
                                 <td>Rp. {{ number_format($p->TotalBayar) }},-</td>
                                 <td>{{ $p->StatusTransaksi }}</td>                          
                                 <td style="width : 50px;">
                                  <a class="btn" href="{{ route('showtransaksi', $p->KodeTransaksi) }}">
                                    <i class="fas fa-fw fa-eye" style="color:green" ></i>
                                  </a>
                                 </td>             
                                 <!-- <td style="width : 50px;">
                                  <a class="btn btn-warning" href="{{ route('edittransaksi', $p->KodeTransaksi) }}">
                                      <i class="fas fa-fw fa-edit"></i>
                                  </a>
                                 </td>    -->          
                                 <td style="width : 50px;">
                                 <form method="post" action="{{route('transaksi.destroy',$p->KodeTransaksi)}}">
                                    {{csrf_field()}}
                                    <input type="hidden" name="method" value="DELETE">
                                    <button class="btn btn-hapus" type="submit">
                                        <i class="fas fa-fw fa-trash-alt" style="color:red;" ></i>
                                    </button>
                                 </form>            
                                 </td>
                                 </tr>
                                 @endforeach      
                                </tr>                
                            </tbody>         
                          </table>   
    @endrole
                         
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
	<script>
		$('body').on('click','#search',function(){
			var akhir = $('#akhir').val();
			var awal = $('#awal').val();
			if(awal != '' && akhir != ''){
				window.location.href = "http://localhost/cv_sua_artha/public/transaksi/search/"+awal+" "+akhir;
			}
		});
	</script>
@stop