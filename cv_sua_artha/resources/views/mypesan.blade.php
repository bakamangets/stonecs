@extends('adminlte::page')

@section('title', 'Custom Order')

@section('content_header')

@stop

@section('content')
    @role('owner')
                        <h1>Oops!</h1>
                        <h3>Mau kemana? Silahkan navigasi melalui sidebar :)</h3>

    @elserole ('admin')    
                        <h1>Oops!</h1>
                        <h3>Mau kemana? Silahkan navigasi melalui sidebar :)</h3>

    @else
    <h2>Pesanan Saya</h2>
    <a href="{{ route('pesan') }}" class="btn btn-default" style="margin-bottom:10px;" >Kembali</a>
    <table class="table table-bordered">          
                            <thead class="thead-dark" >           
                              <tr>             
                                <th>No. Pesanan</th>        
                                <th>Tanggal</th>
                                <th>Jenis Furniture</th>
                                <th>Total Harga</th>     
                                <th>Status Pesanan</th> 
                                <th colspan="3" style="text-align: center;"></th>           
                                </tr>          
                              </thead>          
                              <tbody>                     
                                <tr>      
                                @foreach ($pesan as $i => $p) 
                                <tr>      
                                 <td>{{ $p->KodePesan }}</td>
                                 <td>{{ $p->TglPesan }}</td>
                                 <td>{{ $p->JenisFurniture }}</td> 
                                 <td>Rp.{{number_format($p->DP) }},-</td>  
                                 <td>{{ $p->StatusPesan }}</td>                        
                                 <td style="width : 50px;">
                                  <a class="btn" href="{{ route('showpesan',$p->KodePesan) }}">
                                  <i class="fas fa-fw fa-eye" style="color:green;" ></i>
                                  </a>
                                 </td>             
                                 <!-- <td style="width : 50px;">
                                  <a class="btn btn-warning" href="">
                                  <i class="fas fa-fw fa-edit"></i>
                                  </a>
                                 </td>   -->           
                                 <td style="width : 50px;">
                                 <form method="post" action="{{route('pesan.destroy',$p->KodePesan)}}">
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
@stop