@extends('adminlte::page')

@section('title', 'Data Produk')

@section('content_header')

@stop

@section('content')
    @role('admin')
        <h2>Data Produk</h2>
        <a href="{{ route('tambahproduk') }}" class="btn btn-success" style="margin-bottom:10px;" >Tambah Data</a>
                          <table class="table table-bordered">          
                            <thead class="thead-dark" >           
                              <tr>             
                                <th>Kode Produk</th>        
                                <th>Kategori</th>
                                <th>Nama Produk</th>
                                <th>Harga</th>
                                <th>Stok</th>      
                                <th colspan="3" style="text-align: center;"></th>           
                                </tr>          
                              </thead>          
                              <tbody>                     
                                <tr>      
                                @foreach ($produk as $i => $p) 
                                <tr>      
                                 <td>{{ $p->KodeProduk }}</td>
                                 <td>{{ $p->KodeJenis }}</td>
                                 <td>{{ $p->NamaProduk }}</td> 
                                 <td>Rp.{{ number_format($p->Harga) }},-</td>
                                 <td>{{ $p->Stok }}</td>                           
                                 <td style="width : 50px;">
                                  <a class="btn" href="{{ route('showproduk', $p->KodeProduk) }}">
                                  <i class="fas fa-fw fa-eye" style="color:green;" ></i>
                                  </a>
                                 </td>             
                                 <td style="width : 50px;">
                                  <a class="btn" href="{{ route('editproduk', $p->KodeProduk) }}">
                                  <i class="fas fa-fw fa-edit" style="color:orange;" ></i>
                                  </a>
                                 </td>             
                                 <td style="width : 50px;">
                                 <form method="post" action="{{route('produk.destroy',$p->KodeProduk)}}">
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
                          {{$produk->links()}}
    @elserole('owner')
        <h2>Data Produk</h2>
        <a href="{{ route('home') }}" class="btn btn-default">Kembali</a>
        <!-- <a href="{{ route('tambahproduk') }}" class="btn btn-primary">Tambah Data</a> -->
                          <table class="table table-striped">          
                            <thead>           
                                <tr>             
                                <th>Kode Produk</th>        
                                <th>Kategori</th>
                                <th>Nama Produk</th>
                                <th>Harga</th>
                                <th>Stok</th>      
                                <!-- <th colspan="3" style="text-align: center;"></th>            -->
                                </tr>          
                              </thead>          
                              <tbody>                     
                                <tr>      
                                @foreach ($produk as $i => $p) 
                                <tr>      
                                 <td>{{ $p->KodeProduk }}</td>
                                 <td>{{ $p->KodeJenis }}</td>
                                 <td>{{ $p->NamaProduk }}</td> 
                                 <td>Rp.{{ number_format($p->Harga) }},-</td>
                                 <td>{{ $p->Stok }}</td>                           
                                 <!-- <td style="width : 50px;">
                                  <a class="btn btn-warning" href="{{ route('showproduk', $p->KodeProduk) }}">
                                  <i class="fas fa-fw fa-eye"></i>
                                  </a>
                                 </td>             
                                 <td style="width : 50px;">
                                  <a class="btn btn-success" href="{{ route('editproduk', $p->KodeProduk) }}">
                                  <i class="fas fa-fw fa-edit"></i>
                                  </a>
                                 </td>             
                                 <td style="width : 50px;">
                                 <form method="post" action="{{route('produk.destroy',$p->KodeProduk)}}">
                                    {{csrf_field()}}
                                    <input type="hidden" name="method" value="DELETE">
                                    <button class="btn btn-danger btn-hapus" type="submit">
                                        <i class="fas fa-fw fa-trash-alt"></i>
                                    </button>
                                 </form>            
                                 </td> -->
                                 </tr>
                                 @endforeach           
                                </tr>                
                            </tbody>         
                          </table>       
                          {{$produk->links()}} 
    @else
                        <h1>Oops!</h1>
                        <h3>Mau kemana? Silahkan navigasi melalui sidebar :)</h3>
    @endrole

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop