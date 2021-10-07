@extends('adminlte::page')

@section('title', 'Pesanan')

@section('content_header')

@stop

@section('content')
    @role('owner')
    <h2>Data Pesanan</h2>
    <table class="table table-striped">          
                            <thead>           
                              <tr>             
                                <th>Kode Pesanan</th>        
                                <th>Tanggal</th>
                                <th>Nama Pemesan</th>
                                <th>Alat Musik</th>
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
                                 <td>{{ $p->KodePelanggan }}</td>
                                 <td>{{ $p->AlatMusik }}</td>
                                 <td>{{ $p->StatusPesan }}</td>                             
                                 <td style="width : 50px;">
                                  <a class="btn btn-success" href="{{ route('showpesan',$p->KodePesan) }}">
                                  <i class="fas fa-fw fa-eye"></i>
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
                          {{$pesan->links()}}

    @elserole ('admin')    
    <h2>Data Pesanan</h2>
    <form action="{{route('pesan.cetak')}}" method="GET">
        <div class="row" style="margin-bottom:10px;" >
            <div class="col-md-2">
                <!-- <input type="date" name="awal" class="form-control datepicker" value="{{$awal ?? null}}" placeholder="Tanggal Mulai" required> -->
                <input class="date form-control" type="text" id="awal" name="awal" placeholder="Tanggal Awal" value="{{$awal}}" autofocus required>
                <script type="text/javascript">
                        $('.date').datepicker({  
                            format: 'yyyy-mm-dd'
                        });  
                </script>
            </div>
            <div class="col-md-2">
                <!-- <input type="date" name="akhir" class="form-control datepicker" value="{{$akhir ?? null}}" placeholder="Tanggal Akhir" required> -->
                <input class="date form-control" type="text" id="akhir" name="akhir" placeholder="Tanggal Akhir" value="{{$akhir}}" autofocus required>
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
			<div class="col-md-2" style="margin-left:-90px;" >
				<a href="{{ route('settingpesan') }}" class="btn btn-primary">Setting</a>
            </div>
        </div>
        </form>
                          <table class="table table-bordered">          
                            <thead class="thead-dark" >           
                              <tr>             
                                <th>Kode Pesanan</th>        
                                <th>Tanggal</th>
                                <th>Nama Pemesan</th>
                                <th>Jenis Furniture</th>
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
                                 <td>{{ $p->KodePelanggan }}</td>
                                 <td>{{ $p->JenisFurniture }}</td>
                                 <td>{{ $p->StatusPesan }}</td>                           
                                 <td style="width : 50px;">
                                  <a class="btn" href="{{ route('showpesan',$p->KodePesan) }}">
                                  <i class="fas fa-fw fa-eye" style="color:green;" ></i>
                                  </a>
                                 </td>             
                                 <td style="width : 50px;">
                                  <a class="btn" href="{{ route('editpesan',$p->KodePesan) }}">
                                  <i class="fas fa-fw fa-edit" style="color:orange;" ></i>
                                  </a>
                                 </td>             
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

    @else
    <h2>Custom Order</h2>
    <div class="row">
                  <div class="col-sm-12">
                    <a href="{{ route('pesancustom') }}" data-toggle="lightbox" data-title="sample 1 - white" data-gallery="gallery">
                      <img src="http://localhost/cv_sua_artha/public/background.png" class="img-fluid mb-2" alt="custom furniture" style="width:100%;" >
                    </a>
                    <label>Custom Furniture</label>
                  </div>
	</div>

                  <!--<div class="col-sm-6">
                    <a href="{{ route('pesangitare') }}" data-toggle="lightbox" data-title="sample 1 - white" data-gallery="gallery">
                      <img src="https://stuff.fendergarage.com/images/t/N/v/taxonomy-electric-guitar-duosonic.png" class="img-fluid mb-2" alt="gitar elektrik">
                    </a>
                    <label>Gitar Elektrik</label>
                  </div>

                  <div class="col-sm-6">
                    <a href="{{ route('pesanbass') }}" data-toggle="lightbox" data-title="sample 1 - white" data-gallery="gallery">
                      <img src="https://stuff.fendergarage.com/images/W/D/A/taxonomy-acoustic-guitar-acoustic-bass.png" class="img-fluid mb-2" alt="bass akustik">
                    </a>
                    <label>Bass Akustik</label>
                  </div>

                  <div class="col-sm-6">
                    <a href="{{ route('pesanbasse') }}" data-toggle="lightbox" data-title="sample 1 - white" data-gallery="gallery">
                      <img src="https://stuff.fendergarage.com/images/s/b/5/taxonomy-bass-precision-american-ultra.png" class="img-fluid mb-2" alt="bass elektrik">
                    </a>
                    <label>Bass Elektrik</label>
                  </div>-->

        <a href="{{ route('mypesan') }}" class="btn btn-success">Pesanan Saya</a>
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
				window.location.href = "http://localhost/cv_sua_artha/public/pesan/search/"+awal+" "+akhir;
			}
		});
	</script>
@stop