@extends('adminlte::page')

@section('title', 'Data User')

@section('content_header')
    <h1>Data User</h1>
@stop

@section('content')
    @role('owner')
    <a href="{{ route('home') }}" class="btn btn-default">Kembali</a>
         <table class="table table-striped">          
                            <thead>           
                              <tr>                     
                                <th>ID</th>  
                                <th>Nama User</th>                        
                                <th>Email</th>  
                                <th>No. Telp</th> 
                                <th>Alamat</th>
                                <th>Bergabung Pada</th>        
                              </tr>          
                              </thead>          
                              <tbody>                     
                                <tr>      
                                @foreach ($user as $i => $p) 
                                <tr>      
                                 <td>{{ $p->id }}</td>
                                 <td>{{ $p->name }}</td> 
                                 <td>{{ $p->email }}</td>
                                 <td>{{ $p->telp }}</td>
                                 <td>{{ $p->alamat }}</td>
                                 <td>{{ $p->created_at }}</td>
                                 </tr>
                                 @endforeach      
                                </tr>                
                            </tbody>         
                          </table>   
                          {{$user->links()}}
    @elserole ('admin')    
        <a href="{{ route('home') }}" class="btn btn-default">Kembali</a>
         <table class="table table-striped">          
                            <thead>           
                              <tr>                     
                                <th>ID</th>  
                                <th>Nama User</th>                        
                                <th>Email</th>  
                                <th>No. Telp</th> 
                                <th>Alamat</th>
                                <th>Bergabung Pada</th>        
                              </tr>          
                              </thead>          
                              <tbody>                     
                                <tr>      
                                @foreach ($user as $i => $p) 
                                <tr>      
                                 <td>{{ $p->id }}</td>
                                 <td>{{ $p->name }}</td> 
                                 <td>{{ $p->email }}</td>
                                 <td>{{ $p->telp }}</td>
                                 <td>{{ $p->alamat }}</td>
                                 <td>{{ $p->created_at }}</td>
                                 </tr>
                                 @endforeach      
                                </tr>                
                            </tbody>         
                          </table>   
                          {{$user->links()}}
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