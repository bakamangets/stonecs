@extends('adminlte::page')

@section('title', 'Setting Custom Furniture')

@section('content_header')

@stop

@section('content')
    @role('admin')
        <h2>Data Custom Furniture</h2>
        <a href="{{ route('tambahbahan') }}" class="btn btn-success" style="margin-bottom:10px;" >Tambah Bahan</a>
                          <table class="table table-bordered">          
                            <thead class="thead-dark" >           
                              <tr>             
                                <th>Id</th>        
                                <th>Kategori</th>
                                <th>Nama Bahan</th>     
                                <th colspan="3" style="text-align: center;"></th>           
                                </tr>          
                              </thead>          
                              <tbody>                     
                                <tr>      
                                @foreach ($bahan as $i => $p) 
                                <tr>      
                                 <td>{{ $p->Id }}</td>
                                 <td>{{ $p->KodeJenis }}</td>
                                 <td>{{ $p->NamaBahan }}</td>                            
                                 <td style="width : 50px;">
                                  <a class="btn" href="{{ route('showbahan', $p->Id) }}">
                                  <i class="fas fa-fw fa-eye" style="color:green;" ></i>
                                  </a>
                                 </td>             
                                 <td style="width : 50px;">
                                  <a class="btn" href="{{ route('editbahan', $p->Id) }}">
                                  <i class="fas fa-fw fa-edit" style="color:orange;" ></i>
                                  </a>
                                 </td>             
                                 <td style="width : 50px;">
                                 <form method="post" action="{{route('bahan.destroy',$p->Id)}}">
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
						  
		<a href="{{ route('tambahmotif') }}" class="btn btn-success" style="margin-bottom:10px;" >Tambah Motif</a>
                          <table class="table table-bordered">          
                            <thead class="thead-dark" >           
                              <tr>             
                                <th>Id</th>        
                                <th>Kategori</th>
                                <th>Nama Motif</th>     
                                <th colspan="3" style="text-align: center;"></th>           
                                </tr>          
                              </thead>          
                              <tbody>                     
                                <tr>      
                                @foreach ($motif as $i => $p) 
                                <tr>      
                                 <td>{{ $p->Id }}</td>
                                 <td>{{ $p->KodeJenis }}</td>
                                 <td>{{ $p->NamaMotif }}</td>                            
                                 <td style="width : 50px;">
                                  <a class="btn" href="{{ route('showmotif', $p->Id) }}">
                                  <i class="fas fa-fw fa-eye" style="color:green;" ></i>
                                  </a>
                                 </td>             
                                 <td style="width : 50px;">
                                  <a class="btn" href="{{ route('editmotif', $p->Id) }}">
                                  <i class="fas fa-fw fa-edit" style="color:orange;" ></i>
                                  </a>
                                 </td>             
                                 <td style="width : 50px;">
                                 <form method="post" action="{{route('motif.destroy',$p->Id)}}">
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
						  
	<a href="{{ route('tambahmodel') }}" class="btn btn-success" style="margin-bottom:10px;" >Tambah Model</a>
                          <table class="table table-bordered">          
                            <thead class="thead-dark" >           
                              <tr>             
                                <th>Id</th>        
                                <th>Kategori</th>
                                <th>Nama Model</th>     
                                <th colspan="3" style="text-align: center;"></th>           
                                </tr>          
                              </thead>          
                              <tbody>                     
                                <tr>      
                                @foreach ($model as $i => $p) 
                                <tr>      
                                 <td>{{ $p->Id }}</td>
                                 <td>{{ $p->KodeJenis }}</td>
                                 <td>{{ $p->NamaModel }}</td>                            
                                 <td style="width : 50px;">
                                  <a class="btn" href="{{ route('showmodel', $p->Id) }}">
                                  <i class="fas fa-fw fa-eye" style="color:green;" ></i>
                                  </a>
                                 </td>             
                                 <td style="width : 50px;">
                                  <a class="btn" href="{{ route('editmodel', $p->Id) }}">
                                  <i class="fas fa-fw fa-edit" style="color:orange;" ></i>
                                  </a>
                                 </td>             
                                 <td style="width : 50px;">
                                 <form method="post" action="{{route('model.destroy',$p->Id)}}">
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
						  
	<a href="{{ route('tambahukuran') }}" class="btn btn-success" style="margin-bottom:10px;" >Tambah Ukuran</a>
                          <table class="table table-bordered">          
                            <thead class="thead-dark" >           
                              <tr>             
                                <th>Id</th>        
                                <th>Kategori</th>
                                <th>Nama Ukuran</th>     
                                <th colspan="3" style="text-align: center;"></th>           
                                </tr>          
                              </thead>          
                              <tbody>                     
                                <tr>      
                                @foreach ($ukuran as $i => $p) 
                                <tr>      
                                 <td>{{ $p->Id }}</td>
                                 <td>{{ $p->KodeJenis }}</td>
                                 <td>{{ $p->NamaUkuran }}</td>                                       
                                 <td style="width : 50px;">
                                  <a class="btn" href="{{ route('editukuran', $p->Id) }}">
                                  <i class="fas fa-fw fa-edit" style="color:orange;" ></i>
                                  </a>
                                 </td>             
                                 <td style="width : 50px;">
                                 <form method="post" action="{{route('ukuran.destroy',$p->Id)}}">
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