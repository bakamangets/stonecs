@extends('adminlte::page')

@section('title', 'Data Kategori Produk')

@section('content_header')

@stop

@section('content')
@role('admin')
    <h2>Data Kategori Produk</h2>
    <a href="{{ route('tambahjenis') }}" class="btn btn-success" style="margin-bottom:10px;" >Tambah Data</a>
                          <table class="table table-bordered">          
                            <thead class="thead-dark" >           
                              <tr>                     
                                <th>Kode Kategori</th>                       
                                <th>Nama</th>                 
                                <th colspan="3" style="text-align: center;"></th>           
                                </tr>          
                              </thead>          
                              <tbody>                     
                                <tr>      
                                @foreach ($jenis as $i => $p) 
                                <tr>      
                                 <td>{{ $p->KodeJenis }}</td>
                                 <td>{{ $p->NamaJenis }}</td>                                   
                                 <!-- <td style="width : 50px;">
                                  <a class="btn btn-warning" href="{{ route('showjenis', $p->KodeJenis) }}"> Detail</a>
                                 </td>   -->           
                                 <td style="width : 50px;">
                                    <a class="btn" href="{{ route('editjenis', $p->KodeJenis) }}"> 
                                    <i class="fas fa-fw fa-edit" style="color:orange;" ></i>
                                    </a>
                                 </td>             
                                 <td style="width : 50px;">
                                 <form method="post" action="{{route('jenis.destroy',$p->KodeJenis)}}">
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
                          {{$jenis->links()}}
@elserole('owner') 
    <h2>Data Kategori Produk</h2>
    <a href="{{ route('home') }}" class="btn btn-default">Kembali</a>
    <!-- <a href="{{ route('tambahjenis') }}" class="btn btn-primary">Tambah Data</a> -->
                          <table class="table table-striped">          
                            <thead>           
                              <tr>                     
                                <th>Kode Kategori</th>                       
                                <th>Nama</th>                 
                                <!-- <th colspan="3" style="text-align: center;"></th>           </tr>           -->
                              </thead>          
                              <tbody>                     
                                <tr>      
                                @foreach ($jenis as $i => $p) 
                                <tr>      
                                 <td>{{ $p->KodeJenis }}</td>
                                 <td>{{ $p->NamaJenis }}</td>                                   
                                 <!-- <td style="width : 50px;">
                                  <a class="btn btn-warning" href="{{ route('showjenis', $p->KodeJenis) }}"> Detail</a>
                                 </td>   -->           
                                 <!-- <td style="width : 50px;">
                                    <a class="btn btn-success" href="{{ route('editjenis', $p->KodeJenis) }}"> 
                                    <i class="fas fa-fw fa-edit"></i>
                                    </a>
                                 </td>             
                                 <td style="width : 50px;">
                                 <form method="post" action="{{route('jenis.destroy',$p->KodeJenis)}}">
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
                          {{$jenis->links()}}
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